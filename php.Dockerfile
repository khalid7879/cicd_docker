FROM php:8.0-fpm

RUN apt-get update && apt-get install -y \
    libzip-dev zip libpng-dev libonig-dev \
  && docker-php-ext-install mysqli pdo pdo_mysql \
  && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html
COPY . /var/www/html
RUN chown -R www-data:www-data /var/www/html
