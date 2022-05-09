@extends('layouts.main')

@section('content')
<section class="page-section">
    <div class="col-md-9 col-lg-10 px-md-4 mt-3">
        <h1>Create New Film</h1>
        <hr>
        <form action="/datafilms" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
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
            <div class="mb-3">
                <label for="description">Description</label>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                <trix-editor input="description"></trix-editor>
            </div>
            <div class="mb-3">
                <label for="">Category</label>
                <div>
                    <input type="radio" class="btn-check" autocomplete="off">
                    <label class="btn btn-outline-dark">Adventure</label>
                    <input type="radio" class="btn-check" autocomplete="off">
                    <label class="btn btn-outline-dark">Animation</label>
                    <input type="radio" class="btn-check" autocomplete="off">
                    <label class="btn btn-outline-dark">Fantasy</label>
                    <input type="radio" class="btn-check" autocomplete="off">
                    <label class="btn btn-outline-dark">Horror</label>
                    <input type="radio" class="btn-check" autocomplete="off">
                    <label class="btn btn-outline-dark">Mistery</label>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col">
                    <label for="">Ticket Available</label>
                    <input type="number" name="ticketAvailable" class="form-control form-control @error('ticketAvailable') is-invalid @enderror" value="{{ old('ticketAvailable') }}">
                    @error('ticketAvailable')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="">Seat Available</label>
                    <input type="number" name="seatAvailable" class="form-control form-control @error('seatAvailable') is-invalid @enderror" value="{{ old('seatAvailable') }}">
                    @error('seatAvailable')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div>
                    <label for="">Status</label>
                </div>
                @foreach($statuses as $status)
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="status_id" id="inlineRadio1" value="{{ $status->id }}">
                    <label for="" class="form-check-label">{{ $status->status }}</label>
                </div>
                @endforeach
            </div>
            <div class="mb-3 row">
                <div class="col">
                    <label for="">Date</label>
                    <input type="date" name="date" class="form-control form-control @error('date') is-invalid @enderror" value="{{ old('date') }}">
                    @error('date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="">Time</label>
                    <input type="time" name="time" class="form-control form-control @error('time') is-invalid @enderror" value="{{ old('time') }}">
                    @error('time')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="">Price</label>
                <input type="text" name="price" class="form-control form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="btn btn-dark">Add</button>
            <a href="/datafilms" class="btn btn-light btn-outline-dark">Back</a>
        </form>
    </div>
</section>

<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endsection