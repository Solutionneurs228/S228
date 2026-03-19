FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev libonig-dev nodejs npm \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo pdo_mysql zip mbstring

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

# ✅ Installer PHP
RUN composer install --no-dev --optimize-autoloader

# ✅ Build Vite
RUN npm install && npm run build

ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/conf-available/*.conf \
    && a2enmod rewrite

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

