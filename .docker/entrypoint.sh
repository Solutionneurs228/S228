#!/bin/bash
set -e

echo "=========================================="
echo "🚀 Démarrage Laravel sur Render"
echo "=========================================="

# Vérifier que les variables sont présentes
if [ -z "$DB_HOST" ]; then
    echo "⚠️  ATTENTION: DB_HOST non défini"
fi

echo "📦 Installation des dépendances PHP..."
composer install --no-dev --optimize-autoloader --no-interaction

echo "⚡ Optimisation Laravel..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "🗄️  Migrations base de données..."
php artisan migrate --force

echo "🔥 Démarrage Apache..."
apache2-foreground