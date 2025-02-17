@extends('layouts.layout')

@section('title', 'Услуги')

@section('main_content')

<div class="container px-8">
    <h1 class="pt-16 font-rubik-dirt text-5xl text-secondary uppercase opacity-25 text-center">Услуги</h1>
    <p class="text-xl text-center font-bold -mt-6 relative z-2">Что я могу предложить?</p>
        <!-- Портретные фотосессии -->
    <section>
        <h1 class="mt-24 font-bold text-3xl uppercase">Портретная съемка</h1>
        <div class="mt-4 bg-[url('/public/img/portret_bg.jpg')] bg-center bg-cover h-96">
            <div class="flex flex-col justify-between md:ml-auto p-8 w-full md:w-1/3 h-full bg-black bg-opacity-70">
                <p>Описание портретной съемки</p>
                <a href="/portfolio/portrait" class="self-center border border-secondary rounded-full px-6 py-2 text-accent text-sm uppercase transform hover:scale-105 transition duration-300">Портфолио</a>
            </div>
        </div>
        <h1 class="pt-16 font-rubik-dirt text-5xl text-secondary uppercase opacity-25 text-center">Пакеты услуг</h1>
        <p class="text-xl text-center font-bold -mt-6 relative z-2">Портретная съемка</p>
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($portrets as $portret)
                <div class="flex flex-col mt-12 bg-black service-shadow  p-12 transform hover:scale-105 transition duration-300">
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-center">{{  $portret->name }}</h3>
                        <p class="mt-8 text-gray-400">{{  $portret->description }}</p>
                    </div>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold">{{  $portret->price . " BYN"}}</span>
                    </div>
                    <ul class="flex-grow mb-8 space-y-4 text-gray-400">
                        @foreach(explode(',', $portret->services) as $service)
                            <li class="flex items-center">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>{{ $service }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <a href="/order/{{ $portret->id }}" class="block w-full py-2 px-4 text-center rounded-md uppercase font-medium bg-gradient-to-r from-green-800 to-green-300 hover:from-green-300 hover:to-green-800">
                        Заказать
                    </a>
                </div>
            @endforeach
        </div>
    </section>

            <!-- Свадебные фотосессии -->
    <section>
        <h1 class="mt-24 font-bold text-3xl uppercase">Свадебная съемка</h1>
        <div class="mt-4 bg-[url('/public/img/wedding_bg.jpg')] bg-center bg-cover h-96">
            <div class="flex flex-col justify-between md:mr-auto p-8 w-full md:w-1/3 h-full bg-black bg-opacity-70">
                <p>Описание свадебной съемки</p>
                <a href="/portfolio/weddings" class="self-center border border-secondary rounded-full px-6 py-2 text-accent text-sm uppercase transform hover:scale-105 transition duration-300">Портфолио</a>
            </div>
        </div>
        <h1 class="pt-16 font-rubik-dirt text-5xl text-secondary uppercase opacity-25 text-center">Пакеты услуг</h1>
        <p class="text-xl text-center font-bold -mt-6 relative z-2">Свадебная съемка</p>
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($weddings as $wedding)
            <div class="flex flex-col mt-12 bg-black service-shadow  p-12 transform hover:scale-105 transition duration-300">
                <div class="mb-8">
                    <h3 class="text-2xl font-semibold">{{  $wedding->name }}</h3>
                    <p class="mt-4 text-gray-400">{{  $wedding->description }}</p>
                </div>
                <div class="mb-8">
                    <span class="text-4xl font-extrabold">{{  $wedding->price . " BYN"}}</span>
                </div>
                <ul class="flex-grow mb-8 space-y-4 text-gray-400">
                    @foreach(explode(',', $wedding->services) as $service)
                    <li class="flex items-center">
                        <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>{{ $service }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="/order/{{ $wedding->id }}" class="block w-full py-2 px-4 text-center rounded-md uppercase font-medium bg-gradient-to-r from-green-800 to-green-300 hover:from-green-300 hover:to-green-800">
                    Заказать
                </a>
            </div>
            @endforeach
        </div>
    </section>


            <!-- Love story фотосессии -->
    <section>
        <h1 class="mt-24 font-bold text-3xl uppercase">Съемка love story</h1>
        <div class="mt-4 bg-[url('/public/img/love_bg.jpg')] bg-center bg-cover h-96">
            <div class="flex flex-col justify-between md:ml-auto p-8 w-full md:w-1/3 h-full bg-black bg-opacity-70">
                <p>Описание love story съемки</p>
                <a href="/portfolio/lovestory" class="self-center border border-secondary rounded-full px-6 py-2 text-accent text-sm uppercase transform hover:scale-105 transition duration-300">Портфолио</a>
            </div>
        </div>
        <h1 class="pt-16 font-rubik-dirt text-5xl text-secondary uppercase opacity-25 text-center">Пакеты услуг</h1>
        <p class="text-xl text-center font-bold -mt-6 relative z-2">Съемка love story</p>
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($lovestories as $lovestory)
                <div class="flex flex-col mt-12 bg-black service-shadow  p-12 transform hover:scale-105 transition duration-300">
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold">{{  $lovestory->name }}</h3>
                        <p class="mt-4 text-gray-400">{{  $lovestory->description }}</p>
                    </div>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold">{{  $lovestory->price . " BYN" }}</span>
                    </div>
                    <ul class="flex-grow mb-8 space-y-4 text-gray-400">
                        @foreach(explode(',', $lovestory->services) as $service)
                            <li class="flex items-center">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>{{ $service }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <a href="/order/{{ $lovestory->id }}" class="block w-full py-2 px-4 text-center rounded-md uppercase font-medium bg-gradient-to-r from-green-800 to-green-300 hover:from-green-300 hover:to-green-800">
                        Заказать
                    </a>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
