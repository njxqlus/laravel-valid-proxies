<?php

namespace njxqlus\LaravelValidProxies;

use njxqlus\LaravelValidProxies\Middleware\ValidProxies;
use Illuminate\Routing\Router;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function boot(Router $router)
    {
        $router->pushMiddlewareToGroup('web', ValidProxies::class);
    }
}
