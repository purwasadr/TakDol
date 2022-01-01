@extends('layouts.main')

@section('container')
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
        <div class="card h-100">
            <div class="ratio ratio-1x1">
                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" style="object-fit: cover;"
                    alt="{{ $product->image }}">
            </div>
            <div class="card-body">
                <p class="card-title small"
                    style="line-height: 1.45;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                    {{ $product->title }}</p>
                <h6 class="mb-0">Rp. {{number_format($product->price, 0, ",", ".")}}</h6>
                <a href="/show/{{ $product->slug }}" class="stretched-link"></a>
            </div>

        </div>
    </div>
    @endforeach
</div>
@endsection