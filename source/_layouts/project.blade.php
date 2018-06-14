@extends('_layouts.master',[
    'background'=>'white',
    'bodyClass'=>"project $page->bodyClass",
    'headerClass'=>'bg-black text-brand-white'
])

@section('content')
    @component('_partials/section', [
        'stickyTitle'=>[ 'startOffset'=>-130 ],
        'container'=>'max-w-xl'
    ])
        @slot('title')
            {{ $page->title }}
        @endslot
        <div class="content">
            <stacker class="mt-6" :breakpoint="768">
                @yield('projectContent')
            </stacker>
        </div>
    @endcomponent
@endsection