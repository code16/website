<div>
    @if($title??false)
        <h3 class="mb-4 mt-12 text-xl md:text-3xl lg:text-4xl">{{ $title }}</h3>
    @endif
    @if($subtitle??false)
        <h3 class="mt-4 text-xl">{{ $subtitle }}</h3>
    @endif
    <div class="paragraph">{{ $slot }}</div>
</div>