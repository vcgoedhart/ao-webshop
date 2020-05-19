@extends('layouts.app') @section('content')

<div class="container"> 
    <div>
        <a href="/product/{{$product->category_id}}">
            <i class="text-dark fas fa-arrow-left fa-2x"></i>
        </a>
    </div>

    <h2 class="display-4">{{ $product->name }}</h2>

    <div class="mt-3">
        <p class="lead">{{ $product->description }}</p>
    </div>

    <div class="mt-3">
        <p class="lead">&euro;{{ $product->price }},-</p>
    </div>
</div>
@endsection