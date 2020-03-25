@extends('_layouts.master', [
    'background' => 'brand-darkblue',
    'bodyClass' => 'home',
    'headerClass' => 'text-brand-brown bg-brand-white'
])

@section('content')
    <div class="text-brand-white">
        @component('_partials.section', ['large'=>true])
            @component('_partials.paragraph')
                @slot('title')
                    Erreur 404
                @endslot
                Cette page est introuvable / This page can not be found.
                <p class="mt-3"><a href="/">&larr; Home</a></p>
            @endcomponent
        @endcomponent
    </div>

    <div class="text-brand-white">
        @component('_partials.section', ['large'=>true])
            Code 16<br>
            <a href="http://www.gothamscm.com/" class="regular">SCM Gotham</a><br>
            24 rue du Vieux marché aux Vins, 67000 Strasbourg, France<br>
            Philippe Lonchampt : <a href="mailto:philippe@code16.fr" class="regular">philippe@code16.fr</a><br>
            <a href="https://github.com/code16" class="regular">Github</a> — <a href="https://medium.com/code16" class="regular">Medium</a>
        @endcomponent
    </div>
@endsection