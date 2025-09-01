# Image PHP-FPM officielle
FROM php:8.2-fpm-bullseye

# Installer dépendances système pour Laravel + PostgreSQL
RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libonig-dev libzip-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_pgsql zip mbstring

# Copier Composer depuis l'image officielle
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Définir le dossier de travail
WORKDIR /var/www/html

# Copier le projet Laravel
COPY . .

# Installer les dépendances Laravel
RUN composer install --no-dev --optimize-autoloader \
 && php artisan storage:link || true \
 && mkdir -p bootstrap/cache \
 && chmod -R 775 storage bootstrap/cache

# Exposer le port utilisé par le serveur PHP intégré
EXPOSE 8000

# Lancer le serveur PHP intégré pour Render
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
