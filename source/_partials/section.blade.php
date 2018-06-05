<div class="pb-12 md:pb-32">
    <div class="relative">
        @if($title??false)
            <div class="md:pl-16 mb-4 md:mb-16">
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
        <div class="{{ $container??'lg:max-w-lg xl:max-w-xl' }} md:ml-48">
            {{ $slot }}
        </div>
    </div>
</div>