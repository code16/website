@props([
    'headingLevel' => null,
    'stickyTitle' => true,
    'stickyTitleOptions' => [],
])


<div class="mb-4 md:mb-16 md:pl-16">
    <x-heading
        :level="$headingLevel ?? 'h2'"
        class="inline-block text-2xl uppercase tracking-widest"
        v-sticky-title:section="{{
            json_encode($stickyTitle ? array_merge([
                'container' => '.relative',
                'paddingTop' => 64,
                'startOffset' => -280,
                'endOffset' => 20,
                'relativeAnchorX' => 40
            ], $stickyTitleOptions) : null)
        }}"
    >
        {{ $slot }}
    </x-heading>
</div>
