@extends('layouts.app') @section('content')
<div class="container">
    <h2>Your Shopping Cart</h2>

    @if ($shoppingCart != null)
        <table class="table mt-5">
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Options</th>
            </tr>
            @foreach ($shoppingCart->cart as $product)
                <tr>
                    <td>{{ $product->information->name }}</td>
                    <td>
                        <form action="{{ route('shoppingCart.update', $product->information->id) }}" method="POST">
                            @csrf
                            <input id="quantityInput" class="quantityInput" name="quantityInput" type="number" min="0" value="{{ $product->quantity }}">
                            <input class="btn btn-primary" type="submit" value="Apply">
                        </form>
                    </td>
                    <td>&euro;{{ $product->price }},-</td>
                    <td>
                        <a class="btn btn-danger" href="{{ route('shoppingCart.remove', $product->information->id) }}">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table> 

        <div class="p-3 border">
            <p class="m-0">
                <a class="btn btn-primary mr-1" href="">Order</a>
                <b>Total products({{ $shoppingCart->getTotalQuantity() }}) - &euro;{{ $shoppingCart->getTotalPrice() }},-</b>
            </p>
        </div>
    @else
        <p class="mt-4 lead">Your shopping cart is empty</p>
    @endif
    
</div>

@endsection