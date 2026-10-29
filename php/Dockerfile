FROM php:8.3.36-apache

# PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Apache modules
RUN a2enmod rewrite vhost_alias

# System dependencies needed for Composer
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    zip \
    && rm -rf /var/lib/apt/lists/*

# Install Composer (official binary from composer image)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /var/www/apps