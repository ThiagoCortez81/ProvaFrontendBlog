<?php

// Middleware
use IntecPhp\Middleware\HttpMiddleware;
use IntecPhp\Middleware\AjaxInterceptorMiddleware;

// View
use IntecPhp\View\Layout;

$dependencies[HttpMiddleware::class] = function ($c) {
    $layout = new Layout();
    return new HttpMiddleware($layout, $c['settings']['display_errors']);
};

$dependencies[AjaxInterceptorMiddleware::class] = function ($c) {
    $isDevMode = $c['settings']['ajax_interceptor']['is_dev_mode'];
    $jsonMapper = $c['settings']['ajax_interceptor']['json_mapper'];
    return new AjaxInterceptorMiddleware($jsonMapper, $isDevMode);
};


// ----------------------------------------- /Middleware
