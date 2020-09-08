# Zurb Foundation preset for Laravel
Zurb Foundation frontend preset for Laravel Framework 7.0

Current version: Zurb Foundation for sites 6.6.3

## Usage
1. Install fresh Laravel project and `cd` to your app
2. Install Laravel UI `composer require laravel/ui`
3. Install this preset via `composer require dijitaq/foundation-for-laravel` (package will be discovered automatically, no need to register the service provider)
4. Apply one of the following preset configurations:
	1. Use `php artisan foundation-ui` for **basic ui without Authentication** including core functions and only welcome page view
	2. Use `php artisan foundation-ui --auth` for **full ui with Authentication** including basic preset, authentication controllers, views and route entries, all in one go
5. Run `npm install && npm run dev` to compile your fresh scaffolding
6. If you decided to use **full ui with Authentication**, you also need to:
   1. Configure your favorite database (mysql, sqlite, etc.),
   2. Run `php artisan migrate` to create basic user tables in the database
7. Run `php artisan serve` (or equivalent) to run server and test preset
