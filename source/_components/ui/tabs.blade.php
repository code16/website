
@php
/**
 * @var \Components\Ui\Tabs $self
 */
@endphp

<div x-data="{ index: 0 }">
    <div class="grid grid-cols-2 gap-16">
        <div class="">
            @foreach($self->tabs as $tab)
                <div class="mb-12">
                    <a class="text-2xl text-inherit font-bold py-1"
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
