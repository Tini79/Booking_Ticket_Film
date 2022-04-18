@extends('layouts.main')
@section('content')
<section class="page-section">
    <div class="container mt-3 row justify-content-center">
        <div class="col-md-6">
            <form action="/register" method="post" class="shadow-sm p-4 border">
                @csrf
                <h3 class="text-center mb-5">Register</h3>
                <div class="row">
                    <div class="mb-3 col">
                        <label>Full Name</label>
                        <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" value="{{ old('fullname') }}">
                        @error('fullname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                        @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-dark mt-3">Register</button>
                </div>
                <div class="text-center mt-1">
                    <small>Already have account? <a href="/login" class="clickable-link">Login!</a></small>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection