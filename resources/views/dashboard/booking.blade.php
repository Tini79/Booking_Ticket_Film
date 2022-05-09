@extends('layouts.main')
@section('content')
<section class="page-section">
    <div class="mt-3">
            <h1>Book Ticket Film</h1>
            <hr>
            <div class="row no-gutters">
                <div class="col-md-8">
                    <form action="/film/{{ $film->id }}/payment" method="post" class="mt-3">
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
                            <label for="">Amount of Book</label>
                            <input type="integer" name="bookAmount" class="form-control form-control @error('bookAmount') is-invalid @enderror" value="{{ old('bookAmount') }}">
                            @error('bookAmount')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Row</label>
                            <input type="text" name="row" class="form-control form-control @error('row') is-invalid @enderror"  value="{{ old('row') }}">
                            @error('row')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Seat Number</label>
                            <input type="integer" name="seatNumb" class="form-control form-control @error('seatNumb') is-invalid @enderror" value="{{ old('seatNumb') }}">
                            @error('seatNumb')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Account Number</label>
                            <select type="text" name="accountNumb" class="form-control form-control @error('accountNumb') is-invalid @enderror" value="{{ old('accountNumb') }}">
                                <option value=""></option>
                                <option value="1">BCA</option>
                                <option value="2">BNI</option>
                                <option value="3">BRI</option>
                                <option value="4">OVO</option>
                            </select>
                            @error('accountNumb')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="btn btn-dark">Order</button>
                        <a href="/datausers" class="btn btn-light btn-outline-dark">Back</a>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light">
                        <div class="card-header">
                            <div class="d-flex">
                                <div class="inline-flex">
                                    @if($film->img)
                                    <img src="{{ asset('storage/' . $film->img); }}" alt="" width="80">
                                    @endif
                                </div>
                                <div class="inline-flex">
                                    <h3 class="card-title inline-flex">{{ $film->title }}<sup class="text-muted">{{ $film->status->status }}</sup></h3>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h6>Rp{{ $film->price }}</h6>
                            </div>
                        </div>
                        <div class="card-body container">
                            <div class="row">
                                <div class="col">
                                    <p>Subtotal</p>
                                </div>
                                <div class="col">
                                    <p>Rp{{ $film->price }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Total</p>
                                </div>
                                <div class="col">
                                    <p>Rp{{ $film->price }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection