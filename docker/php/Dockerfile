FROM php:7.2-fpm

WORKDIR /var/www/


COPY src ./src
COPY vendor ./vendor
COPY index.php ./
COPY docker/php/php.ini /etc/php7/php.ini
COPY config.php ./