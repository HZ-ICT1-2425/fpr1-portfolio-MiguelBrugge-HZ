FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev zip curl libpng-dev libonig-dev libxml2-dev libpq-dev \
    curl ca-certificates gnupg build-essential

# Install Node.js
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# PHP extensions
RUN docker-php-ext-install pdo_pgsql mbstring zip exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy app code
COPY . .

# Apache config
COPY vhost.conf /etc/apache2/sites-available/000-default.conf

# Permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port
EXPOSE 80

# Build + start app
CMD bash -c "composer install && npm install && npm run build && php artisan config:cache && php artisan migrate --force && apache2-foreground"
