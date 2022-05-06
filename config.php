<?php

return [
    'production' => false,
    'baseUrl' => env('APP_URL', ''),
    'collections' => [
        'projects' => [
            'path' => 'p',
            'extends' => '_layouts.project',
            'section' => 'content',
        ],
        'posts' => [
            'path' => 'posts',
            'extends' => '_layouts.post',
            'section' => 'content',
            'sort' => ['-date'],
        ]
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
