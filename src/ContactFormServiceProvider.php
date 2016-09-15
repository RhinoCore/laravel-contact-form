<?php

namespace RhinoCore\ContactForm;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class ContactFormServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->setUpRoutes($this->app->router);
    }

    protected function setUpRoutes($router)
    {
        $router->group(['namespace' => 'RhinoCore\ContactForm\Http\Controllers', 'prefix' => 'mail'], function (Router $router) {
            require __DIR__.'/routes.php';
        });
    }

}