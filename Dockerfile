# image PHP avec extensions
FROM php:8.2-apache

# installer dépendances système
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    nodejs \
    npm

# installer composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# copier le projet
COPY . .

# installer dépendances PHP
RUN composer install --no-dev --optimize-autoloader

# installer dépendances JS
RUN npm install

# build Vite
RUN npm run build

# permissions Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80
