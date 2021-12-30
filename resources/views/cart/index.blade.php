@extends('layouts.main')

@section('container')
<h4 class="mb-4">Cart</h4>
<form method="POST" action="/cart/checkout">
    @csrf
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

        @if ($carts->count())
        @foreach ($carts as $cart)

        <div class="list-group-item list-group-item-action">
            <div class="row">
                <div class="col-1">
                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel" name="cart_check[]"
                        value="{{ $cart->product->id }}" aria-label="...">
                </div>
                <div class="col-4">
                    {{ $cart->product->title }}
                </div>
                <div class="col-3">Rp. {{ number_format($cart->product->price, 0, ",", ".") }}</div>
                <div class="col-4">Delete</div>
            </div>
        </div>

        @endforeach
        @else
        <div class="list-group-item d-flex" style="height: 50vh">
            <p class="mx-auto my-auto">Empty</p>
        </div>
        @endif
    </div>

    <div class="d-flex">
        <button type="submit" class="btn btn-primary ms-auto">Checkout</button>
    </div>
</form>
@endsection