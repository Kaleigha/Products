<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <header class="text-center">
        <h1>Liste des produits</h1>
        <a class="btn btn-dark border border-white" href="{{route('login')}}">Connexion</a>
        <a class="btn btn-dark border border-white" href="{{route('register')}}">Nouveau</a>
        @auth
            <a class="btn btn-dark border border-white" href="{{route('dashboard')}}">Dashboard</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="btn btn-dark border border-white" href="{{route('logout')}}" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                    {{ __('Log Out') }}>Deconnexion</a>

            </form>

        @endauth
    </header>
    <main>
        <ul class="container text-center bg-light rounded pt-5 pb-5 shadow-lg">
            <li class="row pt-2" style="background: rgb(216,231,231);
background: linear-gradient(90deg, rgba(216,231,231,1) 0%, rgba(61,163,236,1) 32%, rgba(69,194,252,1) 100%);">
                <p class="col">Nom</p>
                <p class="col">Description</p>
                <p class="col">prix</p>
            </li>
            @foreach ($products as $product)

                <a>
                    <li class="row bg-light-subtle pt-2" style="opacity: .75;">
                        <p class="col">{{$product->name}}</p>
                        <p class="col">{{$product->description}}</p>
                        <p class="col">{{$product->price}} €</p>
                    </li>
                </a>
                <a href="{{route('updateProduct', $product->id)}}" class="btn btn-dark">MAJ</a>
                <a href="{{route('delProduct', $product->id)}}" class="btn btn-dark">DEL</a>
            @endforeach
        </ul>
        <a href="{{route('addProduct')}}" class="btn btn-dark">Ajouter</a>

    </main>
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </footer>
</body>

</html>