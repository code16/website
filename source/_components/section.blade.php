@props([
    // slots
    'content' => null,
    'title' => null,
])

<div class="section mb-16 md:mb-32">
    <div class="relative">

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
