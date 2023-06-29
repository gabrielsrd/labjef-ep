FROM php:8.1.5-fpm-alpine
RUN apk add --no-cache openssl bash nodejs npm postgresql-dev
RUN docker-php-ext-install bcmath pdo pdo_pgsql

WORKDIR /var/www

RUN rm -rf /var/www/html
RUN ln -s public html


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


COPY . /var/www

RUN chmod -R 777 /var/www/storage
RUN chmod -R 777 bootstrap/cache storage
RUN chmod -R 777 .
RUN composer install
RUN php artisan key:generate
RUN php artisan migrate



EXPOSE 9000

ENTRYPOINT [ "php-fpm" ]
