@props([
    // slots
    'content' => null,
    'title' => null,
])

<div {{ $attributes->class('section py-12 md:py-16') }}>
    <div class="container relative">
        <div class="section__content">
            @if($title)
                <x-section.title>
                    {{ $title }}
                </x-section.title>
            @endif
            {{ $slot }}
        </div>
    </div>
</div>
