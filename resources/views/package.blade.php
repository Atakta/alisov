@extends('layouts.layout')

@section('main_content')
<div class="container mx-auto">
<form method="post" action="/order" class="w-2/4 mx-auto text-white">
    @csrf
    <input type="hidden" name="package" value="{{$package->id}}">
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
        <label for="tel" class="block text-sm font-medium">Номер телефона</label>
        <input type="tel" id="phone" name="phone" required
               class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500"
               placeholder="Ваш телефон">
    </div>
    <div class="mb-4">
        <p class="">{{ $package->name }}</p>
    </div>
    <div class="mb-4">
        <label for="message" class="block text-sm font-medium">Сообщение</label>
        <textarea id="message" name="message" required rows="4"
                  class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500"
                  placeholder="Ваши комментарии"></textarea>
    </div>
    <button type="submit"
            class="btn bg-green-400 hover:bg-green-200">
        Отправить
    </button>
</form>
</div>
@endsection
