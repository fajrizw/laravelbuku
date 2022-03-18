@extends('layouts.main')
@section('container')


<div class="col-lg-8">

    <div class="card bg-light mb-3 px-3 mt-5"><br>
    <div class="card text-white bg-secondary mb-3">
      <div class="card-header">Detail</div>
    </div>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('/image/'.$buku->image) }}" class="img-fluid" alt="No Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h6 class="card-title">Title</h6>
                    <p class="card-text">{{ $buku->title }}</p>
                    <h6 class="card-title">Author</h6>
                    <p class="card-text">{{ $buku->author }}</p>
                    <h6 class="card-title">Publisher</h6>
                    <p class="card-text">{{ $buku->publisher }}</p>
                    <h6 class="card-title">Synopsis</h6>
                    <p class="card-text">{{ $buku->synopsis }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
