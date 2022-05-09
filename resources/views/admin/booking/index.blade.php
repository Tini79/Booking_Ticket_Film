@extends('layouts.certain')
@section('content')
<section class="page-section">
    <div class="d-flex justify-content-end my-3 mt-3">
        <form action="" class="col-md-6 d-flex">
            <div class="input-group">
                <input name="search" type="text" class="form-control" placeholder="Search ..." value="{{ request('search') }}">
                <button class="btn btn-dark px-5" type="submit">Search</button>
            </div>
        </form>
    </div>
    <hr>
    <table class="table">
        <thead class="bg-dark text-light">
            <tr>
                <td scope="col" class="">No.</td>
                <td scope="col" class="">Customer Name</td>
                <td scope="col" class="">Film Ticket</td>
                <td scope="col" class="">Book Amount</td>
                <td scope="col" class="">Status</td>
                <td scope="col" class="">Action</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($bookings as $booking => $b)
                <td>{{ $booking + 1 }}.</td>
                <td>{{ $b->user->fullname }}</td>
                <td>{{ $b->film->title }}</td>
                <td>{{ $b->bookAmount }}</td>
                <td></td>
                <td>
                    <a href="/filmbooking/{{ $b->id }}" class="btn btn-light btn-outline-dark btn-sm d-inline"><i class="fa-solid fa-eye"></i></a>
                        <form action="" class="d-inline" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger" onClick="return confirm('Yakin hapus data ?') == true"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
    </div>
</section>
@endsection