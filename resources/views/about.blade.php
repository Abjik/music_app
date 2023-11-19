
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <link href="{{ asset('css/about.css') }}" rel="stylesheet">

</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/about">О нас</a></li>
                <li><a href="/contact">Контакты</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Добро пожаловать в наше приложение для музыки</h1>
                <p>Мы предлагаем лучший опыт прослушивания музыки онлайн</p>
            </div>
        </section>
        <section class="features">
            <div class="feature">
                <img src="{{ asset('images/feature1.png') }}" alt="Функция 1">
                <h2>Персонализированные рекомендации</h2>
                <p>Получайте рекомендации на основе ваших предпочтений и прослушиваемых треков</p>
            </div>
            <div class="feature">
                <img src="{{ asset('images/feature2.png') }}" alt="Функция 2">
                <h2>Подписка без рекламы</h2>
                <p>Наслаждайтесь музыкой без раздражающих рекламных вставок</p>
            </div>
            <div class="feature">
                <img src="{{ asset('images/feature3.png') }}" alt="Функция 3">
                <h2>Офлайн прослушивание</h2>
                <p>Скачивайте музыку и слушайте ее без доступа к интернету</p>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2022 Наше приложение для музыки. Все права защищены.</p>
    </footer>
</body>
</html>
