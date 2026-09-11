FROM php:8.3-cli

RUN apt-get update \
    && apt-get install -y --no-install-recommends git libicu-dev libonig-dev unzip \
    && docker-php-ext-install intl mbstring \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader --no-scripts

COPY . .

RUN mkdir -p writable/cache writable/debugbar writable/logs writable/session writable/uploads \
    && chown -R www-data:www-data writable

USER www-data

ENV CI_ENVIRONMENT=production
ENV PORT=10000

EXPOSE 10000

CMD ["sh", "-c", "php spark serve --host 0.0.0.0 --port ${PORT}"]
