FROM php:8.1-fpm

RUN docker-php-ext-install pdo_mysql

# Set up Composer and Laravel
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install --working-dir="/var/www/php"

RUN composer dump-autoload --working-dir="/var/www/php"

RUN php artisan route:clear

RUN php artisan route:cache

RUN php artisan config:clear

RUN php artisan config:cache

CMD php artisan serve --host=127.0.0.1 --port=9000
