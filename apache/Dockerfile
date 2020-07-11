FROM php:5.6-apache

RUN docker-php-ext-install mysql mysqli pdo pdo_mysql
COPY apache2.conf /etc/apache2/apache2.conf
COPY php.ini /usr/local/etc/php/conf.d/php.ini
