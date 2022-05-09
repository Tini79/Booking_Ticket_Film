@extends('layouts.main')
@section('content')
<section class="page-section">
    <div class="mt-3">
        <h3 class="text-muted">{{ $film->status->status }}</h3>
        <div class="row">
            <div class="text-start col-xl-3 col-lg-4 col-md-5">
                @if ($film->img)
                <img src="{{ asset('storage/' . $film->img) }}" alt="" class="post-film-img">
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
                    <div class="card">
                        <h6 class="fw-bold text-center">Showtime</h6>
                        <ul class="list-group list-group-horizontal justify-content-center list-unstyled">
                            <li class="list-group-item">
                                <span data-feather="arrow-left"></span>
                            </li>
                            <li class="list-group-item">
                                <span class="btn btn-sm">{{ $film->date }}</span>
                            </li>
                            <li class="list-group-item">
                                <span data-feather="arrow-right"></span>
                            </li>
                        </ul>
                        <div class="card-body">
                            <div class="list-group list-group-horizontal justify-content-center mt-3 list-unstyled row">
                                <div class="col">
                                    <a href="/film/{{ $film->id }}/booking" class="btn btn-outline-dark">{{ $film->time }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection