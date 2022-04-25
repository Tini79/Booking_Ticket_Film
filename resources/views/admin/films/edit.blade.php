@extends('layouts.main')
@section('content')
<section class="page-section">
<h1>Edit Film</h1>
<hr>
<form action="/datafilms/{{ $film->id }}" method="post" class="mt-3">
    @csrf
    @method('PATCH')
    <div class="mb-2">
        <label for="">Movie</label>
        <input type="text" name="title" class="form-control form-control @error('title') is-invalid @enderror" value="{{ old('title', $film->title) }}">
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
        <input id="description" type="hidden" name="description" value="{{ old('description', $film->description) }}">
        <trix-editor input="description"></trix-editor>
    </div>
    <div class="mb-2">
        <label for="">Price</label>
        <input type="text" name="price" class="form-control form-control @error('price') is-invalid @enderror" value="{{ old('price', $film->price) }}">
        @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button class="btn btn-dark">Save</button>
    <a href="/datafilms" class="btn btn-light btn-outline-dark">Back</a>
</form>
</section>
@endsection