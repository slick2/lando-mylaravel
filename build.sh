#!/bin/bash
#
# check if laravel is installed


if [ ! -d "laravel" ]; then
    composer create-project laravel/laravel laravel
    cd laravel && composer install && cd ..
fi
# TODO: check $LANDO variable if present
cp .config/.env laravel/.env
# setup database
cd laravel && php artisan migrate && cd ..

