@extends('layouts/main')
@section('container')
<div class="col-lg-12">
    <div class="row">
        <a href="buku/create" class="btn btn-dark">Add Book</a><br>
    </div><br>
    <div class="row">
        @foreach ($bukus as $buku)
        <div class="card">
        <div class="card-body">
        <div class="row">
        <div class="col-md-4">
            <h4 class="card-title" >{{ $buku->title }}</h4>
            <img src="{{ asset('/image/'.$buku->image) }}" alt="images?" width="200" class="img-fluid">
</div>        
        <div class="col-md-8">
            <p class="card-text" >{{ $buku->synopsis }}</p>
            <div class="d-flex align-items-end">
        <a href="buku/detail/{{ $buku->id }}" class="btn btn-secondary">Detail</a>
                <a href="buku/{{ $buku->id }}/edit" class="btn btn-warning">Edit</a>    
            <form method="POST" action="{{ url('buku', $buku->id ) }}">
                @csrf
                @method('DELETE') 
                <button class="btn btn-danger">Delete</button>
            </div>
           
            </div>
            </div>
        </div>
        
         
        @endforeach
    </div>
</div>
</div>
</div>
@endsection




 
