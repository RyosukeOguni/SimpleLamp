FROM php:7.4-fpm

RUN apt-get update \
  && docker-php-ext-install pdo_mysql \
  && pecl install xdebug-3.1.4 \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-enable xdebug \
  && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
  && echo "xdebug.client_host = host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
  && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

COPY php.ini /usr/local/etc/php
