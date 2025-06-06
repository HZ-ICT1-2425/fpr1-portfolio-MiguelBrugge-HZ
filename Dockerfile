FROM php:8.2-apache

RUN a2enmod rewrite

# Install system dependencies + Node.js build dependencies
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev zip curl libpng-dev libonig-dev libxml2-dev libpq-dev \
    curl ca-certificates gnupg build-essential

# Install Node.js (LTS)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Install PHP extensions
RUN docker-php-ext-install pdo_pgsql mbstring zip exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy files
COPY . .

# Apache config
COPY vhost.conf /etc/apache2/sites-available/000-default.conf

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Install dependencies and build assets, run migrations, then start Apache
CMD bash -c "composer install && npm install && npm run build && php artisan config:cache && php artisan migrate:fresh --seed --force && apache2-foreground"

