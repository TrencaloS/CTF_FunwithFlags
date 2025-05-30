FROM php:7.4-apache
WORKDIR /var/www/html
COPY src/index.php ./index.php
RUN chown -R www-data:www-data /var/www/html
EXPOSE 80
CMD ["apache2-foreground"]

