@extends('layouts.main')

@section('content')
<section class="page-section">
    <h1>Create New Film</h1>
    <hr>
<form action="/datafilms" method="post">
    @csrf
    <div class="mb-2">
        <label for="">Movie</label>
        <input type="text" name="title" class="form-control form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-2">
        <label for="description">Description</label>
        @error('description')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <input id="description" type="hidden" name="description" value="{{ old('description') }}">
        <trix-editor input="description"></trix-editor>
    </div>
    <div class="mb-2">
        <label for="">Price</label>
        <input type="text" name="price" class="form-control form-control @error('price') is-invalid @enderror"  value="{{ old('price') }}">
        @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button class="btn btn-success">Add</button>
    <a href="/datafilms" class="btn btn-danger">Back</a>
</form>
</section>

<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endsection