<div class="mb-32 ml-48">
    @if($title??false)
        <div>
            <h2 class="tracking-widest text-uppercase uppercase inline-block"
                v-sticky-title="{ paddingTop:64, anchorMode:'start', relativeAnchorX:-100 }">
                {{ $title }}
            </h2>
        </div>
    @endif
    <div class="{{ $large??false ? 'w-2/3' : 'w-2/3' }}">{{ $slot }}</div>
</div>