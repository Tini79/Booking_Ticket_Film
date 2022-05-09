@extends('layouts.main')

@section('content')
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Our Studio!</div>
        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
    </div>
</header>
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Movies</h2>
            <h3 class="section-subheading text-muted"></h3>
        </div>
        <div class="row">
            @foreach($films as $film)
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" href="/film/{{ $film->id }}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="film-img" src="{{ asset('storage/' . $film->img) }}" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">{{ $film->title}}</div>
                        <div class="portfolio-caption-subheading text-muted">Illustration</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection


