#!/bin/bash
# Lancer PHP-FPM en arrière-plan
php-fpm &
# Lancer Nginx en avant-plan
nginx -g "daemon off;"
