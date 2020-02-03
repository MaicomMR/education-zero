#!/bin/bash

echo "Starting entrypoint.sh ..."
echo "Installing dependencies"
composer install

echo "Generating app key"
php artisan key:generate

echo "Running migrations..."
php artisan migrate

echo "Starting PHP FPM"
php-fpm