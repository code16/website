


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
                Here is a selection of blog posts (in english) about <a href="https://sharp.code16.fr">Sharp</a>, Laravel and general web / PHP development,
                written by <a href="/en">Code 16</a> members.
            </p>
        </div>
        @foreach($posts as $post)
            <x-post-item
                :post="$post"
                :page="$page"
            />
        @endforeach
    </div>

    <x-section large>
        <p class="mt-5">
            <a href="/en">
                &lt; learn about Code 16
            </a>
        </p>
    </x-section>

</x-layout>
