@extends('seller.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 mb-2">
        <h4>My Products</h4>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex">
        <a href="/seller/myproducts/create" class="btn btn-primary mb-3 ms-auto">Add Product</a>
    </div>


    <div class="list-group">
        <div class="list-group-item bg-light">
            <div class="row">
                <div class="col-6">
                    <h6 class="mb-0">Title</h6>
                </div>
                <div class="col-2 d-none d-md-block">
                    <h6 class="mb-0">Stock</h6>
                </div>
                <div class="col-2 d-none d-md-block">
                    <h6 class="mb-0">Price</h6>
                </div>
                {{-- <div class="col-2">
                <h6 class="mb-0"></h6>
            </div> --}}
            </div>
        </div>
        @forelse ($products as $product)
            <div class="list-group-item list-group-item-action">
                <div class="row align-items-center">
                    <a class="position-absolute h-100 w-100" href="/seller/myproducts/{{ $product->slug }}"></a>
                    <div class="col col-md-6 text-truncate">
                        {{ $product->title }}
                    </div>
                    <div class="col-2 d-none d-md-block">
                        {{ $product->stock }}
                    </div>
                    <div class="col-2 d-none d-md-block">
                        Rp. {{ number_format($product->price, 0, ',', '.') }}
                    </div>
                    <div class="ms-auto col-auto d-flex px-0">
                        <div class="dropdown ms-auto">
                            <button class="btn bi bi-three-dots-vertical" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="/seller/myproducts/{{ $product->slug }}/edit">Edit</a>
                                </li>
                                <li>
                                    <form action="/seller/myproducts/{{ $product->slug }}" method="post"
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="dropdown-item" type="submit">Delete</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="list-group-item d-flex" style="height: 50vh">
                <p class="mx-auto my-auto">Empty</p>
            </div>
        @endforelse
    </div>
@endsection
