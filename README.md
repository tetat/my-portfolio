# Personal Portfolio Website

This is my portfolio website where you can explore details about my professional life.

## Installation

First, clone this repository:

```bash
git clone https://github.com/tetat/my-portfolio
```

Switch to the repository folder:

```bash
cd my-portfolio
```

Install all dependencies using Composer:

```bash
composer install
```

Run the database migrations (set the database connection in `.env` before migrating):
Note: Use `sqlite` in `DB_CONNECTION` but I am using json files to get my info.

```bash
php artisan migrate
```

Start the local development server:

```bash
php artisan serve
```
