@props([
    // slots
    'img',
    'logo',
    'title',
    'footer' => null
])

<x-card {{ $attributes }}>
    <x-card.img class="hidden md:block" :attributes="$img->attributes" />
    <x-card.body>
        <div class="grid md:grid-cols-3 gap-6 md:gap-12">
            <div>
                <div class="flex justify-center md:justify-start h-[100px] md:h-auto mb-6">
                    {{ $logo }}
                </div>

                <h3 class="font-bold text-xl">
                    {{ $title }}
                </h3>
            </div>
            <div class="md:col-span-2">
                <div class="content">
                    {{ $slot }}
                </div>

                @if($footer)
                    <div class="mt-8 text-center md:text-start">
                       {{ $footer }}
                    </div>
                @endif
            </div>
        </div>
    </x-card.body>
</x-card>
