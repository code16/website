@extends('layout')

@section('body_class','bg-brand-brown')
@section('content')
    <div class="w-screen h-screen font-sans font-bold text-white p-8">
        <div class="container mx-auto flex flex-wrap">
            <div class="w-full xl:w-1/3 lg:w-2/5 md:w-1/2 text-lg mb-8">
                <header>
                    <h1 class="uppercase tracking-wider text-4xl mb-8 md:mb-16">Code 16</h1>
                </header>
                <section>
                    <p>
                        <span>Philippe Lonchampt</span>
                        <a class="ml-2 font-normal" href="mailto:philippe@code16.fr">
                            <span class="hidden sm:inline">philippe@code16.fr</span>
                            <span class="sm:hidden">email</span>
                        </a>
                    </p>
                    <p>Rémi Collin</p>
                    <p>Antoine Guingand</p>
                </section>
                <section class="mt-8 font-normal">
                    <p>SCM Gotham,</p>
                    <p>24 rue du Vieux marché aux Vins,</p>
                    <p>67000 Strasbourg, France</p>
                </section>
            </div>
            <div class="w-full xl:w-1/5 lg:w-1/4 md:w-1/2  text-3xl">
                <p>Bientôt le<br>nouveau site...</p>
                <p>New website<br>is coming...</p>
            </div>
        </div>
    </div>
@stop
