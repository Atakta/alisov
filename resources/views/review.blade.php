@extends('layouts.layout')

@section('title', 'Отзывы')

@section('main_content')
<div class="container mx-auto text-black">
    <div class="p-6 mt-6 bg-gradient-to-r from-blue-200 to-cyan-200 w-2/4 mx-auto rounded-md">
        <h1 class="mb-3 text-center text-xl">Оставьте ваш отзыв</h1>
        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="/review/check">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium">Имя</label>
                <input type="text" id="name" name="name" required
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500"
                       placeholder="Ваше имя">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">Электронная почта</label>
                <input type="email" id="email" name="email" required
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500"
                       placeholder="Ваш email">
            </div>
            <div class="mb-4">
                <label for="review" class="block text-sm font-medium">Отзыв</label>
                <textarea id="review" name="review" required rows="4"
                          class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500"
                          placeholder="Ваш отзыв"></textarea>
            </div>
            <div class="flex justify-center">
                <button type="submit"
                        class="w-1/4 mt-3 bg-green-700 text-white font-semibold py-2 rounded-md hover:bg-green-600">
                    Отправить
                </button>
            </div>
        </form>
    </div>

    <h1 class="mt-8 mb-5 text-white text-3xl"><b>Отзывы о фотографе</b></h1>
    @foreach($reviews as $el)
        <div class="mb-5 p-8 bg-white rounded-lg shadow-[5px_5px_5px_rgba(299,299,299,0.3)]">
            <h3 class="font-semibold text-purple-500">{{$el->name}}</h3>
            <p class="text-black">{{$el->email}}</p>
            <p class="mt-5 mb-5 p-3 text-black">{{$el->review}}</p>
        </div>
    @endforeach
    <div class="mt-5">
        {{ $reviews->links() }}
    </div>
</div>
@endsection
