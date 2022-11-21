@props([
    'lang' => null,
    'title' => null,
    // slots
    'nav' => null,
    'header' => null,
    'metaDescription' => null,
    'metaImage' => null,
    'metaType' => null,
])

@include('_layouts.app', [
    'page' => \Illuminate\Container\Container::getInstance()->get('pageData')->page,
])
