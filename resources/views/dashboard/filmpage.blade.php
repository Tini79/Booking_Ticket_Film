@extends('layouts.main')
@section('content')
<section class="page-section">
    <div class="container">
        <h3>About Film</h3>
        <p>{!! $film->description !!}</p>
    </div>
</section>
@endsection