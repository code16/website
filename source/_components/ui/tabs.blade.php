
@php
/**
 * @var \Components\Ui\Tabs $self
 */
@endphp

<div x-data="{ index: 0 }">
    <div class="grid md:grid-cols-2">
        <div class="pr-12 hidden md:block">
            @foreach($self->tabs as $tab)
                <x-ui.tab.title class="mb-8">
                    <a @class([
                            'block text-inherit !no-underline hover:opacity-100',
                            'opacity-40' => !$loop->first,
                        ])
                        :class="{ 'opacity-40': index !== {{ $loop->index }} }"
                        href="#"
                        @click.prevent="index = {{ $loop->index }}"
                        @mouseenter="index = {{ $loop->index }}"
                    >
                        {{ $tab->title }}
                    </a>
                </x-ui.tab.title>
            @endforeach
        </div>
        <div class="grid gap-12 lg:gap-0">
            {{ $slot }}
        </div>
    </div>
</div>
