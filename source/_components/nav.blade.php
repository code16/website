@props([
    'home' => false,
    'blog' => false,
    'lang' => 'fr',
])

<div class="nav container absolute pr-3">
    <div class="flex justify-end gap-6">
        <div>
            <a href="/blog" @class([$blog ? '!text-white' : 'underline'])>
                blog
            </a>
        </div>
        <div>
            @if($home)
                <a href="/" @class([$lang === "fr" ? '!text-white' : 'underline'])>
                    fr
                </a>
                <span class="text-white">|</span>
                <a href="/en" @class([$lang === "en" ? '!text-white' : 'underline'])>
                    en
                </a>
            @else
                <a class="underline" href="/en">
                    about us
                </a>
            @endif
        </div>
    </div>
</div>
