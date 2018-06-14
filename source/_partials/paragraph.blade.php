<div>
    @if($title??false)
        <h3 class="mb-4 mt-12 text-xl">{{ $title }}</h3>
    @endif
    <div class="paragraph">{{ $slot }}</div>
</div>