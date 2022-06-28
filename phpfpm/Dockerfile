FROM  php:7.4.5-fpm
 RUN apt-get update && apt-get install -y \
 libfreetype6-dev \
 libjpeg62-turbo-dev \
 libpng12*-dev \
 && docker-php-ext-enable opcache \
 && docker-php-ext-install gd \
 && docker-php-ext-install pdo pdo_mysql \
 && pecl install -o -f redis \
 && rm -rf /tmp/pear \
 && docker-php-ext-enable redis \
