FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    nodejs \
    npm \
    nginx \
    supervisor && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo_mysql mysqli

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www/html
COPY --chown=www-data:www-data . /var/www/html

RUN npm install

COPY infrastructure/nginx/nginx.conf /etc/nginx/nginx.conf
COPY infrastructure/nginx/fastcgi_params /etc/nginx/fastcgi_params
COPY infrastructure/nginx/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 80 9000

CMD ["supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]