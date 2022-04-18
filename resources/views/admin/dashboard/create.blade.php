@extends('layouts.main')

@section('content')
<section class="page-section">
    <h1>Create New Admin</h1>
    <hr>
<form action="/dashboardadmin" method="post">
    @csrf
    <div class="mb-2">
        <label for="">Full Name</label>
        <input type="text" name="fName" class="form-control form-control @error('fName') is-invalid @enderror" value="{{ old('fName') }}">
        @error('fName')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-2">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control form-control @error('username') is-invalid @enderror"  value="{{ old('username') }}">
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
        <label for="">Phone</label>
        <input type="text" name="phone" class="form-control form-control @error('phone') is-invalid @enderror"  value="{{ old('phone') }}">
        @error('phone')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-2">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control form-control @error('password') is-invalid @enderror"  value="{{ old('password') }}">
        @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button class="btn btn-success">Add</button>
    <a href="/dashboardadmin" class="btn btn-danger">Back</a>
</form>
</section>

<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endsection