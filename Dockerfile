# ==========================================
# ÉTAPE 1 : Build des assets avec Node
# ==========================================
FROM node:20-alpine AS node-builder

WORKDIR /app

# Copier seulement les fichiers package* d'abord (cache Docker optimisé)
COPY package*.json ./
RUN npm ci

# Copier le reste et builder
COPY . .
RUN npm run build


# ==========================================
# ÉTAPE 2 : Image PHP finale
# ==========================================
FROM php:8.2-fpm-bullseye

# Installer dépendances système
RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libonig-dev libzip-dev libxml2-dev \
    nginx \
    && docker-php-ext-install pdo pdo_pgsql zip mbstring \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Copier Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copier le code Laravel
COPY . .

# Copier SEULEMENT le build Vite depuis l'étape 1 (très important !)
COPY --from=node-builder /app/public/build ./public/build

# Installer dépendances PHP + optimisations
RUN composer install --no-dev --optimize-autoloader --no-interaction \
    && php artisan storage:link \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache \
    && mkdir -p bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache public/build

# Exposer le port Render
EXPOSE 8000

# Lancer le serveur PHP
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
