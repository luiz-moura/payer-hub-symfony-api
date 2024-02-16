<?php

use Interfaces\Http\Api\Payment\Controllers\PaymentController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes): void {
    $routes->add('blog_list', '/blog')->controller([PaymentController::class, 'list'])->methods(['PUT']);
};