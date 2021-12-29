@extends('myaccount.layouts.main')

@section('container2')


@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="row">
    <form action="/myaccount/change-password" method="post" class="col-md-9">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="old_password" class="form-label">Old Password</label>
            <input type="password" class="form-control @error('old_password') is-invalid @enderror" id="old_password"
                name="old_password" required autofocus>
            @error('old_password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="new_password" class="form-label">New Password</label>
            <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="new_password"
                name="new_password" required>
            @error('new_password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control @error('confirm_password') is-invalid @enderror"
                id="confirm_password" name="confirm_password" required>
            @error('confirm_password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Change Password</button>
    </form>
</div>
@endsection