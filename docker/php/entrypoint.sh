#!/bin/bash

# composer install -o --working-dir="$WORKDIR"/application

php-fpm -d listen=0.0.0.0:9000
