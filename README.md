# SariPOS

A basic four-page point-of-sale website built with CodeIgniter 4. Customer and user records are intentionally stored in static PHP arrays for this first version.

## Pages

- `/` — landing page
- `/about` — project overview
- `/customers` — customer account directory
- `/users` — staff user directory

## Local setup

Requirements: PHP 8.2 or later and Composer.

```bash
composer install
cp env .env
php spark serve
```

Open `http://127.0.0.1:8080` in a browser. The included `env` template and local `.env` use that URL by default. Update `app.baseURL` for your hosted environment.

## Data source

This laboratory version does not use a database, per the activity specification. Its sample records are defined in `Customers::index()` and `Users::index()`, so a database export is not applicable yet.

## Deployment

Point the hosting document root to the `public/` directory, run `composer install --no-dev --optimize-autoloader`, copy `env` to `.env`, set `CI_ENVIRONMENT = production`, and set `app.baseURL` to the live HTTPS URL.
