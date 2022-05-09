@extends('layouts.certain')

@section('content')
<section class="page-section">
    <div class="text-end mt-3">
        <a href="createdatausers" class="btn btn-light btn-outline-dark"><i class="fa-solid fa-plus"></i>Add</a>
    </div>
    <div class="d-flex justify-content-end my-3">
            <form action="/datausers" class="col-md-6 d-flex">
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
                <td>No</td>
                <td>Full Name</td>
                <td>Username</td>
                <td>Email</td>
                <td>Phone Number</td>
                <td>Action</td>
            </tr>
        </thead>
        @foreach ( $users as $user => $u )
        <tbody>
            <tr>
                <td>{{ $user + 1 }}</td>
                <td>{{ $u->fullname }}</td>
                <td>{{ $u->username }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->phone }}</td>
                <td>
                        <form action="/datausers/{{ $u->id }}" method="post">
                            <a href="/datausers/{{ $u->id }}/edit" class="btn btn-dark btn-sm"><i class="fa-solid fa-pen"></i></a>
                            @csrf
                            @method('delete')
                        <button class="btn btn-sm btn-light btn-outline-dark" onClick="return confirm('Yakin hapus data ?') == true"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</section>
@endsection('content')