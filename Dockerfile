FROM php:7.4.2-fpm-alpine3.11

RUN apk update

RUN apk add bash
RUN apk add mysql-client
RUN apk add shadow
RUN apk add --no-cache openssl
RUN docker-php-ext-install pdo pdo_mysql

RUN usermod -u 1000 www-data

COPY ./.docker/entrypoint.sh /

RUN chmod +x /entrypoint.sh

ENV DOCKERIZE_VERSION v0.6.1
RUN wget https://github.com/jwilder/dockerize/releases/download/$DOCKERIZE_VERSION/dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && tar -C /usr/local/bin -xzvf dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && rm dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz

WORKDIR /var/www

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN ln -s public html

EXPOSE 9000

ENTRYPOINT ["php-fpm"]
