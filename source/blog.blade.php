


<x-layout lang="en">
    <x-title>
        Blog
    </x-title>

    <x-section>
        <x-section.title heading-level="h1">
            Code 16’s blog
        </x-section.title>

        <div class="mb-16">
            <x-paragraph>
                Here is a selection of blog posts (in english) about <a href="https://sharp.code16.fr">Sharp</a>, Laravel and general web / PHP development,
                written by <a href="/en">Code 16</a> members.
            </x-paragraph>
        </div>

        @foreach($posts as $post)
            <x-post-item
                :post="$post"
                :page="$page"
            />
        @endforeach
    </x-section>

    <x-section>
        <a href="/en">
            &lt; learn about Code 16
        </a>
    </x-section>
</x-layout>
