@props([
    'stickyTitle' => [],
    // slots
    'content' => null,
    'title' => null,
])

<div class="pb-12 md:pb-32">
    <div class="relative" v-cloak>
        @if($title)
            <div class="mb-4 md:mb-16" :class="{'md:pl-16':!isMobile}">
                <h2 class="tracking-widest text-uppercase uppercase inline-block"
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
        <div class="{{ $content->attributes['class'] ?? 'lg:max-w-md xl:max-w-lg' }}" :class="{'md:ml-48':!isMobile}">
            {{ $content ?? $slot }}
        </div>
    </div>
</div>
