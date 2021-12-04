@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-7 mb-3">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search..." name="search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-4 mb-3">
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
                <img src="{{ asset('storage/img_product/mikasa_ackerman_shingeki_no_kyojin_swords_guns_102914_1920x1080.jpg') }}"
                    class="card-img-top rat" style="object-fit: cover;" alt="Mikasa">
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p>Rp. {{ $product->price }}</p>
                <a href="#" class="stretched-link"></a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection