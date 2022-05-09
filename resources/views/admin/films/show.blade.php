@extends('layouts.certain')
@section('content')
<section class="page-section">
    <div class="mt-3">
        <h3 class="text-muted">{{ $film->status->status }}</h3>
        <div class="row">
            <div class="text-start col-xl-3 col-lg-4 col-md-5">
                @if ($film->img)
                <img src="{{ asset('storage/' . $film->img) }}" alt="" class="show-film-img">
                @endif
            </div>
            <div class="col-xl-9 col-lg-6 col-md-6 row">
                <h1 class="fw-bold">{{ $film->title }}</h1>
                <div class="col-xl-6 col-lg-6 col-md-5">
                    <p class="text-muted">Director</p>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-8">
                        <p class="text-muted"></p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5">
                    <p class="text-muted">Producer</p>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-8">
                        <p class="text-muted"></p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5">
                    <p class="text-muted">Writer</p>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-8">
                        <p class="text-muted"></p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5">
                    <p class="text-muted">Production</p>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-8">
                        <p class="text-muted"></p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5">
                    <p class="text-muted">Cast</p>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-8">
                        <p class="text-muted"></p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5">
                    <p class="text-muted">Original Language</p>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-8">
                        <p class="text-muted"></p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5">
                    <p class="text-muted">Genre</p>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-8">
                        <p class="text-muted"></p>
                </div>
                <hr>
                <div class="mt-3 mb-3">
                    <h3 class="fw-bold">Synopsis</h3>
                    <div class="">
                            <p class="text-muted">{!! $film->description !!}</p>
                    </div>
                </div>
                <hr>
                <div class="mt-3">
                    <form action="">
                        <button type="submit" class="btn btn-dark">Book Ticket</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection