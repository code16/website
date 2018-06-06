@extends('_layouts.master',[
    'background'=>'white',
    'bodyClass'=>"project $page->bodyClass",
    'headerClass'=>'bg-black text-white'
])

@section('content')
    @component('_partials/section', [
        'stickyTitle'=>[ 'startOffset'=>-130 ],
        'container'=>'max-w-xl'
    ])
        @slot('title')
            {{ $page->title }}
        @endslot
        <div>
            <carousels-wrapper class="mt-6">
                @yield('projectContent')
            </carousels-wrapper>
        </div>
    @endcomponent
@endsection