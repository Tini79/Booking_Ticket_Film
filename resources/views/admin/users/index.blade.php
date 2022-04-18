@extends('layouts.main')

@section('content')
<section class="page-section" id="portfolio">
<div class="text-end mt-3">
    <a href="createusers" class="btn btn-primary">Add</a>
</div>
<div class="d-flex justify-content-end my-3">
    <form action="" class="col-6 d-flex">
        <input name="search" type="text" class="form-control">
        <button class="btn btn-primary px-5">Search</button>
    </form>
</div>
<table class="table">
    <thead>
        <tr>
            <td>No</td>
            <td>Full Name</td>
            <td>Username</td>
            <td>Email</td>
            <td>Phone Number</td>
        </tr>
    </thead>
    @foreach ( $users as $user => $u )
    <tbody>
        <tr>
           <td>{{ $user + 1 }}</td>
           <td>{{ $u->title }}</td>
           <td>{{ $u->name }}</td>
           <td>{{ $u->username }}</td>
           <td>{{ $u->email }}</td>
           <td>{{ $u->phone }}</td>
           <td>
                <form action="/users/{{ $u->id }}" class="btn-group" method="post">
                    @csrf
                    @method('delete')
                   <a href="/users/{{ $u->id }}/edit" class="btn btn-success btn-sm">Edit</a>
                   <button class="btn btns-sm btn-danger" onClick="return confirm('Yakin hapus data ?') == true">Delete</button>
                </form>
           </td>
        </tr>
    </tbody>
    @endforeach
</table>
</section>
@endsection('content')