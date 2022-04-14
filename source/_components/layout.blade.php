@props([
    'home' => false,
    'lang' => null,
    // slots
    'head' => null,
])

@include('_layouts.app', [
    'page' => \Illuminate\Container\Container::getInstance()->get('pageData')->page,
])
