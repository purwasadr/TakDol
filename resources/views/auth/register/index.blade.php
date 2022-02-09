@extends('auth.layouts.main')

@section('container')

    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-lg-5">
            <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
            <form action="/register" method="post">
                @csrf
                <x-forms.inputs.input class="mb-2" type="text" name="name" id="name" label="Name" :autofocus="true"
                    :required="true" />
                <x-forms.inputs.input class="mb-2" type="text" name="username" id="username" label="Username"
                    :required="true" />
                <x-forms.inputs.input class="mb-2" type="email" name="email" id="email" label="Email"
                    :required="true" />
                <x-forms.inputs.input class="mb-4" type="password" name="password" id="password" label="Password"
                    :required="true" />
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                <small class="d-block text-center mt-3">Already Registered? <a href="/login"
                        class="text-decoration-none">Login</a></small>
            </form>
        </div>
    </div>

@endsection
