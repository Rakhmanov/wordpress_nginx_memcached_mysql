FROM wordpress:php8.3-fpm-alpine

RUN apk update\
  && apk upgrade \
  && apk add libmemcached \
    libmemcached-libs \
    libmemcached-dev \
    build-base \
    linux-headers \
    zlib-dev \
    git \
    autoconf \
    cyrus-sasl-dev \
  && pecl config-set php_ini /usr/local/etc/php/php.ini \
  && pecl install -f memcached\
  && echo extension=memcached.so >> /usr/local/etc/php/conf.d/docker-php-ext-memcached.ini \
  && rm -rf /tmp/pear 
