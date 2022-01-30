@extends('layouts.main')

@section('container')
<h4 class="mb-4">Cart</h4>
<form method="POST" id="form1" action="/cart/checkout">
    @csrf
</form>
<div class="list-group mb-4">
    <div class="list-group-item bg-light">
        <div class="row">
            <div class="col-1"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                    aria-label="...">
            </div>
            <div class="col-4">Product</div>
            <div class="col-3">Price</div>
            <div class="col-4">Action</div>
        </div>
    </div>


    @forelse ($carts as $cart_chunk)
    <div class="list-group-item list-group-item-action">
        <div class="row align-items-center">
            <div class="col-4">
                {{ $cart_chunk[$loop->index]->product->user->store_name }}
            </div>
        </div>
    </div>

    @foreach ($cart_chunk as $cart)
    <div class="list-group-item list-group-item-action">
        <div class="row align-items-center">
            <div class="col-1">
                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" name="cart_check[]"
                    value="{{ $cart->product->id }}" aria-label="..." form="form1">
            </div>
            <div class="col-4">
                {{ $cart->product->title }}
            </div>
            <div class="col-3">Rp. {{ number_format($cart->product->price, 0, ",", ".") }}</div>
            <div class="col-4">
                <form action="/cart/{{ $cart->id }}" method="POST">
                    @method('delete')
                    @csrf
                    <button class="btn btn-sm btn-primary" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    @empty
    <div class="list-group-item d-flex" style="height: 50vh">
        <p class="mx-auto my-auto">Empty</p>
    </div>
    @endforelse

</div>

<div class="d-flex">
    <button type="submit" class="btn btn-primary ms-auto" form="form1">Checkout</button>
</div>

@endsection