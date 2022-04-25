@extends('layouts.main')
@section('content')
@if ($film->img)
<img src="{{ asset('storage/' . $film->img) }}" alt="">
@endif
@endsection