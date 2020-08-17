FROM webdevops/php-apache:7.3

RUN mkdir -p /app
WORKDIR /app
VOLUME /app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && composer --version