@extends('layouts.layout')

@section('main_content')
<div class="container">
    <div>
        <h1 class="pt-16 font-rubik-dirt text-5xl text-secondary uppercase opacity-25 text-center">Оставить заявку</h1>
        <p class="text-xl text-center font-bold -mt-6 relative z-2">Оформите заказ всего в пару кликов</p>
        <div class="mt-6 p-16 bg-[url('/public/img/order_bg.jpg')] bg-center bg-cover">
            <p id="successMessage" class="hidden my-4 text-center text-2xl"></p>
            <form id="orderForm" method="post" action="/order" class="mt-12 w-full md:w-2/4 mx-auto p-8 border border-white shadow-lg shadow-black">
                @csrf
                <input type="hidden" name="package" value="{{$package->id}}">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium">Имя</label>
                    <input type="text" id="name" name="name" required
                           class="mt-1 block w-full p-2 bg-green-600 bg-opacity-40 rounded-md focus:outline-none focus:ring focus:ring-green-800"
                           placeholder="Ваше имя">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium">Электронная почта</label>
                    <input type="email" id="email" name="email" required
                           class="mt-1 block w-full p-2 bg-green-600 bg-opacity-40 rounded-md focus:outline-none focus:ring focus:ring-green-800"
                           placeholder="Ваш email">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium">Номер телефона</label>
                    <input type="tel" id="phone" name="phone" required
                           class="mt-1 block w-full p-2 bg-green-600 bg-opacity-40 rounded-md focus:outline-none focus:ring focus:ring-green-800"
                           placeholder="Ваш телефон"
                           pattern="^\+375[0-9]{9}$"
                           title="Введите номер телефона в формате: +375291111111">
                </div>
                <div class="mb-4">
                    <p class="">Выбранный пакет: {{ $package->name }}</p>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium">Сообщение</label>
                    <textarea id="message" name="message" required rows="4"
                              class="mt-1 block w-full p-2 bg-green-600 bg-opacity-40  rounded-md focus:outline-none focus:ring focus:ring-green-800"
                              placeholder="Ваши комментарии"></textarea>
                </div>
                <button type="submit"
                        class="px-6 py-2 bg-green-600 hover:bg-green-400">
                    Отправить
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    @vite('resources/js/pages/order.js')
@endpush
