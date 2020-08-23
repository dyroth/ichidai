FROM php:7.3.12-apache-stretch

MAINTAINER Dyroth

COPY . /srv/app
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /srv/app


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    libpng-dev

RUN docker-php-ext-install zip

RUN apt-get install -y libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl

RUN docker-php-ext-install pdo pdo_mysql bcmath gd intl \
    && chown -R www-data:www-data /srv/app \
    && a2enmod rewrite