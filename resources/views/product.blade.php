@extends('layouts.app') @section('content')
<div class="container"> 
    <div>
        <a href="/category">
            <i class="back-button text-dark fas fa-arrow-left fa-2x"></i>
        </a>
    </div>
    <div class="row">
        <div class="col">
        <h2>{{ $categoryName[0] }}</h2>
            <hr>
            
            <div class="grid-container">
                @foreach ($products as $product)
                    <div class="mb-5 card" style="width: 18rem;">
                        <a href="/productView/{{ $product->id }}">
                            <img class="card-img-top" src="{{ asset("img/card-product.png") }}" alt="product sample image">
                        </a>
                        
                        <div class="card-body text-center">
                            <h2 class="card-title ">{{ $product->name }}</h2>
                            <p class="card-text">&euro;{{ $product->price }},-</p>
                            <a href="{{ route('product.add', ['id' => $product->id]) }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i>
                                <i class="shopping-cart-icon fas fa-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection