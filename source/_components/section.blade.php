@props([
    // slots
    'content' => null,
    'title' => null,
])

<div class="section mb-16 md:mb-32">
    <div class="relative" v-cloak>
        @if($title)
            <x-section.title>
                {{ $title }}
            </x-section.title>
        @endif

        <div class="section__content">
            {{ $slot }}
        </div>
    </div>
</div>
