@extends("layouts.frontend")
@section('container')
@section('title')
crud-create
@endsection
      
      <center><h1>Create Form</h1></center>
      <form class="container" action="/post" method="post">
          @csrf
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter title">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Description</label>
        <textarea name="description"  class="form-control" id="exampleFormControlInput1" placeholder="Enter description" row="5"></textarea>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
     
      </form>
      @endsection
