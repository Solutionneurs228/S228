#!/bin/bash
set -e

echo "🚀 Démarrage Laravel..."

# Vérifier que le build existe
if [ ! -f "public/build/manifest.json" ]; then
    echo "❌ ERREUR: manifest.json manquant !"
    exit 1
fi

echo "✅ Build Vite présent"

# Cache Laravel
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Migrations
php artisan migrate --force

# Démarrer Apache
apache2-foreground