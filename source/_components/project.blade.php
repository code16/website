@props([
    'separator' => false,
    // slots
    'title',
    'date' => null,
    'link' => null,
    'website_link' => null,
    'banner' => null,
    'thumbnail' => null,
])

<div {{ $attributes->class(['pb-6 mb-6', 'border-b-2 border-brand-cyan-darker' => $separator]) }}>
    <div class="flex items-center">
        <h3 class="mt-4 mb-4 text-xl flex-grow">{{ $title }}</h3>
        @if($date)
            <div class="text-sm">{{ $date }}</div>
        @endif
    </div>

    @if($banner)
        <img class="rounded-lg" {{ $banner->attributes }} alt="{{ $title }}">
    @endif

    <div class="paragraph">
        <div class="flex">
            <div>
                {{ $slot }}

                @if($link)
                    <div class="mt-2">
                        <a class="text-xl" {{ $link->attributes }}>
                            • voir les détails du projet
                        </a>
                    </div>
                @endif

                @if($website_link)
                    <div class="mt-2">
                        <a class="text-xl" {{ $website_link->attributes }} target="_blank">
                            • afficher le site
                        </a>
                    </div>
                @endif
            </div>

            @if($thumbnail)
                <img class="ml-2 h-32 w-32 rounded-lg sm:block hidden" {{ $thumbnail->attributes }} alt="{{ $title }}">
            @endif
        </div>
    </div>
</div>
