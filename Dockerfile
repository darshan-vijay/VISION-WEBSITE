# Use PHP with Apache
FROM php:8.1-apache

# Install necessary PHP extensions and dependencies
RUN docker-php-ext-install mysqli pdo pdo_mysql && a2enmod rewrite

# Copy website files to the web root
COPY . /var/www/html/

# Set the proper permissions
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html
# Expose port 80 for HTTP traffic
EXPOSE 80 3306

# Start Apache in the foreground
CMD ["apache2-foreground"]