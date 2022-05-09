@extends('layouts.main')
@section('content')
<section class="page-section">
    <div class="container mt-3 row justify-content-center">
        <div class="col-md-6">
            <form action="/login" method="post" class="shadow-sm p-4 border">
                @csrf
                <h3 class="text-center mb-5">Login</h3>
                <div class="row">
                    <div class="mb-3 col">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" autofocus>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember</label>
                </div>
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-dark mt-3">Login</button>
                </div>
                <div class="text-center mt-1">
                    <small>Not registered? <a href="/register" class="clickable-link">Register now!</a></small>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection