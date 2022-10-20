@props([
    // slots
    'img',
    'logo',
    'title',
    'footer' => null
])

<x-card {{ $attributes }}>
    <x-card.img :attributes="$img->attributes" />
    <x-card.body>
        <div class="grid md:grid-cols-3 gap-6 md:gap-12">
            <div>
                <div class="mb-4">
                    {{ $logo }}
                </div>

                <h3 class="font-bold">
                    {{ $title }}
                </h3>
            </div>
            <div class="md:col-span-2">
                {{ $slot }}

                @if($footer)
                    <div class="mt-8">
                       {{ $footer }}
                    </div>
                @endif
            </div>
        </div>
    </x-card.body>
</x-card>
