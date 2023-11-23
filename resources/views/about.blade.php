
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
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Welcome to our music app!</h1>
                <p style="font-size: large">Our app offers you a unique music listening experience. 
                    You can get personalized recommendations, listen to music without ads 
                    and even download tracks for offline listening.</p>
                <a href="{{ route('login') }}" class="button-27">Sign in</a>
            </div>
        </section>
        <section class="features">
            <div class="feature">
                <img src="{{ asset('images/feature1.png') }}" alt="Функция 1">
                <h2>Personalized recommendations</h2>
                <p>Get recommendations based on your preferences and the tracks you listen to</p>
            </div>
            <div class="feature">
                <img src="{{ asset('images/feature2.png') }}" alt="Функция 2">
                <h2>Subscription without advertising</h2>
                <p>Enjoy your music without annoying ad inserts</p>
            </div>
            <div class="feature">
                <img src="{{ asset('images/feature3.png') }}" alt="Функция 3">
                <h2>Offline listening</h2>
                <p>Download music and listen to it without internet access</p>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Our music app. All rights reserved.</p>
    </footer>
    <script src="{{ asset('js/ForAboutImg.js') }}"></script>
</body>
</html>
