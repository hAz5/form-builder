FROM php:7.1.8-apache

COPY ./bin/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN docker-php-ext-install mbstring pdo pdo_mysql

ADD ./bin/install.sh /etc
RUN ls -la /etc/install.sh
RUN /bin/sh /etc/install.sh

WORKDIR /var/www/html
