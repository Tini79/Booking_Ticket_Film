@extends('layouts.main')

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
            <td scope="col-1">No.</td>
            <td scope="col">Movie</td>
            <td scope="col-5">Description</td>
            <td scope="col">Price</td>
            <td scope="col">Action</td>
        </tr>
    </thead>
    @foreach ( $films as $film => $n )
    <tbody>
        <tr>
           <td>{{ $film + 1 }}.</td>
           <td>{{ $n->title }}</td>
           <td>{!! $n->description !!}</td>
           <td>Rp{{ number_format($n->price,0,",",".");}}</td>
           <td>
               <a href="/datafilms/{{ $n->id }}" class="btn btn-light btn-outline-dark btn-sm"><i class="fa-solid fa-eye"></i></a>
                <form action="/datafilms/{{ $n->id }}" method="post">
                    <a href="/datafilms/{{ $n->id }}/edit" class="btn btn-dark btn-sm"><i class="fa-solid fa-pen"></i></a>
                    @csrf
                    @method('delete')
                   <button class="btn btn-sm 
                   btn-danger" onClick="return confirm('Yakin hapus data ?') == true"><i class="fa-solid fa-trash-can"></i></button>
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