@props([
    // slots
    'separator'
])

{!! preg_replace('/\s*\n\s*/', trim($separator), trim($slot)) !!}
