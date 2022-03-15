#!/bin/sh
php -v

# php artisan
sleep 6

#php artisan passport:install
php artisan config:clear
php artisan config:cache
php artisan cache:clear
#php artisan migrate
php artisan serve --host=0.0.0.0 --port=8002
