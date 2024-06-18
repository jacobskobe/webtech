FROM php:7.4-fpm

# Install required system packages and PHP extensions
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo_pgsql

# Copy PHP application files to container
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

