@extends('layouts.layout')

@section('title', 'Отзывы')

@section('main_content')
<div class="container">
    <h1 class="pt-16 font-rubik-dirt text-5xl text-secondary uppercase opacity-25 text-center">Отзывы</h1>
    <p class="text-xl text-center font-bold -mt-6 relative z-2">Что обо мне говорят?</p>
    <h2 class="mt-12 text-2xl font-bold text-center">Узнайте, что думают клиенты  о моей работе</h2>
    <p class="font-bold text-lg text-center">или оставьте <a class="text-secondary" href="#new_review">свой отзыв</a></p>
</div>
<section class="mt-12 p-16 bg-[url('/public/img/reviews_bg.jpg')] bg-center bg-cover bg-fixed">
    <div class="container">
    @if(session('success'))
        <p class="my-4 md:mx-24 p-2 text-black bg-secondary bg-opacity-80 rounded-md">
            {{ session('success') }}
        </p>
    @endif
    @foreach($reviews as $el)
        <div class="md:mx-24 mb-5 p-8 bg-black bg-opacity-70 rounded-md shadow-[9px_9px_5px_-5px_rgb(0,0,0)]">
            <h3 class="font-semibold text-secondary">{{$el->name}}</h3>
            <p class="text-slate-400">{{$el->review_date->format('d.m.Y')}}</p>
            <p class="mt-5 mb-5">{{$el->review}}</p>
        </div>
    @endforeach
        <div class="mt-5">
            {{ $reviews->links() }}
        </div>
    </div>
</section>
<div class="container">
    <h2 class="mt-12 text-2xl font-bold text-center">Чтобы оставить  отзыв о моей работе,  <br> просто заполните форму</h2>
</div>
<section class="mt-12 p-24 bg-[url('/public/img/review_bg.jpg')] bg-center bg-cover bg-fixed" id="new_review">
    <div class="container">
        <div class="p-12 mt-6 md:w-1/2 mx-auto rounded-2xl border-2 border-white bg-white bg-opacity-20 backdrop-blur-sm">
            <h1 class="mb-3 text-center text-2xl font-bold">Оставить отзыв</h1>
            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form id="reviewForm" method="post" action="/review/check">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium">Имя</label>
                    <input type="text" id="name" name="name" required
                           class="mt-1 block w-full text-black p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-green-500 shadow-[inset_0px_3px_3px_2px_rgba(0,0,0,0.3)]"
                           placeholder="Ваше имя">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium">Электронная почта</label>
                    <input type="email" id="email" name="email" required
                           class="mt-1 block w-full text-black p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-green-500 shadow-[inset_0px_3px_3px_2px_rgba(0,0,0,0.3)]"
                           placeholder="Ваш email">
                    <p class="mt-2 text-sm">Ваш email адрес не будет опубликован.</p>
                </div>
                <div class="mb-4">
                    <label for="review" class="block text-sm font-medium">Отзыв</label>
                    <textarea id="review" name="review" required rows="4"
                              class="mt-1 block w-full text-black p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-green-500 shadow-[inset_0px_3px_3px_2px_rgba(0,0,0,0.3)]"
                              placeholder="Ваш отзыв"></textarea>
                </div>
                <p id="thankYouMessage" class="hidden my-4 text-center text-xl"></p>
                <div class="flex justify-center">
                    <button type="submit"
                            class="mt-3 text-white font-semibold px-6 py-2 border-2 border-white rounded-full transition duration-300 hover:bg-white hover:text-secondary">
                        Отправить
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
@push('scripts')
    @vite('resources/js/pages/review.js')
@endpush
