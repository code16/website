<?php

$config = require './config.php';

return [
    'production' => true,
    'baseUrl' => env('APP_URL', 'https://code16.fr'),
    'collections' => [
        'posts' => [
            ...$config['collections']['posts'],
            'filter' => function ($item) {
                return !$item->draft;
            }
        ],
    ],
];
