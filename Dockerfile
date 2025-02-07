# Use the official PHP lightweight image with Apache
FROM php:9.2-apache

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Expose port 80
EXPOSE 80

# Set entrypoint
CMD ["apache2-foreground"]