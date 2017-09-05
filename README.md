# Laravel Valid Proxies

[![Packagist](https://img.shields.io/packagist/v/njxqlus/laravel-valid-proxies.svg)](https://packagist.org/packages/njxqlus/laravel-valid-proxies)

Fix SSL in Laravel 5 when server is behind a load balancer or a reverse proxy

## Installation

Install via composer `composer require njxqlus/laravel-valid-proxies`

For Laravel 5.4 you need to add Service Provider in your config/app.php file:

`njxqlus\LaravelValidProxies\ServiceProvider::class`

## Usage

ValidProxies Middleware already pushed to `web` middleware group. 

If you want to use middleware global - add to to app\Http\Kernel in `$middleware` array:

`\njxqlus\LaravelValidProxies\Middleware\ValidProxies::class`

## Credits

- [Mikael Agabalyants](https://github.com/njxqlus/laravel-valid-proxies)
- [All contributors](https://github.com/njxqlus/laravel-valid-proxies/graphs/contributors)
