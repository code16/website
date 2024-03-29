@props([
    // slots
    'img' => null,
    'link' => null,
])

<x-card {{ $attributes->class('bg-white text-black') }}>
    @if($img)
        <x-card.img :attributes="$img->attributes" alt="{{ $title }}" />
    @endif
    <x-card.body>
        <h3 class="font-bold mb-4 text-xl">
            {{ $title }}
        </h3>

        {{ $slot }}
    </x-card.body>
    @if($link)
        <x-card.footer>
            <x-card.button :attributes="$link->attributes">
                {{ $link }}
            </x-card.button>
        </x-card.footer>
    @endif
</x-card>
