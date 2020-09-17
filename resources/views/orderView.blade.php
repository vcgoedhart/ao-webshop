@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Ordered products</h2>
            <hr>
            
            <div class="grid-container">
                @foreach ($products as $product)
                    <div class="mb-5 card" style="width: 18rem;">
                        <img class="card-img-top" src="{{  asset("img/card-product.png") }}" alt="category image">
                        <div class="card-body text-center">
                            <h2 class="card-title">{{ $product->name }}</h2>
                            <hr>
                            <h3>
                                &euro;{{ $product->pivot->price }}, ({{ $product->pivot->quantity }})
                            </h3>
                            <hr>
                            <p class="card-text">{{ $product->description }} </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection