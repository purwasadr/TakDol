@extends('seller.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Products</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="row">
    <div class="col-1">
        #
    </div>
    <div class="col-5">
        Title
    </div>
    <div class="col-2">
        Category
    </div>
</div>
@foreach ($products as $product)
<div class="row align-items-center py-2 position-relative item-hover">
    <a class="position-absolute h-100 col-12" href="/show"></a>
    <div class="col-1">
        {{ $loop->iteration }}
    </div>
    <div class="col-5">
        {{ $product->title }}
    </div>
    <div class="col-2 prewrap">
        {{ $product->category->name }}
    </div>
    <div class="col-3">
        <div class="dropdown">
            <button class="btn bi bi-three-dots-vertical" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="/seller/myproducts/{{ $product->slug }}/edit">Edit</a>
                </li>
                <li><a class="dropdown-item" href="#">Delete</a></li>
            </ul>
        </div>
    </div>
</div>
@endforeach
@endsection