@aware([
    'tabsComponent'
])
@props([
    // slots
    'title'
])

@php
    /**
     * @var \Components\Ui\Tabs $tabsComponent
     */
@endphp

@php($tabsComponent->addTab(title: $title))

<div x-show="index === {{ count($tabsComponent->tabs) - 1 }}"
    @if(count($tabsComponent->tabs) > 1)
        x-cloak
    @endif
>
    {{ $slot }}
</div>

