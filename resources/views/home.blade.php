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

        <div class="swiper slider text-white">

            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="slide_content">
                        <h2>Фотограф</h2>
                        <p class="name">Дмитрий Алисов</p>
                        <p class="reason">Вам нужен именно я <br> и вот почему</p>
                        <img class="max-w-[100px] mx-auto mb-6" src="{{ asset('img/arrow.png') }}" alt="">
                        <button class="hover:scale-110 transition-transform duration-110" onclick="my_modal.showModal()">Заказать</button>
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
                <div class="swiper-slide slide">
                    <div class="slide_content">
                        <h2>Качество</h2>
                        <p>Обладаю большим опытом в фотографии <br> и работаю на результат.</p>
                        <button>Заказать</button>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="slide_content">
                        <h2>Скорость</h2>
                        <p>Согласую съемку даже в сжатые сроки <br> и быстро подготовлю фотографии.</p>
                        <button>Заказать</button>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="slide_content">
                        <h2>Доступность</h2>
                        <p>Не завышаю цены на свои услуги <br> и всегда открыт для диалога.</p>
                        <button>Заказать</button>
                    </div>
                </div>

            </div>

            <div class="slider-bottom">
                <div class="slider-pagination">
                    <div class="swiper-pagination"></div>
                </div>
                <div class="slider-navigation">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

        </div>









    <script defer>
        const swiper = new Swiper('.swiper-container', {

            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
        <video class='video-background' muted>
            <source src="{{ asset('media/background.mp4') }}" type="video/mp4">
            Ваш браузер не поддерживает видео.
        </video>
@endsection
