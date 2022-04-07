@props([
    // slots
    'content' => null,
    'title' => null,
])

<div class="mb-12 md:mb-32">
    <div class="relative" v-cloak>
        @if($title)
            <x-section.title>
                {{ $title }}
            </x-section.title>
        @endif
        <div class="lg:max-w-2xl xl:max-w-3xl md:ml-48">
            {{ $slot }}
        </div>
    </div>
</div>
