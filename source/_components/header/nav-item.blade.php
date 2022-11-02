@props([
    'href'
])

<a @class([
    'uppercase text-lg xl:text-xl tracking-wider text-inherit font-bold',
    'hidden lg:block' => str_contains($href, '#'),
])
    href="{{ $href }}"
>
    {{ $slot }}
</a>
