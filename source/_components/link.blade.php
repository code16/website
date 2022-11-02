@props([
    'href'
])

<a {{ $attributes }}
    href="{{ $href }}"
    @if(!str_starts_with($href, '/'))
        target="_blank"
    @endif
>
    {{ $slot }}
</a>
