<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Document')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header style="display: flex;">
        <img src="img/logo.png" alt="logo" class="size-[100px] object-contain">
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/array">Товары</a></li>
            <li><a href="/reports">Отчёты</a></li>
        </ul>
    </header>
    @yield('content', View::make('dummy'))
    <footer>
        <p>© 2024</p>
        <p>Килина Ирина Викторовна</p>
    </footer>
</body>
</html>