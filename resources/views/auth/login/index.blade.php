@extends('auth.layouts.main')

@section('container')
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-4">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show"
                    role="alert">
                    {{ session('success') }}
                    <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show"
                    role="alert">
                    {{ session('loginError') }}
                    <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin">
                <h3 class="mb-4 text-center">Login</h3>
                <form action="/login"
                    method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label"
                            for="email">Email</label>
                        <input type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            id="email"
                            autofocus
                            required
                            value="{{ old('email') }}">

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label"
                            for="password">Password</label>
                        <input type="password"
                            class="form-control"
                            name="password"
                            id="password"
                            required>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"
                            name="remember_me"
                            type="checkbox"
                            value="true"
                            id="remember_me"
                            @if (old('remember_me')) checked @endif>
                        <label class="form-check-label"
                            for="remember_me">
                            Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg mt-3 mb-4 btn-primary"
                        type="submit">Login</button>
                    <small class="d-block text-center">Not Registered? <a class="text-decoration-none"
                            href="/register">Register</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection
