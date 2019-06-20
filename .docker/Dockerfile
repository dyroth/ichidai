FROM php:7.2.13-apache-stretch

MAINTAINER Dyroth

COPY . /srv/app
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /srv/app


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install -y libmagickwand-6.q16-dev --no-install-recommends \
 && ln -s /usr/lib/x86_64-linux-gnu/ImageMagick-6.8.9/bin-Q16/MagickWand-config /usr/bin \
 && pecl install imagick \
 && echo "extension=imagick.so" > /usr/local/etc/php/conf.d/ext-imagick.ini \
 && apt-get install poppler-utils -y \
 && apt-get install xpdf -y \
 && apt-get install git -y

RUN docker-php-ext-install mbstring pdo pdo_mysql gd sockets calendar zip \
    && chown -R www-data:www-data /srv/app \
    && a2enmod rewrite