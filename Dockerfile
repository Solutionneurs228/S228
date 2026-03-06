# ==========================================
# ÉTAPE 1 : Build Node
# ==========================================
FROM node:20-alpine AS node-builder

WORKDIR /app

# Copier les dépendances
COPY package*.json ./
RUN npm ci

# Copier le projet
COPY . .

# Vérifier les fichiers critiques
RUN echo "=== Vérification fichiers sources ===" && \
    ls -la vite.config.js && \
    ls -la tailwind.config.js && \
    ls -la postcss.config.js && \
    ls -la resources/css/style.css && \
    ls -la resources/js/app.js

# Build
RUN npm run build

# Vérification stricte
RUN echo "=== Vérification build ===" && \
    ls -la public/build/ && \
    test -f public/build/manifest.json && \
    echo "✅ manifest.json existe" || \
    (echo "❌ manifest.json MANQUANT" && exit 1)

# ==========================================
# ÉTAPE 2 : PHP
# ==========================================
FROM php:8.2-fpm-bullseye

RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libonig-dev libzip-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_pgsql zip mbstring \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copier le projet
COPY . .

# Copier le build Node (CRUCIAL!)
COPY --from=node-builder /app/public/build ./public/build

# Vérification finale
RUN echo "=== Vérification finale ===" && \
    ls -la public/build/ && \
    cat public/build/manifest.json

# Installer PHP + optimisations
RUN composer install --no-dev --optimize-autoloader --no-interaction \
    && php artisan storage:link \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache \
    && mkdir -p bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache public/build

EXPOSE 8000
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
