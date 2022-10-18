

<x-card style="background-color: #862532">
    <div class="grid grid-cols-3 gap-12">
        <div>
            Ambiance & Sytles

            {{ $subtitle }}
        </div>
        <div class="col-span-2">
            {{ $slot }}

            <x-card.footer>
                <x-card.button :attributes="$link->attributes">
                    {{ $link }}
                </x-card.button>
            </x-card.footer>
        </div>
    </div>
</x-card>
