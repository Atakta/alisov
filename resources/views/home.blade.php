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

    <section class="py-16 min-h-[50vh] lg:min-h-[100vh] bg-none md:bg-[url('/public/img/dima.png')] md:bg-right md:bg-bottom md:bg-contain md:bg-no-repeat">
        <div class="container">
            <h1 class="font-rubik-dirt text-5xl text-secondary uppercase opacity-25 text-center">Обо мне</h1>
            <p class="text-xl text-center font-bold -mt-6 relative z-2">Несколько слов о фотографе</p>
            <div class="bg-black mt-20 p-16 w-full md:w-1/2 lg:ml-32 lg:mt-32 flex flex-col shadow-md shadow-black">
                <h2 class="text-center">Давайте познакомимся :)</h2>
                <p class="pt-12">Описание, чем фотограф занимается.  It is a long established fact that a reader will be distracted by the readable content of
                    a page when looking at its layout. The point of using Lorem Ipsum. It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.   It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout. The point of using Lorem Ipsum. It is a long established fact that a
                    reader will be distracted by the readable content of a page when looking at its layout. </p>
                <div class="flex justify-center gap-8 mt-4">
                    <a href="/services" class="mt-6 border border-secondary rounded-full px-6 py-2 text-accent text-sm uppercase transform hover:scale-105 transition duration-300">Все услуги</a>
                    <a href="/portfolio" class="mt-6 border border-secondary rounded-full px-6 py-2 text-accent text-sm uppercase transform hover:scale-105 transition duration-300">Портфолио</a>
                </div>
            </div>
        </div>
    </section>

    <section class="min-h-[50vh] lg:min-h-screen bg-[url('/public/img/benefits_bg.png')] bg-center bg-cover no-repeat">
        <div class="container py-16">
            <h1 class="font-rubik-dirt text-5xl text-secondary uppercase opacity-25 text-center">Преимущества</h1>
            <p class="text-xl text-center font-bold -mt-6 relative z-2">Выбирая меня, вы получаете:</p>
            <div class="flex flex-col gap-3 w-2/3 md:w-1/2 mt-20 ml-auto">
                <div class="bg-black p-8 shadow-md shadow-black">
                    <h2 class="text-accent">Высокое качество</h2>
                    <p>Большой опыт и ответственное отношение позволяют мне гарантировать классный результат</p>
                </div>
                <div class="bg-black p-8 shadow-md shadow-black">
                    <h2 class="text-accent">Приятные цены</h2>
                    <p>Стоимость моих услуг приятно занижена</p>
                </div>
                <div class="bg-black p-8 shadow-md shadow-black">
                    <h2 class="text-accent">Сжатые сроки</h2>
                    <p>Гарантирую получение результата в кратчайший срок</p>
                </div>
                <div class="bg-black p-8 shadow-md shadow-black">
                    <h2 class="text-accent">Индивидуальный подход</h2>
                    <p>Всегда открыт для диалога и ваших предложений</p>
                </div>
            </div>
        </div>
    </section>


@endsection
