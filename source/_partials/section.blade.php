<div class="pb-32">
    <div class="relative">
        @if($title??false)
            <div class="pl-16">
                <h2 class="tracking-widest text-uppercase uppercase inline-block"
                    v-sticky-title:section="{{
                        json_encode((object)array_merge([
                            'container' => '.relative',
                            'paddingTop' => 64,
                            'startOffset' => -280,
                            'endOffset' => 20,
                            'relativeAnchorX' => 40
                        ], $stickyTitle??[]))
                    }}"
                >
                    {{ $title }}
                </h2>
            </div>
        @endif
        <div class="{{ $large??false ? 'w-2/3' : 'w-2/3' }} pl-48">{{ $slot }}</div>
    </div>
</div>