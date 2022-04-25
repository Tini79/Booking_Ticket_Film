@extends('layouts.main')

@section('content')
<section class="page-section">
    <h1>Create New User</h1>
    <hr>
<form action="/datausers" method="post">
    @csrf
    <div class="mb-2">
        <label for="">Full Name</label>
        <input type="text" name="fullname" class="form-control form-control @error('fullname') is-invalid @enderror" value="{{ old('fullname') }}">
        @error('fullname')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-2">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control form-control @error('username') is-invalid @enderror" value="{{ old('username') }}">
        @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-2">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}">
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-2">
        <label for="">Phone Number</label>
        <input type="text" name="phone" class="form-control form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
        @error('phone')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-2">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
        @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <!-- <div class="mb-2">
        <div>
            <label for="">Level</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input"> 
            <label for="" class="form-check-label">Admin</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input">
            <label for="" class="form-check-label">User</label>
        </div>
    </div> -->
    <button class="btn btn-dark">Add</button>
    <a href="/datausers" class="btn btn-light btn-outline-dark">Back</a>
</form>
</section>

<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endsection