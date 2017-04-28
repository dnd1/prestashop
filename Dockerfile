FROM php:7.0-fpm
EXPOSE 80

RUN apt-get update;

RUN apt-get install -y \
	libmcrypt-dev \
	zlib1g-dev \
	libxml2-dev \
	libpng-dev;

RUN docker-php-ext-install -j$(nproc) iconv mcrypt; \
	docker-php-ext-install -j$(nproc) gd; \
	docker-php-ext-install -j$(nproc) mbstring zip mysqli pdo pdo_mysql simplexml;
