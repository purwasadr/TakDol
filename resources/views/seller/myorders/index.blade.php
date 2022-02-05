@extends('seller.layouts.main')

@section('container')

<h4 class="mt-4 mb-4">My Orders</h4>

<div class="list-group mb-4">
    <div class="list-group-item bg-light">
        <div class="row">
            <div class="col-1">
                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
            </div>
            <div class="col-3">Product</div>
            <div class="col-3">Status</div>
            <div class="col-3">Buyer</div>
            <div class="col-2">Action</div>
        </div>
    </div>

    @if ($orders->count())
    @foreach ($orders as $order)
    <div class="list-group-item list-group-item-action">
        <div class="row">
            <div class="col-1"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                    aria-label="...">
            </div>
            <div class="col-3">
                {{ $order->product->title }}
            </div>
            <div class="col-3">{{ $order->status->name }}</div>
            <div class="col-3">{{ $order->buyer->name }}</div>
            <div class="col-2 d-inline">

                <form action="/seller/myorders/edit-status" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                    @switch($order->status->id)
                    @case(1)
                    <input type="hidden" name="status" value="2">
                    <button type="submit" class="btn btn-sm text-decoration-none">Process</button>
                    @break
                    @case(2)
                    <input type="hidden" name="status" value="3">
                    <button type="submit" class="btn btn-sm text-decoration-none">On Ship</button>
                    @default

                    @endswitch
                </form>
                {{-- <a href="" class="text-decoration-none">Process</a> --}}
                <a href="" class="text-decoration-none">Cancel</a>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <div class="list-group-item d-flex" style="height: 50vh">
        <p class="mx-auto my-auto">Empty</p>
    </div>
    @endif
</div>
@endsection