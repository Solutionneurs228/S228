FROM php:8.2-apache

# ==========================================
# 1. DÉPENDANCES SYSTÈME
# ==========================================
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpq-dev \
    libzip-dev \
    libonig-dev \
    nodejs \
    npm \
    && rm -rf /var/lib/apt/lists/*

# ==========================================
# 2. EXTENSIONS PHP
# ==========================================
RUN docker-php-ext-install pdo pdo_mysql zip mbstring

# ==========================================
# 3. COMPOSER
# ==========================================
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# ==========================================
# 4. COPIER UNIQUEMENT LES FICHIERS DE DÉPENDANCES D'ABORD
# ==========================================
COPY package*.json ./
COPY vite.config.js ./        # ← CRUCIAL : Vite config doit être là avant le build

# ==========================================
# 5. INSTALLER NODE DEPENDANCES
# ==========================================
RUN npm ci                    # ← npm ci plus stable que npm install

# ==========================================
# 6. COPIER LE CODE SOURCE (SANS public/build grâce à .dockerignore)
# ==========================================
COPY . .

# ==========================================
# 7. BUILD VITE AVEC VÉRIFICATION
# ==========================================
RUN npm run build && \
    ls -la public/build/ && \
    cat public/build/manifest.json | grep assistance || (echo "❌ assistance.css manquant !" && exit 1)

# ==========================================
# 8. COMPOSER DEPENDANCES
# ==========================================
RUN composer install --no-dev --optimize-autoloader --no-interaction

# ==========================================
# 9. APACHE CONFIG
# ==========================================
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/conf-available/*.conf \
    && a2enmod rewrite

# ==========================================
# 10. PERMISSIONS
# ==========================================
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# ==========================================
# 11. ENTRYPOINT
# ==========================================
COPY .docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]