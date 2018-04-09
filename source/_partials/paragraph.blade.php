<div class="">
    @if($title??false)
        <h3 class="mt-16 mb-3 text-xl">{{ $title }}</h3>
    @endif
    <p>{{ $slot }}</p>
</div>