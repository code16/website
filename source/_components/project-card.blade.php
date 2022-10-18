@props([
    'link'
])

<x-card class="bg-white text-black">
    <h3>
        {{ $title }}
    </h3>

    {{ $slot }}

    @if($link)
        <x-card.button :attributes="$link->attributes">
            {{ $link }}
        </x-card.button>
    @endif
</x-card>
