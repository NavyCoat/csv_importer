FROM php:8.2-fpm-alpine

RUN apk add --no-cache \
    git \
    unzip \
    libzip-dev \
    icu-dev \
    oniguruma-dev

RUN docker-php-ext-configure intl
RUN docker-php-ext-install \
    pdo_mysql \
    zip \
    intl \
    mbstring

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-scripts --no-autoloader --no-dev --prefer-dist

