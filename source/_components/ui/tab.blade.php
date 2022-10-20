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

<div class="md:hidden"
    :class="{ '!block': index === {{ count($tabsComponent->tabs) - 1 }} }"
>
    <x-ui.tab.title class="md:hidden mb-6">
        {{ $title }}
    </x-ui.tab.title>

    {{ $slot }}
</div>

