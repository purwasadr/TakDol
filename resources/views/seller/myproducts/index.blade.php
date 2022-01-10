@extends('seller.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3">
    <h3>My Products</h3>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
</div>
@endif

<a href="/seller/myproducts/create" class="btn btn-primary mb-3">Add Product</a>

<div class="list-group">
    <div class="list-group-item bg-light">
        <div class="row">
            <div class="col-6">
                <h6 class="mb-0">Title</h6>
            </div>
            <div class="col-2">
                <h6 class="mb-0">Stock</h6>
            </div>
            <div class="col-2 d-none d-sm-block">
                <h6 class="mb-0">Price</h6>
            </div>
            <div class="col-2">
                <h6 class="mb-0"></h6>
            </div>
        </div>
    </div>
    @foreach ($products as $product)
    <div class="list-group-item list-group-item-action">
        <div class="row align-items-center">
            <a class="position-absolute h-100 w-100" href="/seller/myproducts/{{ $product->slug }}"></a>
            <div class="col-6">
                {{ $product->title }}
            </div>
            <div class="col-2 d-none d-sm-block">
                2 (Fake)
            </div>
            <div class="col-2 d-none d-sm-block">
                Rp. {{ number_format($product->price, 0, ",", ".") }}
            </div>
            <div class="col-2 d-flex pe-0">
                <div class="dropdown ms-auto">
                    <button class="btn bi bi-three-dots-vertical" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="/seller/myproducts/{{ $product->slug }}/edit">Edit</a>
                        </li>
                        <li>
                            <form action="/seller/myproducts/{{ $product->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="dropdown-item" type="submit">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection