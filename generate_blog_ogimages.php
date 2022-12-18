#!/usr/bin/php
<?php
require __DIR__ . '/vendor/autoload.php';

$posts = array_diff(scandir('./source/_posts/'), array('.', '..'));

$parser = new Mni\FrontYAML\Parser;

foreach($posts as $post) {
    $document = $parser->parse(
        file_get_contents('./source/_posts/' . $post)
    );

    $yaml = $document->getYAML();

    $date = Carbon\Carbon::createFromTimestamp($yaml['date'])->format('F j, Y');
    $author = match($yaml['author']) {
        'philippe' => [
            'name' => 'Philippe Lonchampt',
            'avatar' => 'https://gravatar.com/avatar/' . md5('philippelonchampt@gmail.com') . '?d=retro',
        ],
        'arnaud' => [
            'name' => 'Arnaud Becher',
            'avatar' => 'https://gravatar.com/avatar/' . md5('arnaud.becher@gmail.com') . '?d=retro',
        ],
        'antoine' => [
            'name' => 'Antoine Guingand',
            'avatar' => 'https://gravatar.com/avatar/' . md5('guingand.antoine@gmail.com') . '?d=retro',
        ]
    };

    Spatie\Browsershot\Browsershot::html(<<<TEXT
        <h1>{$yaml['title']}</h1>
        <h2>by {$author['name']}</h2>
        {$date}
        TEXT
        )
        ->showBackground()
        ->windowSize(1200, 630)
        ->setScreenshotType('jpeg', 100)
        ->save(
            './source/assets/img/posts/' . substr($post, 0, -3) . '/ogimage.jpg'
        );
    die();

}

