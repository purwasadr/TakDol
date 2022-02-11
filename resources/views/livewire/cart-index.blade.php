<div>
    <form method="POST" id="form1" action="/cart/checkout">
        @csrf
    </form>
    <div class="list-group mb-4">
        <div class="list-group-item bg-light">
            <div class="row">
                <div class="col-auto">
                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                </div>
                <div class="col-4">Product</div>
                <div class="col-3">Price</div>
                <div class="col-4">Action</div>
            </div>
        </div>


        @forelse ($carts as $cart_chunk)
            <div class="list-group-item py-3">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <input class="form-check-input" type="checkbox" id="checkbox-store" aria-label="Checkbox">
                    </div>
                    <div class="col-4">
                        <h6 class="mb-0">{{ $cart_chunk[$loop->index]->product->user->store_name }}</h6>
                    </div>
                </div>
            </div>

            @foreach ($cart_chunk as $cart)
                <div class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" name="cart_check[]"
                                value="{{ $cart->product->id }}" aria-label="..." form="form1">
                        </div>
                        <div class="col">
                            {{ $cart->product->title }}
                        </div>
                        <div class="col-auto col-md-3">Rp. {{ number_format($cart->product->price, 0, ',', '.') }}
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm" x-data style="width: 150px">
                                <button class="btn btn-outline-secondary"
                                    wire:click="decreaseCartCount({{ $cart->id }}, {{ $cart->product->stock }})">-</button>
                                <input type="number" class="form-control text-center"
                                    wire:model='carts_chunk.{{ $loop->parent->index }}.{{ $loop->index }}.count'
                                    name="count"
                                    x-on:input="$wire.changeCartCount(@js($cart->id), $el.value, @js($cart->product->stock))"
                                    form="takdol-form-checkout" aria-label="Example text with button addon"
                                    aria-describedby="button-addon1">
                                <button class="btn btn-outline-secondary"
                                    wire:click="increaseCartCount({{ $cart->id }}, {{ $cart->product->stock }})">+</button>
                            </div>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-sm btn-primary" wire:click="deleteCart({{ $cart->id }})"
                                type="button">Delete</button>
                        </div>
                    </div>
                </div>
            @endforeach

        @empty
            <div class="list-group-item d-flex" style="height: 50vh">
                <p class="mx-auto my-auto">Empty</p>
            </div>
        @endforelse

    </div>

    <div class="d-flex">
        <button type="submit" class="btn btn-primary ms-auto" form="form1">Checkout</button>
    </div>
</div>
