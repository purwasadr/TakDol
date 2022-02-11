<div>
    @if (session()->has('error'))
        <div class="alert alert-info alert-dismissible fade show"
            role="alert">
            {{ session('error') }}
            <button type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"></button>
        </div>
    @endif

    <div class="row mb-5">
        <div class="col-md-4 mb-2 mb-md-0">
            <div class="ratio ratio-1x1">
                <img src="{{ asset('storage/' . $product->image) }}"
                    class="card-img-top"
                    style="object-fit: cover;"
                    alt="{{ $product->image }}">
            </div>
        </div>
        <div x-data="inputCounter(@js($product->stock))"
            class="col-md-8 mt-2 mt-md-0">
            <h4>{{ $product->title }}</h4>
            <h3 class="mt-2 mb-4">Rp. {{ number_format($product->price, 0, ',', '.') }}</h3>
            <div class="d-flex align-items-center mb-4">
                <div class="input-group input-group-sm"
                    style="width: 150px">
                    <button class="btn btn-outline-secondary"
                        type="button"
                        @click="decrease">-</button>
                    <input type="number"
                        class="form-control text-center"
                        x-model="count"
                        x-on:change='validateCounter'
                        name="count"
                        form="takdol-form-buy-now"
                        aria-label=""
                        min="1"
                        max="{{ $product->stock }}"
                        aria-describedby="">
                    <button class="btn btn-outline-secondary"
                        type="button"
                        @click="increase">+</button>
                </div>
                <small class="ms-3 text-muted">Tersisa {{ $product->stock }}</small>
            </div>
            <div class="d-inline-block mb-2">
                <button class="btn btn-outline-primary mt-2"
                    type="button"
                    x-on:click="$wire.addToCart(@js($product->id), count)">Add
                    to cart</button>
                <form action="/show/{{ $product->slug }}/buy-now"
                    id="takdol-form-buy-now"
                    method="POST"
                    class="d-inline">
                    @csrf
                    <button type="submit"
                        class="btn btn-primary mt-2">Buy now</button>
                </form>
            </div>
        </div>
    </div>
    <div class="d-flex mb-5">
        <img class="rounded-circle"
            src="{{ asset('storage/' . $product->user->profile_img) }}"
            height="78px"
            width="78px">
        <div class="ms-4 d-block">
            <a href=""
                class="text-decoration-none text-body">
                <h5 class="">{{ $product->user->store_name }}</h5>
            </a>
        </div>
    </div>
    <h5>Description</h5>
    <p style="white-space: pre-line">{{ $product->description }}</p>

</div>
