@extends('layouts.layout')

@section('title', 'Портфолио')

@section('main_content')

    <div class="py-10 container mx-auto">
        <div class="p-[50px] rounded-xl bg-black/60 shadow-[0_0_20px_rgba(0,0,0,0.8)]">
            <h1 class="text-5xl pt-6 text-white text-center">Мое портфолио</h1>
            <div class="my-10 row flex justify-center">
                @if($catalog)
                <a
                    class="rounded-md rounded-r-none bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    href="{{ asset("portfolio") }}"
                >
                    Все
                </a>
                @else
                    <span
                        class="rounded-md rounded-r-none bg-slate-600 py-2 px-4 border border-transparent text-center text-sm text-white ">
                        Все
                    </span>
                @endif
                @foreach($cats as $cat)
                    @if($cat->url == $catalog)
                        <span
                            class="@if($loop->last)rounded-md rounded-l-none @else rounded-none @endif  bg-slate-600 py-2 px-4 border border-transparent  text-center text-sm text-white transition-all"
                        >
                            {{ $cat->name }}
                        </span>
                    @else
                        <a
                            class="@if($loop->last)rounded-md rounded-l-none @else rounded-none @endif bg-slate-800 py-2 px-4 border-l border-r border-slate-700 text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            href="{{ asset("portfolio/" . $cat->url) }}"
                        >
                            {{ $cat->name }}
                        </a>
                    @endif
                @endforeach
            </div>
            <div class="mt-6 flex flex-wrap justify-around gap-6">
                @foreach($photos as $photo)
                    <img class="w-[500px] h-[300px] bg-white shadow-[3px_3px_10px_2px_rgba(0,0,0,0.8)]"
                         src="{{ asset('storage/' . $photo->url) }}" alt="{{ $photo->title }}">
                @endforeach
            </div>
        </div>
    </div>

@endsection
