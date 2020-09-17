@extends('layouts.app') @section('content')
<div class="container">
    <h2>Your Orders</h2>

    @if ($orders != null)
        <table class="table mt-5">
            <tr>
                <th>Order ID</th>
                <th>Total Price</th>
                <th>Options</th>
            </tr>
            @foreach ($orders as $order)
                <tr class="rowHover">
                    <td>{{ $order->id }}</td>
                    <td>&euro;{{ $order->total_price }},-</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/orderView/{{ $order->id }}">
                            ...
                        </a>
                    </td>
                </tr>
            @endforeach
        </table> 
    @else
        <p class="mt-4 lead">No orders</p>
    @endif
    
</div>

@endsection