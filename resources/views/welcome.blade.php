@extends('entete')

@section('title', 'Welcome')

@section('content')
<div class="container pt-5 pb-5 row gap-3 mx-auto bg-secondary">
    @foreach ($products as $product)
        <div class="card col shadow-lg" style="width: 25%;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$product->price}} €</li>

            </ul>
            <div class="card-body">
                <a href="{{route('details', $product->id)}}" class="card-link">Détails</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    @endforeach
</div>

@endsection