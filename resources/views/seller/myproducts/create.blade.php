@extends('seller.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <h4>Add Product</h4>
</div>
<div class="col-lg-8">
    <form method="post" action="/seller/myproducts" class="mb-5" enctype="multipart/form-data">
        @csrf
        <x-forms.inputs.input class="mb-3" type="text" name="title" id="title" label="Title" :autofocus="true"
            :required="true" />

        <x-forms.inputs.input class="mb-3" type="text" name="slug" id="slug" label="Slug" :required="true" />
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                required value="{{ old('price') }}">
            @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock"
                required value="{{ old('stock') }}">
            @error('stock')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                @if (old('category_id') == $category->id)
                <option value={{ $category->id }} selected>{{ $category->name }}</option>
                @else
                <option value={{ $category->id }}>{{ $category->name }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Product Image</label>
            <div id="div-img-product" class="ratio ratio-1x1 w-25 mb-3 bg-plus-icon">
                <span class="border border-info">
                </span>
                <img id="img-product" class="img-preview img-fluid" style="object-fit: contain">

                <label for="image" class="d-block">
                    <input type="file" class="@error('image') is-invalid @enderror" id="image" name="image"
                        value="{{ old('image') }}" accept="image/*" onchange="previewImage()" hidden>
                </label>
            </div>
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control" aria-label="With textarea"
                rows="10">{{ old('description') }}</textarea>
            @error('description')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
</div>
<script src="/js/seller.js"></script>
@endsection