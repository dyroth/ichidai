# Use the official PHP with Apache image as the base
FROM php:7.3-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    libpng-dev \
    libicu-dev \
    && rm -rf /var/lib/apt/lists/*

# Install and enable PHP extensions
RUN docker-php-ext-install zip pdo pdo_mysql bcmath gd intl

# Set working directory
WORKDIR /srv/app

# Copy application files
COPY . /srv/app

# Copy virtual host configuration
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Set ownership and enable Apache rewrite module
RUN chown -R www-data:www-data /srv/app \
    && a2enmod rewrite

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Expose port 80 for Apache
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
