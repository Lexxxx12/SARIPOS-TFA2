# SariPOS

**Live application:** [https://saripos.onrender.com](https://saripos.onrender.com)

A four-page point-of-sale website built with CodeIgniter 4. Customer and user account records are stored in MySQL and retrieved through CodeIgniter models and Query Builder.

## Pages

- `/` — landing page
- `/about` — project overview
- `/customers` — customer account directory
- `/users` — staff user directory

## Local setup

Requirements: PHP 8.2 or later, Composer, and MySQL 8 or compatible MariaDB.

```bash
composer install
cp env .env
mysql -u root -p < database/saripos.sql
php spark serve
```

Open `http://localhost:8080` in a browser. Before starting the app, edit `.env` if your MySQL database name, username, password, host, or port differs from the included local defaults. Update `app.baseURL` for your hosted environment.

## Data source

The importable database export is at `database/saripos.sql`. It creates the `saripos` database, the `customers` and `users` tables required by TFA2, and six sample records in each table. `CustomerModel` and `UserModel` retrieve the records used by the account-directory pages.

## Deployment

Point the hosting document root to the `public/` directory, run `composer install --no-dev --optimize-autoloader`, import `database/saripos.sql` into the hosted MySQL service, copy `env` to `.env`, set `CI_ENVIRONMENT = production`, and configure `app.baseURL` plus the `database.default.*` values for the hosting environment. Never commit a `.env` file containing real database credentials.

The included Docker configuration supports the free Render demonstration deployment by starting a MariaDB-compatible MySQL server in the same container and importing `database/saripos.sql`. Because a free Render service has ephemeral storage, its database resets to the included sample records whenever the container is rebuilt or restarted. Use a managed MySQL service for persistent production data.
