FROM php:8.0.30-apache

RUN docker-php-ext-install pdo pdo_mysql

COPY src /var/www/html/