@props([
    'separator' => false,
    // slots
    'title',
    'date' => null,
    'link' => null,
    'img' => null,
])

<div {{ $attributes->class(['py-12 first:pt-0 last:pb-0']) }}>
    <div class="flex gap-8">
        @if($img)
            <img {{ $img->attributes->class('h-32 w-32 rounded-lg hidden sm:block') }} alt="{{ $title }}">
        @endif

        <div class="flex-1">
            <div class="font-serif">
                <h3 class="text-xl flex-grow">{{ $title }}</h3>

                {{ $slot }}
            </div>

            @if($link)
                <div class="mt-4">
                   <x-link :attributes="$link->attributes->class('text-xl')">
                       {{ $link }}
                   </x-link>
                </div>
            @endif
        </div>
    </div>
</div>
