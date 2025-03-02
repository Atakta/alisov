@extends('layouts.layout')

@section('title', 'Контакты')

@section('main_content')
    <div class="container px-6">
        <h1 class="font-rubik-dirt text-5xl pt-16 text-secondary uppercase opacity-25 text-center">Контакты</h1>
        <p class="text-xl text-center font-bold -mt-6 relative z-2">Как можно связаться со мной?</p>
        <h2 class="mt-24 font-bold text-xl">Остались <span class="text-secondary">вопросы</span>? </h2>
        <p class="mt-6 text-gray-400">Вы можете воспользоваться формой обратной связи, я свяжусь с Вами в максимально короткий срок.</p>
        <p class="mt-6 text-gray-400">Также можно обратиться ко мне напрямую по контактам, указанным ниже.</p>
    </div>
    <section class="mt-6 bg-[url('/public/img/contacts_bg.jpg')] bg-center bg-cover shadow-md shadow-black">
        <div class="container">
            <div class="flex justify-between py-24 px-12">
                <form id="contactForm" method="post" action="/contacts/check">
                    @csrf
                    <p class="text-center font-bold mb-8">Связаться со мной</p>
                    <div class="mb-4">
                        <label for="name" class="text-accent block text-sm font-medium">Имя</label>
                        <input type="text" id="name" name="name" required
                               class="mt-1 block w-full p-2 bg-transparent focus:outline-none focus:ring-0 border-b-2 border-white focus:border-white shadow-none"
                               placeholder="Ваше имя">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="text-accent block text-sm font-medium">Электронная почта</label>
                        <input type="email" id="email" name="email" required
                               class="mt-1 block w-full p-2 bg-transparent focus:outline-none focus:ring-0 border-b-2 border-white focus:border-white shadow-none]"
                               placeholder="Ваш email">
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="text-accent block text-sm font-medium">Телефон</label>
                        <input type="tel" id="phone" name="phone" required
                               class="mt-1 block w-full p-2 bg-transparent focus:outline-none focus:ring-0 border-b-2 border-white focus:border-white shadow-none]"
                               placeholder="Ваш телефон"
                               pattern="^\+375[0-9]{9}$"
                               title="Введите номер телефона в формате: +375291111111">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="text-accent block text-sm font-medium">Сообщение</label>
                        <textarea id="message" name="message" required rows="4"
                                  class="mt-1 block w-full p-2 bg-transparent focus:outline-none focus:ring-0 border-b-2 border-white focus:border-white shadow-none"
                                  placeholder="Ваше сообщение"></textarea>
                    </div>
                    <p id="contactMessage" class="hidden my-4 text-center text-sm"></p>
                    <div class="flex justify-center">
                        <button type="submit"
                                class="mt-3 text-white font-semibold px-6 py-2 border-2 border-white rounded-full transition duration-300 hover:bg-white hover:text-accent">
                            Отправить
                        </button>
                    </div>
                </form>
                <div class="flex flex-col justify-around">
                    <div class="flex flex-col justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 text-accent mb-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
                        </svg>
                        <p>email@gmail.com</p>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 text-accent mb-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 3.75v4.5m0-4.5h-4.5m4.5 0-6 6m3 12c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                        </svg>
                        <a href="tel:+375291111111">+375-29-1111111</a>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <p class="font-comforter text-3xl">Буду рад видеть Вас <br> в своих соцсетях :)</p>
                        <div class="flex justify-center gap-2 mt-2">
                            <a href="https://www.example.com" target="_blank" rel="noopener noreferrer" class="hover:text-gray-400">
                                <span class="[&>svg]:h-7 [&>svg]:w-7">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        viewBox="0 0 448 512">
                                        <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                    </svg>
                                </span>
                            </a>
                            <a href="https://www.example.com" target="_blank" rel="noopener noreferrer" class="hover:text-gray-400">
                                <span class="[&>svg]:h-7 [&>svg]:w-7 hover:text-gray-400 cursor-pointer">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        viewBox="0 0 448 512">
                                        <path
                                            d="M31.5 63.5C0 95 0 145.7 0 247V265C0 366.3 0 417 31.5 448.5C63 480 113.7 480 215 480H233C334.3 480 385 480 416.5 448.5C448 417 448 366.3 448 265V247C448 145.7 448 95 416.5 63.5C385 32 334.3 32 233 32H215C113.7 32 63 32 31.5 63.5zM75.6 168.3H126.7C128.4 253.8 166.1 290 196 297.4V168.3H244.2V242C273.7 238.8 304.6 205.2 315.1 168.3H363.3C359.3 187.4 351.5 205.6 340.2 221.6C328.9 237.6 314.5 251.1 297.7 261.2C316.4 270.5 332.9 283.6 346.1 299.8C359.4 315.9 369 334.6 374.5 354.7H321.4C316.6 337.3 306.6 321.6 292.9 309.8C279.1 297.9 262.2 290.4 244.2 288.1V354.7H238.4C136.3 354.7 78 284.7 75.6 168.3z" />
                                    </svg>
                                </span>
                            </a>
                            <a href="https://www.example.com" target="_blank" rel="noopener noreferrer" class="hover:text-gray-400">
                                <span class="[&>svg]:h-7 [&>svg]:w-7 hover:text-gray-400 cursor-pointer">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        viewBox="0 0 496 512">
                                        <path
                                            d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    @vite('resources/js/pages/contact.js')
@endpush
