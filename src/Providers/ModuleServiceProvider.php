<?php

namespace OuwehandRetail\Landingpage\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class ModuleServiceProvider  extends ServiceProvider
{
    public function boot(Router $router)
    {
        include __DIR__ . '/../routes/web.php';

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'landingpage');
    }
}
