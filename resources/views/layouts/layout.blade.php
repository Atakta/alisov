<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&family=Rubik+Dirt&family=Comforter+Brush&display=swap"
    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="Bg text-primary">
<header class="bg-transparent relative">
    <nav class="container px-6 py-3">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <a href="/">
                    <img src="{{ asset('img/logo.png') }}" alt="Логотип" class="max-w-12">
                </a>
            </div>
            <ul class="flex items-center space-x-12 tracking-widest uppercase text-xs">
                <li>
                    <a href="/" class="inline-block hover:text-secondary border-b-2 border-transparent hover:border-[#36DDA3] transition-colors duration-300 py-2">
                        Главная
                    </a>
                </li>
                <li>
                    <a href="/services" class="inline-block hover:text-secondary border-b-2 border-transparent hover:border-[#36DDA3] transition-colors duration-300 py-2">
                        Услуги
                    </a>
                </li>
                <li>
                    <a href="/portfolio" class="inline-block hover:text-secondary border-b-2 border-transparent hover:border-[#36DDA3] transition-colors duration-300 py-2">
                        Портфолио
                    </a>
                </li>
                <li>
                    <a href="/review" class="inline-block hover:text-secondary border-b-2 border-transparent hover:border-[#36DDA3] transition-colors duration-300 py-2">
                        Отзывы
                    </a>
                </li>
                <li>
                    <a href="/contacts" class="inline-block hover:text-secondary border-b-2 border-transparent hover:border-[#36DDA3] transition-colors duration-300 py-2">
                        Контакты
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div>
    @yield('main_content')
</div>

<footer>
    <div class="flex justify-center py-8">
        <div class="flex flex-col">
            <p>Copyright &copy; 2025 Алисов Дмитрий</p>
            <div class="flex justify-center gap-2 mt-5">
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
</footer>


</body>
@stack('scripts')
</html>
