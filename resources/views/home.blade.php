@extends('layouts.layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('libs/swiper-bundle.min.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('libs/gsap.min.js') }}" ></script>
    <script src="{{ asset('libs/swiper-bundle.min.js') }}"></script>
@endpush

@section('title', 'Главная страница')

@section('main_content')

    <section class="min-h-[50vh] lg:min-h-[90vh] main_bg">
        <div class="container">
            <div class="flex flex-col max-w-max mx-auto pt-40 md:mx-0 md:pl-40">
                <h1 class="font-bold tracking-tighter text-5xl">Привет, меня зовут</h1>
                <h2 class="font-comforter text-secondary text-6xl text-shadow-custom translate-x-8">Дмитрий Алисов</h2>
                <p class="text-accent uppercase text-base">Я опытный фотограф</p>
                <button class="self-center text-white uppercase rounded-md bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300
                dark:focus:ring-teal-800 font-medium text-sm px-5 py-2 mt-6 text-center mr-2 mb-2" onclick="my_modal.showModal()">Заказать</button>
                <dialog id="my_modal" class="modal modal-bottom sm:modal-middle text-black text-left">
                    <div class="modal-box">
                        <h3 class="text-lg font-bold text-center">Заказать фотосессию</h3>
                        <div class="modal-action justify-center">
                            <form method="post" action="/order" class="w-full">
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
                                    <label for="tel" class="block text-sm font-medium">Номер телефона</label>
                                    <input type="tel" id="phone" name="phone" required
                                           class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500"
                                           placeholder="Ваш телефон">
                                </div>
                                <div class="mb-4">
                                    <label for="package" class="block text-sm font-medium">Пакет услуг</label>
                                    <select id="package" name="package" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500">
                                        <option value="">Выбрать</option>
                                        @foreach($packages as $package)
                                            <option value="{{ $package->id }}">{{ $package->name }}</option>
                                        @endforeach
                                    </select>
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
                                <button class="btn bg-red-400 hover:bg-red-200">Отмена</button>
                            </form>
                        </div>
                    </div>
                </dialog>
            </div>
        </div>
    </section>

@endsection
