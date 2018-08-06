<?php

// as chaves iguais serão sobrescritas pelo array em settings.local.php

return [
    'display_errors' => true,
    'ajax_interceptor' => [
        'is_dev_mode' => true,
        'json_mapper' => [
            '/exemplo' => 'exemplo.json',
            '/teste1' => 'teste1.json',
            '/teste2' => 'teste2.json'
        ]
    ]
];
