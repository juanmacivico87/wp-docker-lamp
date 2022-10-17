FROM php:7.4-apache

ARG DEBIAN_FRONTEND
ARG TIMEZONE
ARG MYSQL_DATABASE
ARG MYSQL_USER
ARG MYSQL_PASSWORD
ARG MYSQL_HOST
ARG WP_TABLE_PREFIX

COPY ./resources/php/php.ini /usr/local/etc/php/conf.d/docker-php-config.ini
COPY ./resources/apache/wp-docker.conf /etc/apache2/sites-available/wp-docker.conf

RUN apt update && apt upgrade -y
RUN apt install -y \
    curl \
    nano \
    git \
    unzip \
    zlib1g-dev \
    libzip-dev \
    libfreetype6-dev \
    libpng-dev \
    libjpeg-dev \
    libicu-dev  \
    libonig-dev \
    libxslt1-dev

ENV WP_DB_NAME ${MYSQL_DATABASE}
ENV WP_DB_USER ${MYSQL_USER}
ENV WP_DB_PASSWORD ${MYSQL_PASSWORD}
ENV WP_DB_HOST ${MYSQL_HOST}
ENV TIMEZONE ${TIMEZONE}
ENV WP_TABLE_PREFIX ${WP_TABLE_PREFIX}

RUN docker-php-ext-configure gd --with-jpeg --with-freetype 
RUN docker-php-ext-install dom gd json mbstring mysqli opcache simplexml zip

RUN a2enmod rewrite

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp


RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone \
    && printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini \
    && "date"

RUN chmod -R 777 /var/www/html