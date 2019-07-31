FROM php:7.1-fpm

WORKDIR /var/www/onlir

RUN apt-get update \
&& docker-php-ext-install pdo pdo_mysql
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash - \
&& apt-get install -y nodejs
RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list
RUN apt-get update && apt-get install yarn