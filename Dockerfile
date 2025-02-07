# Use the official PHP lightweight image with Apache
FROM php:8.3-apache-bullseye

# Set working directory
WORKDIR /var/www/html

# Install system dependencies for Laravel (GD, MySQL, etc.)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql \
    && apt-get clean

# Enable mod_rewrite for Apache (required for Laravel's clean URLs)
RUN a2enmod rewrite

# Configure Apache to allow overrides and access to the Laravel public directory
COPY ./apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Set correct permissions for the Laravel files
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Copy the project files into the container
COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHP dependencies using Composer
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Expose port 80 for the Apache server
EXPOSE 80

# Set the command to start Apache in the foreground
CMD ["apache2-foreground"]
