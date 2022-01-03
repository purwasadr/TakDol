@extends('seller.layouts.main')

@section('container')

<h2 class="mt-4 mb-4">My Orders</h2>

<div class="list-group mb-4">
    <div class="list-group-item bg-light">
        <div class="row">
            <div class="col-1">
                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
            </div>
            <div class="col-4">Product</div>
            <div class="col-3">Price</div>
            <div class="col-3">Buyer</div>
            <div class="col-1">Action</div>
        </div>
    </div>

    @if ($orders->count())
    @foreach ($orders as $order)
    <div class="list-group-item list-group-item-action">
        <div class="row">
            <div class="col-1"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                    aria-label="...">
            </div>
            <div class="col-4">
                {{ $order->product->title }}
            </div>
            <div class="col-3">Rp. {{ number_format($order->product->price, 0, ",", ".") }}</div>
            <div class="col-3">{{ $order->buyer->name }}</div>
            <div class="col-1">Delete</div>
        </div>
    </div>
    @endforeach
    @else
    <div class="list-group-item d-flex" style="height: 50vh">
        <p class="mx-auto my-auto">Empty</p>
    </div>
    @endif
</div>
@endsection