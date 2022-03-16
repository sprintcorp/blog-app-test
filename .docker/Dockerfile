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
#RUN apt-get update
#    && apt-get install vim
RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
COPY . .
RUN composer install
#RUN chmod 777 storage -R
#
#RUN chmod 777 bootstrap/cache -R
#
RUN cp .env.example .env
#
RUN php artisan key:generate

RUN php artisan config:clear
RUN php artisan config:cache
RUN php artisan cache:clear
RUN php artisan migrate

# Expose port 9000 and start php-fpm server
#EXPOSE 9000
#CMD ["php-fpm"]
#COPY /.docker/docker-entrypoint.sh /tmp
#
#RUN chmod +x /tmp/docker-entrypoint.sh
#
#ENTRYPOINT ["/tmp/docker-entrypoint.sh"]
