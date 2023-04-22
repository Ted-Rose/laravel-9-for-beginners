FROM php:8.0-fpm-alpine

# Install required dependencies
RUN apk add --no-cache bash git openssh

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql sockets

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Install Laravel using Composer
RUN composer global require laravel/installer && \
    composer create-project --prefer-dist laravel/laravel . && \
    composer install


# Install Node.js and NPM
RUN apk add --no-cache nodejs npm

# Copy application files
COPY . .

# Set permissions for the application files
RUN chown -R www-data:www-data storage bootstrap/cache && \
    chmod -R 775 storage bootstrap/cache && \
    chmod +x artisan

# Change ownership of the directory in the container to the current user
RUN chown -R www-data:www-data /var/www/html


# Expose port 8000 for the Laravel development server
EXPOSE 8000

# Start the Laravel development server
CMD ["php", "artisan", "serve", "--host=0.0.0.0"]
