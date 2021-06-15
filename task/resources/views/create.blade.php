@extends("layouts.frontend")
{{-- @extends("layouts.validate") --}}
@section('container')
@section('title')
crud-create
@endsection
{{-- @section('validation')
@endsection --}}

      
      <center><h1>Create Form</h1></center>
      <form class="container" action="/post" method="post">
          @csrf
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" name="title" class="form-control @error('title') border border-danger @enderror" id="exampleFormControlInput1" placeholder="Enter title" >
        <div class="text-danger">
          @error('title')
              please enter a valid name!
          @enderror
        </div>
       </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Description</label>
        <textarea name="description"  class="form-control @error('description') border border-danger @enderror" id="exampleFormControlInput1" placeholder="Enter description" row="5" ></textarea>
        <div class="text-danger">
          @error('description')
              please enter description !
          @enderror
        </div>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
     
      </form>
      @endsection
