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
# 2. EXTENSIONS PHP (CRUCIAL)
# ==========================================
RUN docker-php-ext-install pdo pdo_mysql zip mbstring

# ==========================================
# 3. COMPOSER
# ==========================================
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# ==========================================
# 4. COPIER UNIQUEMENT package.json ET composer.json D'ABORD
# ==========================================
COPY package*.json ./
COPY composer*.json ./

# ==========================================
# 5. INSTALLER DÉPENDANCES (avant le code source)
# ==========================================
RUN npm ci                    # npm ci plus rapide/stable que npm install
RUN composer install --no-dev --optimize-autoloader --no-interaction

# ==========================================
# 6. COPIER LE CODE SOURCE (après dépendances)
# ==========================================
COPY . .

# ==========================================
# 7. BUILD VITE (maintenant que tout est là)
# ==========================================
RUN npm run build

# Vérification que le build a fonctionné
RUN ls -la public/build/ && cat public/build/manifest.json | head -20

# ==========================================
# 8. CONFIG APACHE
# ==========================================
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/conf-available/*.conf \
    && a2enmod rewrite

# ==========================================
# 9. PERMISSIONS
# ==========================================
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# ==========================================
# 10. ENTRYPOINT
# ==========================================
COPY .docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]