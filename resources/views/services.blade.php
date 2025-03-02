@extends('layouts.layout')

@section('title', 'Услуги')

@section('main_content')

<div class="container px-8">
    <h1 class="pt-16 font-rubik-dirt text-5xl text-secondary uppercase opacity-25 text-center">Услуги</h1>
    <p class="text-xl text-center font-bold -mt-6 relative z-2">Что я могу предложить?</p>
        <!-- Портретные фотосессии -->
    <section>
        <h1 class="mt-24 font-bold text-3xl uppercase">Портретная съемка</h1>
        <div class="mt-4 bg-[url('/public/img/portret_bg.jpg')] bg-center bg-cover">
            <div class="flex flex-col  justify-between md:ml-auto p-8 w-full md:w-1/3 h-full bg-black bg-opacity-70">
                <p>Портретная съемка — это искусство запечатлеть вашу индивидуальность и эмоции в каждом кадре. Я создаю уникальные образы,
                    которые отражают вашу сущность, будь то в уютной студии или на живописной природе. Я забочусь о каждой детали, чтобы вы
                    чувствовали себя комфортно и уверенно, а результатом стали яркие и запоминающиеся фотографии, которые будут радовать вас
                    долгие годы. Позвольте мне рассказать вашу историю через объектив камеры!</p>
                <a href="/portfolio/portrait" class="self-center border border-secondary rounded-full mt-8 px-6 py-2 text-accent text-sm uppercase transform hover:scale-105 transition duration-300">Портфолио</a>
            </div>
        </div>
        <h1 class="pt-16 font-rubik-dirt text-5xl text-secondary uppercase opacity-25 text-center">Пакеты услуг</h1>
        <p class="text-xl text-center font-bold -mt-6 relative z-2">Портретная съемка</p>
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($portrets as $portret)
                <div class="flex flex-col mt-12 p-8 bg-black shadow-emerald-sm hover:shadow-emerald-md hover:scale-105 transition duration-300">
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-center">{{  $portret->name }}</h3>
                        <p class="mt-8 text-gray-400 text-center">{{  $portret->description }}</p>
                    </div>
                    <div class="mb-8 text-center">
                        <span class="text-2xl font-extrabold">{{  $portret->price . " BYN"}}</span>
                    </div>
                    <ul class="flex-grow mb-8 space-y-4 text-gray-400">
                        @foreach(explode(',', $portret->services) as $service)
                            <li class="flex items-center text-sm">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>{{ $service }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <a href="/order/{{ $portret->id }}" class="text-white uppercase rounded-full border border-white font-medium text-sm px-4 py-3 mt-4 text-center transition duration-300 hover:border-secondary hover:scale-105">
                        Заказать
                    </a>
                </div>
            @endforeach
        </div>
    </section>

            <!-- Свадебные фотосессии -->
    <section>
        <h1 class="mt-24 font-bold text-3xl uppercase">Свадебная съемка</h1>
        <div class="mt-4 bg-[url('/public/img/wedding_bg.jpg')] bg-center bg-cover">
            <div class="flex flex-col justify-between md:mr-auto p-8 w-full md:w-1/3 h-full bg-black bg-opacity-70">
                <p>Свадебная съемка — это волшебное путешествие, в котором я запечатлеваю самые трогательные и незабываемые моменты вашего
                    особенного дня. Я создаю атмосферу доверия и уюта, позволяя вам наслаждаться каждым мгновением, пока фиксирую искренние
                    эмоции, радость и любовь. Уделяя внимание каждой детали, я стремлюсь сделать так, чтобы ваши фотографии отражали уникальность
                    вашей истории и стали настоящим наследием, которое вы будете бережно хранить на протяжении всей жизни. Давайте вместе создадим
                    визуальную сказку о вашем счастье!</p>
                <a href="/portfolio/weddings" class="self-center border border-secondary rounded-full mt-8 px-6 py-2 text-accent text-sm uppercase transform hover:scale-105 transition duration-300">Портфолио</a>
            </div>
        </div>
        <h1 class="pt-16 font-rubik-dirt text-5xl text-secondary uppercase opacity-25 text-center">Пакеты услуг</h1>
        <p class="text-xl text-center font-bold -mt-6 relative z-2">Свадебная съемка</p>
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($weddings as $wedding)
            <div class="flex flex-col mt-12 p-8 bg-black shadow-emerald-sm hover:shadow-emerald-md hover:scale-105 transition duration-300">
                <div class="mb-8">
                    <h3 class="text-2xl font-semibold text-center">{{  $wedding->name }}</h3>
                    <p class="mt-4 text-gray-400 text-center">{{  $wedding->description }}</p>
                </div>
                <div class="mb-8 text-center">
                    <span class="text-2xl font-extrabold">{{  $wedding->price . " BYN"}}</span>
                </div>
                <ul class="flex-grow mb-8 space-y-4 text-gray-400">
                    @foreach(explode(',', $wedding->services) as $service)
                    <li class="flex items-center text-sm">
                        <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>{{ $service }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="/order/{{ $wedding->id }}" class="text-white uppercase rounded-full border border-white font-medium text-sm px-4 py-3 mt-4 text-center transition duration-300 hover:border-secondary hover:scale-105">
                    Заказать
                </a>
            </div>
            @endforeach
        </div>
    </section>
            <!-- Love story фотосессии -->
    <section>
        <h1 class="mt-24 font-bold text-3xl uppercase">Съемка love story</h1>
        <div class="mt-4 bg-[url('/public/img/love_bg.jpg')] bg-center bg-cover">
            <div class="flex flex-col justify-between md:ml-auto p-8 w-full md:w-1/3 h-full bg-black bg-opacity-70">
                <p>Lovestory — это волшебная возможность запечатлеть вашу уникальную историю любви в живых и эмоциональных кадрах.
                    Я создаю комфортную атмосферу, где вы можете быть собой, а я фиксирую искренние моменты, наполненные нежностью
                    и радостью. Каждая съемка — это индивидуальный подход, позволяющий отразить вашу связь и характер отношений.
                    Давайте вместе создадим незабываемые образы, которые будут рассказывать о вашей любви на протяжении всей жизни!</p>
                <a href="/portfolio/lovestory" class="self-center border border-secondary rounded-full mt-8 px-6 py-2 text-accent text-sm uppercase transform hover:scale-105 transition duration-300">Портфолио</a>
            </div>
        </div>
        <h1 class="pt-16 font-rubik-dirt text-5xl text-secondary uppercase opacity-25 text-center">Пакеты услуг</h1>
        <p class="text-xl text-center font-bold -mt-6 relative z-2">Съемка love story</p>
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($lovestories as $lovestory)
                <div class="flex flex-col mt-12 p-8 bg-black shadow-emerald-sm hover:shadow-emerald-md hover:scale-105 transition duration-300">
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-center">{{  $lovestory->name }}</h3>
                        <p class="mt-4 text-gray-400 text-center">{{  $lovestory->description }}</p>
                    </div>
                    <div class="mb-8 text-center">
                        <span class="text-2xl font-extrabold">{{  $lovestory->price . " BYN" }}</span>
                    </div>
                    <ul class="flex-grow mb-8 space-y-4 text-gray-400">
                        @foreach(explode(',', $lovestory->services) as $service)
                            <li class="flex items-center text-sm">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>{{ $service }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <a href="/order/{{ $lovestory->id }}" class="text-white uppercase rounded-full border border-white font-medium text-sm px-4 py-3 mt-4 text-center transition duration-300 hover:border-secondary hover:scale-105">
                        Заказать
                    </a>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
