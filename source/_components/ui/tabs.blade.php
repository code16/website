
@php
/**
 * @var \Components\Ui\Tabs $self
 */
@endphp

<div x-data="{ index: 0 }">
    <div class="grid grid-cols-2">
        <div class="pr-6">
            @foreach($self->tabs as $tab)
                <div class="mb-8">
                    <a @class([
                            'text-2xl text-inherit font-bold py-1 !no-underline hover:opacity-100',
                            'opacity-20' => !$loop->first,
                        ])
                        :class="{ 'opacity-20': index !== {{ $loop->index }} }"
                        href="#"
                        @click.prevent="index = {{ $loop->index }}"
                    >
                        {{ $tab->title }}
                    </a>
                </div>
            @endforeach
        </div>
        <div>
            {{ $slot }}
        </div>
    </div>
</div>
