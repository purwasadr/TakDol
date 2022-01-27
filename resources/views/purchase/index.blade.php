@extends('layouts.main')

@section('container')

<h4 class="mb-4">My Purchase</h4>

<ul class="nav nav-tabs mb-3">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">All</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">To Pay</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">To Ship</a>
    </li>
</ul>

@foreach ($orders as $order)
<div class="title d-inline">
    <small>{{ $order->created_at->format('d M Y') }}</small>
    <small class="bg-success rounded-pill px-2 py-1 text-light text-small">{{ $order->status->name }}</small>
</div>
<div class="row mb-2 justify-content-between">
    <div class="col-3">
        <p>{{ $order->product->title }}</p>

    </div>
    <div class="col-auto d-flex flex-column align-items-center">
        <small class="mb-2">Price</small>
        <h6>Rp {{ number_format($order->product->price, 0, ",", ".") }}</h6>
    </div>
</div>
<div class="row justify-content-end">
    <div class="col-auto d-inline-flex">
        <a class="my-auto" href="#">Show detail</a>
    </div>
    <div class="col-auto">
        <button class="btn btn-primary btn-sm">Buy again</button>
    </div>
</div>
@endforeach


@endsection