
php artisan optimize:clear


php artisan tinker
>>> app('router')->getMiddleware()['admin']

php artisan route:list --name=admin.dashboard
