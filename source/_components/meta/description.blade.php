@props([
    'content'
])

<x-slot name="metaDescription" :content="\Illuminate\Support\Str::limit(strip_tags($content), 300)"></x-slot>
