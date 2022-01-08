@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
            <form action="/login" method="post">
                @csrf
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-2">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                        required>
                    <label for="password">Password</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="remember_me" type="checkbox" value="true" id="remember_me"
                        @if(old('remember_me')) checked @endif>
                    <label class="form-check-label" for="remember_me">
                        Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg mt-3 btn-primary" type="submit">Login</button>
                <small class="d-block text-center mt-3">Not Registered? <a class="text-decoration-none"
                        href="/register">Register</a></small>
            </form>
        </main>
    </div>
</div>

@endsection