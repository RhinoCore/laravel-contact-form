<?php

namespace RhinoCore\ContactForm;

use Illuminate\Support\ServiceProvider;

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