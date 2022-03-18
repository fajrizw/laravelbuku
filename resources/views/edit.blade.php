@extends('layouts.main')
@section('container')

<div class="col-lg-12">
    <div class="row">
    <form action="/buku/{{ $buku->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <table class="table table-responsive">
    <tr>
    <td>
    <div class="form-group row">
    <label for="title" class="col-4 col-form-label">Title</label> 
    <div class="col-12">
    <input id="title" name="title" type="text" class="form-control" value="{{ $buku->title }}">
    </div>
    </div>
    </td>
    </tr>
    <tr>
    <td>
    <div class="form-group row">
    <label for="author" class="col-4 col-form-label">Author</label> 
    <div class="col-12">
    <input id="author" name="author" type="text" class="form-control" value="{{ $buku->author }}">
    </div>
    </div>
    </td>
    </tr>
    <tr>
    <td>
    <div class="form-group row">
    <label for="publisher" class="col-4 col-form-label">Publisher</label> 
    <div class="col-12">
    <input id="publisher" name="publisher" type="text" class="form-control" value="{{ $buku->publisher }}">
    </div>
    </div>
    </td>
    </tr>
    <tr>
    <td>
    <div class="form-group row">
    <label for="synopsis" class="col-4 col-form-label">Synopsis</label> 
    <div class="col-12">
    <textarea class="form-control" rows="10" id="synopsis" name="synopsis" value="{{ $buku->synopsis }}"></textarea>
    </div>
    <td>
    </tr>
    <tr>
    <td>
    <div class="form-group row">

    <label for="formFile" class="col-4 col-form-label">Image</label> 
    <div class="col-12">
    <input id="formFile" name="image" type="file"class="form-control">
    </td>
    </tr> 
    </div>
    </table>
    <div class="form-group row">
    <button type="Submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
    </form>
</div>
@endsection
