@extends('layout', ["background" => "brand-brown"])

@section('content')
    <div class="w-screen h-screen font-sans font-bold text-white tracking-wide p-8 sm:p-16">
        <div class="container flex flex-wrap">
            <div class="w-full xl:w-2/5 md:w-2/3 text-lg mb-12 md:pr-12">
                <header class="mb-12">
                    <h1 class="uppercase tracking-wider text-4xl bg-white text-brand-brown pb-6 pl-3 pt-2">Code 16</h1>
                </header>
                <div>
                    <p>
                        <span>Philippe Lonchampt&nbsp;&nbsp;</span>
                        <a class="font-normal" href="mailto:philippe@code16.fr">
                            <span class="hidden sm:inline">philippe@code16.fr</span>
                            <span class="sm:hidden">email</span>
                        </a>
                    </p>
                    <p>Rémi Collin</p>
                    <p>Antoine Guingand</p>
                </div>
                <div class="mt-12 font-normal">
                    <p>SCM Gotham,</p>
                    <p>24 rue du Vieux marché aux Vins</p>
                    <p class="m-0">67000 Strasbourg, France</p>
                </div>
            </div>
            <div class="w-full xl:w-1/5 lg:w-1/4 md:w-1/3 text-3xl">
                <p>Nouveau site à venir</p>
                <p class="font-normal">New website is coming</p>
            </div>
        </div>
    </div>
@stop
