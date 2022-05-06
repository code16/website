<?php

$config = require './config.php';

return [
    'production' => true,
    'collections' => [
        'posts' => [
            ...$config['collections']['posts'],
            'filter' => function ($item) {
                return !$item->draft;
            }
        ],
    ],
];
