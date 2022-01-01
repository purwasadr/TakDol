@extends('layouts.main')

@section('container')
<div class="row">
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
                <button type="submit" class="btn btn-outline-primary mt-2">Tambahkan ke keranjang</button>
            </form>
            {{-- <a class="btn btn-outline-primary mt-2" href="/cart">Tambahkan ke keranjang</a> --}}
            <a class="btn btn-primary mt-2" href="/buy">Beli Sekarang</a>
        </div>
    </div>
</div>
<h5 class="mt-5">Description</h5>
<p style="white-space: pre-line">{{ $product->description }}</p>
@endsection