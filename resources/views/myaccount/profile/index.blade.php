@extends('myaccount.layouts.main')

@section('container2')
<div class="row">
    <div class="col-md-9 mb-3">
        <h3>Profile</h3>
    </div>
</div>

<div class="row">
    <form method="post" action="/myaccount/profile" class="col-md-9 mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3 d-flex flex-column align-items-center">
            <input type="hidden" name="oldImage" value="{{ $user->profile_img }}">
            <div class="col-6 col-md-3 mb-3">
                <div class="ratio ratio-1x1">
                    <img class="img-preview img-fluid" style="object-fit: contain;" @if($user->profile_img) src="{{
                    asset('storage/' . $user->profile_img) }}" @else
                    src="/svg/person-circle.svg" @endif >
                </div>
            </div>

            <label for="image" class="btn btn-primary d-block" style="width: fit-content">
                <input type="file" class="@error('profile_img') is-invalid @enderror" id="image" name="profile_img"
                    value="{{ old('profile_img') }}" onchange="previewImage()" hidden>Choose
                Picture</label>

            @error('profile_img')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                name="username" required autofocus value="{{ old('username', $user->username) }}">
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required
                value="{{ old('name', $user->name) }}">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="store_name" class="form-label">Store Name</label>
            <input type="text" class="form-control @error('store_name') is-invalid @enderror" id="store_name"
                name="store_name" required value="{{ old('store_name', $user->store_name) }}">
            @error('store_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="d-flex">
            <button type="submit" class="btn btn-primary ms-auto">Save</button>
        </div>
    </form>
</div>
<script src="/js/seller.js"></script>
@endsection