<div class="mb-12">
    @if($title??false)
        <h3 class="mb-4 mt-12 text-xl md:text-3xl lg:text-4xl">
            {{ $title }}
        </h3>
    @endif
    @if($subtitle??false)
        <h3 class="mt-4 mb-4 text-xl">{{ $subtitle }}</h3>
    @endif
    @if($banner??false)
        <img class="rounded-lg" src="{{ $banner }}" alt="">
    @endif

    <div class="paragraph">
        <div class="flex">
            <div>
                {{ $slot }}
                @if($link??false)
                    <div class="mt-2"><a class="text-xl" href="{{ $link }}">• voir les détails du projet</a></div>
                @endif
            </div>
            @if($thumbnail??false)
                <img class="ml-2 h-32 w-32 rounded-lg sm:block hidden" src="{{ $thumbnail }}" alt="">
            @endif
        </div>

    </div>
</div>