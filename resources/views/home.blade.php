@extends('layouts.layout')

@push('styles')

@endpush

@section('title', 'Главная страница')

@section('main_content')

    <section class="min-h-[50vh] lg:min-h-[90vh] bg-[url('/public/img/main_bg1.jpg')] bg-center bg-cover">
        <div class="container">
            <div class="flex flex-col max-w-max mx-auto pt-40 md:mx-0 md:pl-40">
                <h1 class="font-bold tracking-tighter text-5xl">Привет, меня зовут</h1>
                <h2 class="font-comforter text-secondary text-6xl text-shadow-custom translate-x-8">Дмитрий Алисов</h2>
                <p class="uppercase text-base">Я опытный фотограф</p>
                <button class="self-center text-white uppercase rounded-full border border-white font-medium text-sm px-5 py-2 mt-6 text-center transition duration-300 hover:border-secondary hover:scale-105" onclick="my_modal.showModal()">Заказать</button>
                <dialog id="my_modal" class="modal modal-bottom sm:modal-middle bg-black bg-opacity-50 text-black text-left">
                    <div id="form_box" class="modal-box bg-gradient-to-br from-teal-400 to-green-300 relative">
                        <button onclick="my_modal.close()">
                            <svg id="close-icon" class="w-6 h-6 absolute top-2 right-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                        <h3 id="form_title" class="text-xl font-bold text-center">Заказать фотосессию</h3>
                        <div class="modal-action justify-center ease-in-out">
                            <form id="orderForm" method="post" action="/order" class="w-full">
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
                                    <label for="phone" class="block text-sm font-medium">Номер телефона</label>
                                    <input type="tel" id="phone" name="phone" required
                                           class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500"
                                           placeholder="Ваш телефон"
                                           pattern="^\+375[0-9]{9}$"
                                           title="Введите номер телефона в формате: +375291111111">
                                </div>
                                <div class="mb-4">
                                    <label for="package" class="block text-sm font-medium">Пакет услуг</label>
                                    <select id="package" name="package" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500">
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
                                <p id="successMessage" class="hidden my-4 text-center text-2xl"></p>
                                <button type="submit" class="btn bg-black text-primary hover:bg-slate-700 border-none">Отправить</button>
                            </form>
                         </div>
                    </div>
                </dialog>
            </div>
        </div>
    </section>

    <section class="py-16 min-h-[50vh] lg:min-h-[100vh] bg-none md:bg-[url('/public/img/dima.png')] md:bg-right bg-bottom md:bg-contain md:bg-no-repeat">
        <div class="container">
            <h1 class="font-rubik-dirt text-5xl text-secondary uppercase opacity-25 text-center">Обо мне</h1>
            <p class="text-xl text-center font-bold -mt-6 relative z-2">Несколько слов о фотографе</p>
            <div class="bg-black mt-6 p-16 w-full text-justify md:w-1/2 lg:ml-32 lg:mt-20 flex flex-col shadow-md shadow-black">
                <h2 class="text-center text-xl">Давайте познакомимся :)</h2>
                <p class="pt-12">Меня зовут Дмитрий Алисов, и я — фотограф с более чем 5-летним опытом, живущий и работающий в прекрасном городе Минске.
                    Моя страсть к фотографии позволяет мне запечатлевать самые важные моменты жизни, будь то портретная съемка, свадебные торжества или
                    романтичные lovestory. </p>
                <p class="mt-6">Я верю, что каждая история уникальна, и стараюсь передать это в своих работах. Мой подход к съемке основан на креативности и внимании
                    к деталям, что позволяет мне создавать яркие и запоминающиеся образы. Я также с радостью помогу вам с подбором образа, чтобы вы
                    чувствовали себя комфортно и уверенно перед камерой.</p>
                <p class="mt-6">Давайте вместе создадим что-то особенное, что будет радовать вас на протяжении многих лет!</p>
                <div class="flex justify-center gap-8 mt-4">
                    <a href="/services" class="mt-6 border border-secondary rounded-full px-6 py-2 text-accent text-sm uppercase transform hover:scale-105 transition duration-300">Все услуги</a>
                    <a href="/portfolio" class="mt-6 border border-secondary rounded-full px-6 py-2 text-accent text-sm uppercase transform hover:scale-105 transition duration-300">Портфолио</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 min-h-[50vh] lg:min-h-screen bg-[url('/public/img/benefits_bg.png')] bg-center bg-cover no-repeat">
        <div class="container">
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

@push('scripts')
    @vite('resources/js/pages/order.js')
@endpush
