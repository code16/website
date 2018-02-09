<div>
    @if($title??false)
        <div class="flex">
            <div class="w-32"></div>
            <h2 class="tracking-widest text-uppercase uppercase">{{ $title }}</h2>
        </div>
    @endif
    <div class="flex">
        <div class="w-1/6"></div>
        <div class="{{ $large??false ? 'w-1/2' : 'w-2/5' }}">{{ $slot }}</div>
    </div>
    <div class="w-100 h-32"></div>
</div>