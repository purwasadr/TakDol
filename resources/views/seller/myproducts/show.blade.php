@extends('seller.layouts.main')

@section('container')
<div class="row mt-3 mb-4">
    <div class="col-md-3">
        <div class="ratio ratio-1x1">
            <img src="{{ asset('storage/' . $product->image) }}" class="rounded" style="object-fit: cover;"
                alt="{{ $product->image }}">
        </div>
    </div>
</div>

<div class="mb-3">
    <h6 class="mb-1"><b>Product name</b></h6>
    <p>{{ $product->title }}</p>
</div>
<div class="mb-3">
    <h6 class="mb-1"><b>Price</b></h6>
    <p>Rp. {{ number_format($product->price, 0, ",", ".") }}</p>
</div>
<div class="mb-3">
    <h6 class="mb-1"><b>Stock</b></h6>
    <p>{{ $product->stock }}</p>
</div>
<div class="mb-3">
    <h6 class="mb-1"><b>Description</b></h6>
    <p style="white-space: pre-line">{{ $product->description }}</p>
</div>

@endsection