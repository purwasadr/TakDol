@extends('layouts.main')

@section('container')
<div class="row mb-4">
    <div class="col-6">
        <img class="rounded-circle d-inline" src="{{ asset('storage/') }}" height="78px" width="78px">
        <div class="ms-4 d-inline">
            <a href="" class="text-decoration-none text-body">
                <h5 class="d-inline">Dark side (Fake)</h5>
            </a>
        </div>
    </div>
</div>

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Product</a>
    </li>
</ul>
@endsection