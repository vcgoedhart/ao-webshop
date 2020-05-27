@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Categories</h1>
            <hr>
            
            <div class="grid-container">
                @foreach ($categories as $category)
                    <div class="mb-5 card" style="width: 18rem;">
                        <a href="product/{{ $category->id }}">
                            <img class="card-img-top" src="{{ asset("img/card-category-$category->name.png") }}" alt="category image">
                        </a>
                        <div class="card-body text-center">
                            <h2 class="card-title">{{ $category->name }}</h2>
                            <p class="card-text">{{ $category->description }}</p>
                            {{-- <a href="product/{{ $category->id }}" class="btn btn-primary">Meer...</a> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection