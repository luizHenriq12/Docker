FROM php:8.1.22-cli

RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-install pdo_mysql zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www

WORKDIR /var/www

CMD ["php", "-S", "0.0.0.0:8000"]