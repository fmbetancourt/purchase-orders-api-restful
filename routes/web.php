<?php

/**
 * @var \Laravel\Lumen\Routing\Router $router
 */

$router->get('/', function () use ($router) {
    return response()->json([
        'microservice' => env('APP_NAME', 'NO_NAME'),
        'developedBy' => 'fmbetancourt',
        'appVersion' => $router->app->version(),
        //'documentation' => env('APP_URL').config('swagger-lume.routes.api'),
    ]);
});
