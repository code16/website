<div class="">
    @if($title??false)
        <h3 class="mb-3 text-xl">{{ $title }}</h3>
    @endif
    <p>{{ $slot }}</p>
</div>