#!/bin/bash

# wait for mysql
while ! phpmyadmin ping -h"mysql" -u"${MYSQL_USER}" -p"${MYSQL_PASSWORD}" --silent; do
  sleep 1
done

# run artisan scripts
pushd /var/www
  composer update --no-plugins --no-scripts
  php artisan migrate
  php artisan db:seed
popd

# start workspace process
/sbin/my_init
