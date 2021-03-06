@extends('layouts.certain')

@section('content')
<section class="page-section">
    <div class="text-end mt-3">
        <a href="createdatafilms" class="btn btn-light btn-outline-dark"><i class="fa-solid fa-plus"></i> Add</a>
    </div>
    <div class="d-flex justify-content-end my-3">
        <form action="/datafilms" class="col-md-6 d-flex">
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
                <td scope="col" class="">Movie</td>
                <td scope="col" class="">Status</td>
                <td scope="col" class="">Schedule</td>
                <td scope="col" class="">Ticket/Seat</td>
                <td scope="col" class="">Price</td>
                <td scope="col" class="">Action</td>
            </tr>
        </thead>
        @foreach ( $films as $film => $n )
        <tbody>
            <tr>
                <td>{{ $film + 1 }}.</td>
                <td>{{ $n->title }}</td>
                <td>{{ $n->status->status }}</td>
                <td>{{ $n->date }}, {{ $n->time }} WIB</td>
                <td>{{ $n->ticketAvailable }}/{{ $n->seatAvailable }}</td>
                <td>Rp{{ number_format($n->price,0,",",".");}}</td>
                <td>
                    <a href="/datafilms/{{ $n->id }}" class="btn btn-light btn-outline-dark btn-sm d-inline"><i class="fa-solid fa-eye"></i></a>
                        <form action="/datafilms/{{ $n->id }}" class="d-inline" method="post">
                            <a href="/datafilms/{{ $n->id }}/edit" class="btn btn-dark btn-sm"><i class="fa-solid fa-pen"></i></a>
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger" onClick="return confirm('Yakin hapus data ?') == true"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <div class="d-flex justify-content-end">
        {{ $films->links() }}
    </div>
</section>
@endsection('content')