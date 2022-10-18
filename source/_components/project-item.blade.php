@props([
    'separator' => false,
    // slots
    'title',
    'date' => null,
    'link' => null,
    'banner' => null,
    'thumbnail' => null,
])

<div {{ $attributes->class(['py-12 first:pt-0 last:pb-0', 'border-b-2 border-brand-cyan-darker' => $separator]) }}>
    <div class="mb-6">
        <div class="flex items-center">
            <h3 class="text-xl flex-grow">{{ $title }}</h3>
            @if($date)
                <div class="text-sm">{{ $date }}</div>
            @endif
        </div>
    </div>

    @if($banner)
        <div class="mb-4">
            <img class="rounded-lg" {{ $banner->attributes }} alt="{{ $title }}">
        </div>
    @endif

    <div class="paragraph !mb-0">
        <div class="flex">
            <div>
                {{ $slot }}

                @if($link)
                    <div class="mt-4">
                       <x-link :attributes="$link->attributes->class('text-xl')">
                           {{ $link }}
                       </x-link>
                    </div>
                @endif
            </div>

            @if($thumbnail)
                <img class="ml-2 h-32 w-32 rounded-lg sm:block hidden" {{ $thumbnail->attributes }} alt="{{ $title }}">
            @endif
        </div>
    </div>
</div>
