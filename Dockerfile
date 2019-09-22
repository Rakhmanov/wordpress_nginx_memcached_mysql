FROM wordpress:php7.3-fpm-alpine

RUN apk update\
  && apk upgrade \
  && apk add libmemcached \
    libmemcached-libs \
    libmemcached-dev \
    build-base \
    zlib-dev \
    php7-dev \
    git \
    autoconf \
    cyrus-sasl-dev \
  && pecl config-set php_ini  /usr/local/etc/php/php.ini \
  && pecl install -f memcached xdebug \
  && echo extension=memcached.so >> /usr/local/etc/php/conf.d/docker-php-ext-memcached.ini \
  && echo zend_extension=xdebug.so >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
  && rm -rf /tmp/pear \
  && apk del php7-dev