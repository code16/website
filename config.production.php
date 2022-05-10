<?php

$config = require './config.php';

return [
    'production' => true,
    'baseUrl' => env('APP_URL', 'https://code16.fr'),
    'collections' => [
        'projects' => [
            'path' => 'p',
            'extends' => '_layouts.project',
            'section' => 'content',
        ],
        'posts' => [
            ...$config['collections']['posts'],
            'filter' => function ($item) {
                return !$item->draft;
            }
        ],
    ],
    'developers' => [
        'philippe' => [
            'name' => 'Philippe Lonchampt',
            'avatar' => 'https://gravatar.com/avatar/' . md5('philippelonchampt@gmail.com') . '?d=retro',
            'twitter' => 'https://twitter.com/dvlpp',
        ],
        'arnaud' => [
            'name' => 'Arnaud Becher',
            'avatar' => 'https://gravatar.com/avatar/' . md5('arnaud.becher@gmail.com') . '?d=retro',
        ],
        'antoine' => [
            'name' => 'Antoine Guingand',
            'avatar' => 'https://gravatar.com/avatar/' . md5('guingand.antoine@gmail.com') . '?d=retro',
        ]
    ],
];
