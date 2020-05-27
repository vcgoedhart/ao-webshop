@extends('layouts.app') @section('content')

<div class="container">
    <a href="/product/{{$product->category_id}}">
        <i class="back-button text-dark fas fa-arrow-left fa-2x"></i>
    </a>

    <div class="row">
        <div class="col-6">
            <h2 class="display-4">{{ $product->name }}</h2>

            <div class="mt-3">
                <p class="lead">{{ $product->description }}</p>
            </div>

            <div class="mt-3">
                <p class="lead">&euro;{{ $product->price }},-</p>
            </div>

            <div class="mt-3"> 
                <a href="{{ route('product.add', ['id' => $product->id]) }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                    <i class="shopping-cart-icon fas fa-shopping-cart"></i>
                </a>
            </div>
        </div>
        <div class="col-auto">
            <img class="border border-dark rounded" src="{{ asset("img/card-product.png") }}" alt="product sample image">
        </div>
    </div>
</div>
@endsection
