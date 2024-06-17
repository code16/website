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
            'linkedIn' => 'https://www.linkedin.com/in/philippe-lonchampt-2b434b227',
        ],
        'arnaud' => [
            'name' => 'Arnaud Becher',
            'avatar' => 'https://gravatar.com/avatar/' . md5('arnaud.becher@gmail.com') . '?d=retro',
            'twitter' => 'https://twitter.com/smknstd',
            'linkedIn' => 'https://www.linkedin.com/in/arnaud-becher-0a85bb162/',
        ],
        'lucien' => [
            'name' => 'Lucien Puget',
            'avatar' => 'https://gravatar.com/avatar/' . md5('lucien.puget@code16.fr') . '?d=retro',
            'linkedIn' => 'https://www.linkedin.com/in/lucienpuget/',
        ],
        'antoine' => [
            'name' => 'Antoine Guingand',
            'avatar' => 'https://gravatar.com/avatar/' . md5('guingand.antoine@gmail.com') . '?d=retro',
            'linkedIn' => 'https://www.linkedin.com/in/antoine-guingand-a1199010a/',
        ]
    ],
];
