@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-7 mb-5">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search..." name="search">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-4 mb-4">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Gadget</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sport</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Fashion</a>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    @foreach ($products as $product)
    <div class="col-md-2 mb-3">
        <div class="card h-100">
            <div class="ratio ratio-1x1">
                <img src="{{ asset('storage' . $product->image) }}" class="card-img-top rat" style="object-fit: cover;"
                    alt="{{ $product->image }}">
            </div>
            <div class="card-body">
                <small class="card-title">{{ $product->title }}</small>
                <h6 class="mb-0">Rp. {{ $product->price }}</h6>
                <a href="#" class="stretched-link"></a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection