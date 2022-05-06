


<x-layout lang="en">
    <x-title>
        Blog
    </x-title>

    <x-slot name="nav">
        <x-nav active="blog" />
    </x-slot>

    <div class="section__content">
        <div class="inline-block mb-12">
            <h1 class="text-2xl uppercase tracking-widest">
                Code 16’s blog
            </h1>
            <p class="mt-3">
                Here are blog posts (in english) about <a href="https://sharp.code16.fr">Sharp</a>, Laravel, and general web development,
                written by Code 16 members.
            </p>
            <p class="mt-3">
                <a href="/en">
                    &lt; learn about Code 16
                </a>
            </p>
        </div>
        @foreach($posts as $post)
            <x-post-item
                :post="$post"
                :page="$page"
            />
        @endforeach
    </div>
</x-layout>
