#!/bin/bash
#
# check if laravel is installed


if [ ! -d "laravel" ]; then
    composer create-project laravel/laravel laravel
    cd laravel && composer install
fi
