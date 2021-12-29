@extends('layouts.main')

@section('container')
<div class="row">
    <div class="col-md-4 col-lg-3">
        @include('myaccount.partials.sidebar')
    </div>
    <div class="col-md-8 col-lg-9">
        @yield('container2')
    </div>
</div>
@endsection