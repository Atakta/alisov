@extends('layouts.layout')

@section('title', 'Услуги')

@section('main_content')

    <div class="text-center">
        <h2 class="mt-10 text-4xl font-bold text-white sm:text-5xl">
            Мои услуги
        </h2>
    </div>
    <section class="container mx-auto py-12">
        <!-- Свадебные фотосессии -->
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="my-8 font-bold text-white sm:text-4xl">
                Свадебные фотосессии
            </h1>
            <div class="flex gap-8">
            <p class="flex-1 mt-4 mb-6 text-xl bg-[#0a0a0a] text-gray-400">
                    Описание свадебных фотосессий. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <img class="flex-1 size-full rounded-l-full" src="{{ asset('img/wedding.jpg') }}" alt="">
            </div>

            <h2 class="my-10 text-center font-bold text-white sm:text-3xl">
                Выбрать подходящий тариф
            </h2>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Free Plan -->
                <div class="flex flex-col bg-gray-800 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-white">Базовый</h3>
                        <p class="mt-4 text-gray-400">Описение тарифа 1.</p>
                    </div>
                    <div class="mb-8">
                        <span class="text-5xl font-extrabold text-white">100 б.р.</span>
                    </div>
                    <ul class="flex-grow mb-8 space-y-4 text-gray-400">
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 1</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 2</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 3</span>
                        </li>
                    </ul>
                    <a href="#" class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600">
                        Заказать
                    </a>
                </div>

                <!-- Starter Plan -->
                <div class="flex flex-col bg-gray-800 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-white">Стандартный</h3>
                        <p class="mt-4 text-gray-400">Описание тарифа 2.</p>
                    </div>
                    <div class="mb-8">
                        <span class="text-5xl font-extrabold text-white">200 б.р.</span>
                    </div>
                    <ul class="flex-grow mb-8 space-y-4 text-gray-400">
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 1</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 2</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 3</span>
                        </li>
                    </ul>
                    <a href="#" class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600">
                        Заказать
                    </a>
                </div>

                <!-- Pro Plan -->
                <div class="flex flex-col bg-gray-800 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-white">Премиум</h3>
                        <p class="mt-4 text-gray-400">Описание тарифа 3.</p>
                    </div>
                    <div class="mb-8">
                        <span class="text-5xl font-extrabold text-white">300 б.р.</span>
                    </div>
                    <ul class="flex-grow mb-8 space-y-4 text-gray-400">
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 1</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 2</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 3</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 4</span>
                        </li>
                    </ul>
                    <a href="#" class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600">
                        Заказать
                    </a>
                </div>
            </div>
        </div>
        <!-- Портретные фотосессии -->
        <div class="mx-auto mt-20 px-4 sm:px-6 lg:px-8">
            <h1 class="mb-8 font-bold text-white sm:text-4xl">
                Портретные фотосессии
            </h1>
            <div class="flex gap-8">
                <p class="flex-1 mt-4 mb-6 text-xl bg-[#0a0a0a] text-gray-400">
                    Описание свадебных фотосессий. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <img class="flex-1 size-full rounded-l-full" src="{{ asset('img/portret.jpg') }}" alt="">
            </div>
            <h2 class="my-10 text-center font-bold text-white sm:text-3xl">
                Выбрать подходящий тариф
            </h2>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Free Plan -->
                <div class="flex flex-col bg-gray-800 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-white">Базовый</h3>
                        <p class="mt-4 text-gray-400">Описение тарифа 1.</p>
                    </div>
                    <div class="mb-8">
                        <span class="text-5xl font-extrabold text-white">100 б.р.</span>
                    </div>
                    <ul class="flex-grow mb-8 space-y-4 text-gray-400">
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 1</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 2</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 3</span>
                        </li>
                    </ul>
                    <a href="#" class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600">
                        Заказать
                    </a>
                </div>

                <!-- Starter Plan -->
                <div class="flex flex-col bg-gray-800 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-white">Стандартный</h3>
                        <p class="mt-4 text-gray-400">Описание тарифа 2.</p>
                    </div>
                    <div class="mb-8">
                        <span class="text-5xl font-extrabold text-white">200 б.р.</span>
                    </div>
                    <ul class="flex-grow mb-8 space-y-4 text-gray-400">
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 1</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 2</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 3</span>
                        </li>
                    </ul>
                    <a href="#" class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600">
                        Заказать
                    </a>
                </div>

                <!-- Pro Plan -->
                <div class="flex flex-col bg-gray-800 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-white">Премиум</h3>
                        <p class="mt-4 text-gray-400">Описание тарифа 3.</p>
                    </div>
                    <div class="mb-8">
                        <span class="text-5xl font-extrabold text-white">300 б.р.</span>
                    </div>
                    <ul class="flex-grow mb-8 space-y-4 text-gray-400">
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 1</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 2</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 3</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 4</span>
                        </li>
                    </ul>
                    <a href="#" class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600">
                        Заказать
                    </a>
                </div>
            </div>
        </div>

        <!-- Love story фотосессии -->
        <div class="mx-auto mt-20 px-4 sm:px-6 lg:px-8">
            <h1 class="mb-8 font-bold text-white sm:text-4xl">
                Love story фотосессии
            </h1>
            <div class="flex gap-8">
                <p class="flex-1 mt-4 mb-6 text-xl bg-[#0a0a0a] text-gray-400">
                    Описание свадебных фотосессий. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <img class="flex-1 size-full rounded-l-full" src="{{ asset('img/lovestory.jpg') }}" alt="">
            </div>
            <h2 class="my-10 text-center font-bold text-white sm:text-3xl">
                Выбрать подходящий тариф
            </h2>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Free Plan -->
                <div class="flex flex-col bg-gray-800 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-white">Базовый</h3>
                        <p class="mt-4 text-gray-400">Описение тарифа 1.</p>
                    </div>
                    <div class="mb-8">
                        <span class="text-5xl font-extrabold text-white">100 б.р.</span>
                    </div>
                    <ul class="flex-grow mb-8 space-y-4 text-gray-400">
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 1</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 2</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 3</span>
                        </li>
                    </ul>
                    <a href="#" class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600">
                        Заказать
                    </a>
                </div>

                <!-- Starter Plan -->
                <div class="flex flex-col bg-gray-800 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-white">Стандартный</h3>
                        <p class="mt-4 text-gray-400">Описание тарифа 2.</p>
                    </div>
                    <div class="mb-8">
                        <span class="text-5xl font-extrabold text-white">200 б.р.</span>
                    </div>
                    <ul class="flex-grow mb-8 space-y-4 text-gray-400">
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 1</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 2</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 3</span>
                        </li>
                    </ul>
                    <a href="#" class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600">
                        Заказать
                    </a>
                </div>

                <!-- Pro Plan -->
                <div class="flex flex-col bg-gray-800 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-white">Премиум</h3>
                        <p class="mt-4 text-gray-400">Описание тарифа 3.</p>
                    </div>
                    <div class="mb-8">
                        <span class="text-5xl font-extrabold text-white">300 б.р.</span>
                    </div>
                    <ul class="flex-grow mb-8 space-y-4 text-gray-400">
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 1</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 2</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 3</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Что входит 4</span>
                        </li>
                    </ul>
                    <a href="#" class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600">
                        Заказать
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection