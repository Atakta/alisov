@extends('layouts.layout')

@section('title', 'Портфолио')

@section('main_content')

    <div class="py-10 container">
        <h1 class="font-rubik-dirt text-5xl pt-6 text-secondary uppercase opacity-25 text-center">портфолио</h1>
        <p class="text-xl text-center font-bold -mt-6 relative z-2">Ознакомьтесь с моими работами</p>
        <div class="my-10 row flex justify-center">
            @if($catalog)
                <a
                    class="rounded-md rounded-r-none bg-black py-2 px-4 border border-transparent text-center text-sm transition-all shadow-md hover:shadow-lg focus:bg-slate-900 focus:shadow-none active:bg-slate-900 hover:bg-slate-900 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    href="{{ asset("portfolio") }}"
                >
                    Все
                </a>
            @else
                <span
                    class="rounded-md rounded-r-none bg-secondary bg-opacity-25 py-2 px-4 border border-transparent text-center text-sm">
                    Все
                </span>
            @endif
            @foreach($cats as $cat)
                @if($cat->url == $catalog)
                    <span
                        class="@if($loop->last)rounded-md rounded-l-none @else rounded-none @endif  bg-secondary bg-opacity-25 py-2 px-4 border border-transparent  text-center text-sm transition-all">
                        {{ $cat->name }}
                    </span>
                @else
                    <a
                        class="@if($loop->last)rounded-md rounded-l-none  @else rounded-none @endif bg-black py-2 px-4 border-l border-r border-[#080808] text-center text-sm transition-all shadow-md hover:shadow-lg focus:bg-slate-900 focus:shadow-none active:bg-slate-900 hover:bg-slate-900 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        href="{{ asset("portfolio/" . $cat->url) }}">
                        {{ $cat->name }}
                    </a>
                @endif
            @endforeach
        </div>
        <div class="list">
            @foreach($photos as $photo)
                <div class="pic">
                    <img class="w-full block" src="{{ asset('storage/' . $photo->url) }}" alt="{{ $photo->title }}">
                </div>
            @endforeach
        </div>
        <div class="mt-12 flex flex-col items-center">
            <p class="text-2xl font-bold text-center">Большое количество хороших отзывов поможет вам <br>  окончательно определиться с выбором</p>
            <a href="/review" class="mt-6 border border-secondary rounded-full px-8 py-2 text-accent text-lg uppercase transform hover:scale-105 transition duration-300">Отзывы</a>
        </div>

    </div>

@endsection
