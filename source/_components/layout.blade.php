@props([
    'lang' => null,
    // slots
    'nav' => null,
])

@include('_layouts.app', [
    'page' => \Illuminate\Container\Container::getInstance()->get('pageData')->page,
])
