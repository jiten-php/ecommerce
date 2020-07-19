#! /bin/bash

composer dump-autoload
php artisan key:generate
php artisan config:clear
php artisan config:cache
php artisan migrate



