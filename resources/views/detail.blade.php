@extends('entete')

@section('title', 'Détails')

@section('content')
<div class="container pt-5 pb-5 mx-auto bg-secondary text-center ">
    <h1>{{$product->name}}</h1>
    <img src="..." class="card-img-top" alt="...">
    <div class="container pt-5 pb-3 mx-auto text-start rounded shadow-lg" style="background-color:#d5d5d5;">
        <h2>Description</h2>
        <p>{{$product->description}}</p>
        <div class="container pt-1  mx-auto text-center rounded" style="background-color:#b4b4b4;">
            <h2>Prix</h2>
            <p>{{$product->price}} €</p>
        </div>
    </div>
    <a class="btn btn-dark border border-white mt-5" href="{{route('index')}}">Retour</a>

</div>
@endsection