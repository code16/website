@props([
    'separator' => false,
    // slots
    'title',
    'date' => null,
    'link' => null,
    'img' => null,
])

<div {{ $attributes->class(['mb-10 last:mb-0']) }}>
    <div class="flex gap-8">
        @if($img)
            <img {{ $img->attributes->class('h-32 w-32 rounded-lg hidden sm:block object-cover') }} alt="{{ $title }}">
        @endif

        <div class="flex-1">
            <div class="font-serif">
                <h3 class="font-bold mb-2 text-xl">{{ $title }}</h3>

                {{ $slot }}
            </div>

            @if($link)
                <div class="mt-2">
                   <x-link :attributes="$link->attributes->class('text-sm font-bold tracking-wider uppercase underline')">
                       {{ $link }}
                   </x-link>
                </div>
            @endif
        </div>
    </div>
</div>
