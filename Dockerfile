FROM wordpress:4.9.4-php7.0-apache

RUN pecl install xdebug-2.5.0 && docker-php-ext-enable xdebug