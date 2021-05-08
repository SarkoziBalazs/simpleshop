## Simple shop

Simple is an ecommerce shop created using <a href="https://laravel.com" target="_blank">Laravel</a>.
It is based on the new Jetstream scaffolding, using the Intertia stack (<a href="https://inertiajs.com" target="_blank">Inertiajs</a>, <a href="https://vuejs.org" target="_blank">Vuejs</a>, and <a href="https://tailwindcss.com" target="_blank">tailwind</a>)

## Usage

Clone the repo
```
git clone https://github.com/garel/simple-shop.git
```

Install php dependencies
```
composer install
```

Install nodejs dependencies

```
npm install
```

Create a .env file with your environment details.

```
cp .env.example .env
```

Run database migrations

```
php artisan migrate:fresh
```

Run database seeder

```
php artisan db:seed
```

Build the assets

```
npm run dev
```

Start web server
```
php artisan serve
```

Site is up and running on <a href="http://localhost:8000">localhost:8000</a>
