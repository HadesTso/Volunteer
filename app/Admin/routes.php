<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->get('volunteer', 'VolunteerController@index');

    $router->get('volunteer/{id}/edit', 'VolunteerController@edit');
    $router->put('volunteer/{id}', 'VolunteerController@update');

});
