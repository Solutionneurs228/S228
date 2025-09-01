# ===== Étape 1 : Build PHP + Composer =====
FROM php:8.2-fpm-bullseye AS build

# Installer dépendances système pour Laravel + Postgres
RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libonig-dev libzip-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_pgsql zip mbstring

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copier le projet
WORKDIR /var/www/html
COPY . .

# Installer dépendances Laravel
RUN composer install --no-dev --optimize-autoloader \
 && php artisan storage:link || true \
 && mkdir -p bootstrap/cache \
 && chmod -R 775 storage bootstrap/cache

# ===== Étape 2 : Runtime Nginx + PHP-FPM =====
FROM nginx:1.25-bullseye

# Copier l’application depuis l’étape build
COPY --from=build /var/www/html /var/www/html

# Copier configuration Nginx
COPY ./deploy/nginx.conf /etc/nginx/conf.d/default.conf

# Définir le dossier de travail
WORKDIR /var/www/html

# Exposer le port
EXPOSE 80

# Lancer PHP-FPM et Nginx
CMD php-fpm -D && nginx -g 'daemon off;'
