@extends('layouts.app') @section('content')
@php
@endphp
<div class="container"> 
    <div>
        <a href="/category">
            <i class="text-dark fas fa-arrow-left fa-2x"></i>
        </a>
    </div>
    <div class="row">
        <div class="col">
        <h1>{{ $categoryName[0] }}</h1>
            <hr>
            
            <div class="grid-container">
                @foreach ($products as $product)
                    <div class="mb-5 card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset("img/card-product.png") }}" alt="category image">
                        <div class="card-body text-center">
                            <h2 class="card-title ">{{ $product->name }}</h2>
                            <p class="card-text">&euro;{{ $product->price }},-</p>
                            
                            <div>
                                <a href="#" class="btn btn-primary">Kopen</a>
                            <a href="/productView/{{ $product->id }}" class="btn btn-primary">Informatie</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection