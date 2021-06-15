@extends("layouts.frontend")
@section('container')
    <center><h1>Update Form</h1></center> 
    <form method="post" action="/post/{{$data->id}}" class="container" >
      @csrf
      @method('patch')
      <div class="mb-3">
        <label for="exampleName" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="exampleName" value="{{$data->title}}" placeholder="Enter title">
      </div>
      <div class="mb-3">
        <label for="exampleName" class="form-label">Description</label>
        <textarea name="description" class="form-control" id="exampleName"  placeholder="Enter description"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
    @endsection
