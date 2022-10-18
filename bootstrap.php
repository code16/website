<?php

use Illuminate\Container\Container;
use Illuminate\View\Factory;
use Torchlight\Jigsaw\TorchlightExtension;

/** @var $container Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */


//$container['markdownParser']->code_block_content_func = function ($code, $language) {
//    return (new \Highlight\Highlighter())->highlight($language ?? 'plaintext', $code)->value;
//};

TorchlightExtension::make($container, $events)->boot();

$container->bind(\Illuminate\Contracts\View\Factory::class, Factory::class);

function view(string $view, array $data = [])
{
    return Container::getInstance()->make(Factory::class)
        ->make($view, $data);
}
