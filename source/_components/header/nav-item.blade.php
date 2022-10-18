@props([
    'href'
])

<a class="uppercase text-xl tracking-widest text-inherit font-bold" href="{{ $href }}">
    {{ $slot }}
</a>
