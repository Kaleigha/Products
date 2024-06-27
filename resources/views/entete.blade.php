<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header class="container text-end"
        style='background-image:url("/Images/business-plan-boutique.webp"); height: 300px;'>
        @guest
            <a class="btn btn-dark border border-white" href="{{route('login')}}">Connexion</a>
            <a class="btn btn-dark border border-white" href="{{route('register')}}">Inscription</a>
        @endguest
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container pt-5 pb-5 row gap-3 mx-auto " style="height:200px; background-color:#d5d5d5;">
            <div class="container col">
                <h3>Adresse</h3>
                <p>3 rue des tulipes</p>
                <p>9500 Albuquerque</p>
            </div>
            <div class="container col">
                <h3>Contact</h3>
                <p>Tel: 00 00 00 00 00</p>
                <p>Réseaux sociaux</p>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </footer>
</body>

</html>