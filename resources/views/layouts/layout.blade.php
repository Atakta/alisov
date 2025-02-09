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
                <a href="/" class="text-xl font-bold md:text-2xl hover:text-cyan-500">
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



</body>
@stack('scripts')
</html>
