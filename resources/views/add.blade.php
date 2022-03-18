@extends('layouts/main')
@section('container')

<div class="col-md-8 mt-4">
<form action="{{ url('buku') }}" method="post" enctype="multipart/form-data">
  
  <div class="mb-3">
    @csrf
  <label for="title" class="form-label">Title</label>
  <input type="text" name="title" class="form-control" id="title">
</div>
<div class="mb-3">
  <label for="author" class="form-label">Author</label>
  <input type="text" name="author" class="form-control" id="author">
</div>
    <div class="mb-3">
    <label for="synopsis" class="form-label">Synopsis</label> 
    <textarea class="form-control" rows="10" id="synopsis" name="synopsis" ></textarea>
    </div>
  
<div class="mb-3">
  <label for="publisher" class="form-label">Publisher</label>
  <input type="text" name="publisher" class="form-control" id="publisher">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Post Image</label>
  <input class="form-control" name="image" type="file" id="formFile">
</div>
<div class="mb-3">
  <input type="submit" class="btn btn-primary" value="submit">
</div>
</form>

</div>


@endsection

