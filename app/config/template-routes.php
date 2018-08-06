<?php

namespace IntecPhp;

return [
    [
        'pattern' => '/',
        'callback' => function() {
            $layout = new View\Layout();
            $layout
                ->addStylesheet('/css/home.min.css')
                ->addScript('/js/home.min.js')
                ->render('home/index');
        }
    ],
    [
        'pattern' => '/exemplo',
        'callback' => function() {
            $layout = new View\Layout();
            $layout
                ->addStylesheet('/css/exemplo.min.css')
                ->addScript('/js/exemplo.min.js')
                ->render('exemplo/index');
        }
    ],
];
