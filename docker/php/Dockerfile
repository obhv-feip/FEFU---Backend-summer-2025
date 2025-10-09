FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
        libpq-dev \
        wget \
        zlib1g-dev \
        libmcrypt-dev \
        libzip-dev \
        git \
        bash \
        unzip \
        autoconf \
        g++ \
        make

RUN docker-php-ext-install pdo pdo_pgsql \
    sockets \
    zip

RUN pecl channel-update pecl.php.net && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN curl -sS https://get.symfony.com/cli/installer | bash
RUN mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

# Allow Composer to use all available RAM while installing packages

CMD ["php-fpm"]