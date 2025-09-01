# Build stage
FROM php:8.2-fpm-bullseye AS build

# Extensions PHP nécessaires à Laravel + Postgres
RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libonig-dev libzip-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_pgsql zip

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .
RUN composer install --no-dev --optimize-autoloader \
 && php artisan storage:link || true \
 && mkdir -p bootstrap/cache \
 && chmod -R 775 storage bootstrap/cache

# Runtime avec Nginx
FROM nginx:1.25-bullseye
# PHP-FPM
COPY --from=build /usr/local/etc/php /usr/local/etc/php
COPY --from=build /usr/local/bin/php /usr/local/bin/php
COPY --from=build /usr/local/sbin/php-fpm /usr/local/sbin/php-fpm
COPY --from=build /usr/lib/* /usr/lib/
COPY --from=build /usr/lib/x86_64-linux-gnu/* /usr/lib/x86_64-linux-gnu/
COPY --from=build /usr/lib/php /usr/lib/php
COPY --from=build /usr/bin/composer /usr/bin/composer

# Code et config
WORKDIR /var/www/html
COPY --from=build /var/www/html /var/www/html
COPY ./deploy/nginx.conf /etc/nginx/conf.d/default.conf

ENV APP_ENV=production
EXPOSE 10000
CMD php-fpm -D && nginx -g 'daemon off;'
