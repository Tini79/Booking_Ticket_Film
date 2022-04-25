@extends('layouts.main')
@section('content')
<section class="page-section" id="portfolio">
<div class="text-end mt-3">
    <a href="createdataadmins" class="btn btn-light btn-outline-dark"><i class="fa-solid fa-plus"></i> Add</a>
</div>
<div class="d-flex justify-content-end my-3">
    <form action="" class="col-6 d-flex">
        <input name="search" type="text" class="form-control">
        <button class="btn btn-dark px-5">Search</button>
    </form>
</div>
<hr>
<table class="table">
    <thead>
        <tr>
            <td>No</td>
            <td>Full Name</td>
            <td>Username</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Action</td>
        </tr>
    </thead>
    @foreach ( $admins as $admin => $a )
    <tbody>
        <tr>
           <td>{{ $admin + 1 }}</td>
           <td>{{ $a->fullname }}</td>
           <td>{{ $a->username }}</td>
           <td>{{ $a->email }}</td>
           <td>{{ $a->phone }}</td>
           <td>
                <form action="/dataadmin/{{ $a->id }}" class="btn-group" method="post">
                    @csrf
                    @method('delete')
                   <a href="/dataadmin/{{ $a->id }}/edit" class="btn btn-dark btn-sm"><i class="fa-solid fa-pen"></i></a>
                   <button class="btn btn-sm btn-light btn-outline-dark" onClick="return confirm('Yakin hapus data ?') == true"><i class="fa-solid fa-trash-can"></i></button>
                </form>
           </td>
        </tr>
    </tbody>
    @endforeach
</table>
</section>
@endsection