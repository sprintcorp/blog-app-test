#FROM php:8.0-fpm
#
#RUN apt-get update && apt-get install -y  \
#    --no-install-recommends \
#    && docker-php-ext-install pdo_mysql
#
#RUN curl -sS https://getcomposer.org/installer | php -- \
#     --install-dir=/usr/local/bin --filename=composer
#
#COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
#
#WORKDIR /var/www
#COPY . .
#RUN composer install
#RUN chmod 777 storage -R
#
#RUN chmod 777 bootstrap/cache -R

#COPY docker-entrypoint.sh .
#
#ENTRYPOINT ["docker-entrypoint.sh"]

FROM php:8.0-fpm

RUN apt-get update && apt-get install -y  \
    --no-install-recommends \
    && docker-php-ext-install pdo_mysql
