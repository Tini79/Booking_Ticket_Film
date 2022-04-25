@extends('layouts.main')

@section('content')
<section class="page-section">
    <h1>Create New Film</h1>
    <hr>
<form action="/datafilms" method="post" enctype="multipart/form-data">
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
    <div class="mb-3">
        <label for="formFile" class="form-label">Film Image</label>
        <input name="img" class="form-control @error('img') is-invalid @enderror" type="file" id="formFile">
        @error('img')
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
    <button class="btn btn-dark">Add</button>
    <a href="/datafilms" class="btn btn-light btn-outline-dark">Back</a>
</form>
</section>

<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endsection