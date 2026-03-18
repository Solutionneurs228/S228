FROM php:8.2-apache

# ==========================================
# 1. INSTALLER DÉPENDANCES SYSTÈME
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
    && rm -rf /var/lib/apt/lists/*  # Nettoyage !

# ==========================================
# 2. INSTALLER EXTENSIONS PHP (CRUCIAL !)
# ==========================================
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    zip \
    mbstring

# ==========================================
# 3. INSTALLER COMPOSER
# ==========================================
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ==========================================
# 4. CONFIGURER WORKDIR
# ==========================================
WORKDIR /var/www/html

# ==========================================
# 5. COPIER LE CODE (sans vendor/)
# ==========================================
COPY . .

# ==========================================
# 6. INSTALLER DEPENDANCES JS (au build)
# ==========================================
RUN npm install && npm run build

# ==========================================
# 7. CONFIGURER APACHE POUR LARAVEL
# ==========================================
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/conf-available/*.conf \
    && a2enmod rewrite

# ==========================================
# 8. PERMISSIONS LARAVEL
# ==========================================
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# ==========================================
# 9. ENTRYPOINT (CRUCIAL !)
# ==========================================
COPY .docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]