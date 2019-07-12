FROM php:7.1-fpm

RUN apt-get update \
&& docker-php-ext-install pdo pdo_mysql
RUN curl -sL https://deb.nodesource.com/setup_8.x | bash -
RUN apt-get install -y nodejs