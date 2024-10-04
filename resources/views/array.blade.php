<!DOCTYPE html>
<!-- <html lang="en"> -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header style="display: flex;">
        <img src="img/logo.png" alt="logo" style="width: 100px; height: 100px; object-fit: contain;">
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/array">Массивы</a></li>
        </ul>
    </header>
    <div class='content'>
        <div style="display:flex; flex-wrap: wrap;">
            @foreach ($array as $product)
                <div style="width: 100px; height: 130px; padding: 10px; margin: 10px; display: flex; flex-direction: column; border: 1px solid black;">
                    <img src="{{$product['path']}}" alt="{{$product['path']}}" style="width: 80px; height: 80px; object-fit: contain; align-self: center;">
                    <p style="font-size: 1rem; margin: 0.25em;">{{$product['title']}}</p>
                    <p style="font-size: 1rem; margin: 0.25em;">{{$product['price']}} ₽</p>
                </div>
            @endforeach
        </div>
    </div>
    <footer>
        <p>© 2024</p>
        <p>Килина Ирина Викторовна</p>
    </footer>
</body>
</html>