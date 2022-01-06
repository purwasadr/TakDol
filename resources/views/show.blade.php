@extends('layouts.main')

@section('container')
<div class="row mb-5">
    <div class="col-md-4">
        <div class="ratio ratio-1x1">
            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" style="object-fit: cover;"
                alt="{{ $product->image }}">
        </div>
    </div>
    <div class="col-md-8">
        <h4>{{ $product->title }}</h4>
        <h3 class="mt-2">Rp. {{ number_format($product->price, 0, ",", ".") }}</h3>

        <div class="mt-2 d-inline-block mb-2">
            <form action="/show/{{ $product->slug }}/checkout" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-primary mt-2">Add to cart</button>
            </form>
            {{-- <a class="btn btn-outline-primary mt-2" href="/cart">Tambahkan ke keranjang</a> --}}
            <form action="/show/{{ $product->slug }}/buy-now" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-primary mt-2">Buy now</button>
            </form>
        </div>
    </div>
</div>
<div class="d-flex mb-5">
    <img class="rounded-circle" src="{{ asset('storage/' . $product->user->profile_img) }}" height="78px" width="78px">
    <div class="ms-4 d-block">
        <a href="" class="text-decoration-none text-body">
            <h5 class="">{{ $product->user->store_name }}</h5>
        </a>
    </div>
</div>
<h5>Description</h5>
<p style="white-space: pre-line">{{ $product->description }}</p>
@endsection