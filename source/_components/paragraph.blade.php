@props([
    // slots
    'title' => null,
    'subtitle' => null,
])

<div class="mb-8 last:mb-0">
    @if($title)
        <h3 class="my-8 md:mt-16 text-xl md:text-3xl lg:text-4xl !leading-tight">
            {{ $title }}
        </h3>
    @endif
    @if($subtitle)
        <h3 class="mt-4 mb-4 text-xl flex-grow">
            {{ $subtitle }}
        </h3>
    @endif

    <div class="paragraph">
        {{ $slot }}
    </div>
</div>
