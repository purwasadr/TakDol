@extends('layouts.main')

@section('container')
<div class="row">
    <div class="col-md-5">
        <img src="{{  asset('storage/' . $product->image) }}" alt="">
    </div>
    <div class="col-md-12">
        <h2>{{ $product->title }}</h2>
    </div>
</div>
@endsection