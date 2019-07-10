FROM php:7.2-fpm-alpine3.7
RUN apk add libpng-dev
RUN docker-php-ext-install mysqli gd pdo_mysql mbstring
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring
RUN touch /usr/local/etc/php/conf.d/uploads.ini \
    && echo "upload_max_filesize = 10M;" >> /usr/local/etc/php/conf.d/uploads.ini
# WORKDIR /app
# COPY . /app
# RUN composer install
# CMD php artisan serve --host=0.0.0.0 --port=8181
# EXPOSE 8181