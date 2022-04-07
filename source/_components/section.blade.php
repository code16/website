@props([
    'stickyTitle' => [],
    // slots
    'content' => null,
    'title' => null,
])

<div class="mb-12 md:mb-32">
    <div class="relative" v-cloak>
        @if($title)
            <div class="mb-4 md:mb-16" :class="{'md:pl-16':!isMobile}">
                <h2 class="inline-block text-2xl uppercase tracking-widest"
                    v-sticky-title:section="{{
                        json_encode((object)array_merge([
                            'container' => '.relative',
                            'paddingTop' => 64,
                            'startOffset' => -280,
                            'endOffset' => 20,
                            'relativeAnchorX' => 40
                        ], $stickyTitle))
                    }}"
                >
                    {{ $title }}
                </h2>
            </div>
        @endif
        <div class="{{ $content->attributes['class'] ?? 'lg:max-w-2xl xl:max-w-3xl' }} md:ml-48">
            {{ $content ?? $slot }}
        </div>
    </div>
</div>
