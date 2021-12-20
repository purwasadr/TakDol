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
            @if (!request('category'))
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">All</a>
            </li>
            @endif
            @foreach ($categories as $category)
            @if (!request('category'))
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">{{ $category->name }}</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">{{ $category->name }}</a>
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</div>
<div class="row">
    @foreach ($products as $product)
    <div class="col-md-2 mb-3">
        <div class="card">
            <div class="ratio ratio-1x1">
                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" style="object-fit: cover;"
                    alt="{{ $product->image }}">
            </div>
            <div class="card-body">
                <small class="card-title">{{ $product->title }}</small>
                <h6 class="mb-0">Rp. {{number_format($product->price, 0, ",", ".")}}</h6>
                <a href="/show/{{ $product->slug }}" class="stretched-link"></a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection