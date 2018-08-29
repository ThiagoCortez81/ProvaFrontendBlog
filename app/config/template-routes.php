<?php

namespace IntecPhp;

return [
    [
        'pattern' => '/',
        'callback' => function () {
            $layout = new View\Layout();
            $layout
                ->addStylesheet('/css/home')
                ->addScript('/js/home')
                ->render('home/index');
        }
    ],
    // ##################### EXEMPLOS DE ROTAS ####################################
    [
        'pattern' => '/exemplo',
        'callback' => function () {
            $layout = new View\Layout();
            $layout
                ->addStylesheet('/css/exemplo')
                ->addScript('/js/exemplo')
                ->render('exemplo/index');
        }
    ],
    [
        'pattern' => '/pagina-restrita',
        'middlewares' => [
            Middleware\AuthenticationMiddleware::class . ':isAuthenticated'
        ],
        'callback' => function () {
            $layout = new View\Layout();
            $layout
                ->addStylesheet('/css/exemplo')
                ->addScript('/js/exemplo')
                ->render('exemplo/index');
        }
    ],
    [
        'pattern' => '/pagina-com-erro',
        'callback' => function () {
            throw new \Error('Simulação de um erro', 1);
        }
    ],

    [
        'pattern' => '/home',
        'callback' => function () {
            $layout = new View\Layout('layout-prova');
            $layout
                ->addStylesheet('/css/home')
                ->addScript('/js/home')
                ->render('home/index');
        }
    ],
    [
        'pattern' => '/prova',
        'callback' => function () {
            echo file_get_contents('app/config/json/prova.json');
        }
    ],
];
