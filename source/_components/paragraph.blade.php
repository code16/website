@props([
    // slots
    'title' => null,
    'subtitle' => null,
])

<div class="pb-6 mb-6">
    @if($title)
        <h3 class="mb-4 mt-12 text-xl md:text-3xl lg:text-4xl">
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
