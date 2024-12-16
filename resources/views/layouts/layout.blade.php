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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="Bg">
<header class="bg-transparent relative z-10">
    <nav class="container px-6 py-3">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <a href="/" class="text-white text-xl font-bold md:text-2xl hover:text-cyan-500">
                    Alisov
                </a>
            </div>
            <div class="hidden md:flex items-center space-x-12 tracking-widest uppercase">
                <a href="/" class="navbar-item text-white hover:text-cyan-500">Главная</a>
                <a href="/services" class="navbar-item text-white hover:text-cyan-500">Услуги</a>
                <a href="/portfolio" class="navbar-item text-white hover:text-cyan-500">Портфолио</a>
                <a href="/review" class="navbar-item text-white hover:text-cyan-500">Отзывы</a>
            </div>
        </div>
    </nav>
</header>

<div>
    @yield('main_content')
</div>



</body>
@stack('scripts')
</html>
