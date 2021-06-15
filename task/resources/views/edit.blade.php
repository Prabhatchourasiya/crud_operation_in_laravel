@extends("layouts.frontend")
{{-- @extends("layouts.validate") --}}
@section('container')
@section('title')
crud-edit
{{-- @endsection
@section('validation') --}}

@endsection
    <center><h1>Update Form</h1></center> 
    <form method="post" action="/post/{{$data->id}}" class="container" >
      @csrf
      @method('patch')
      <div class="mb-3">
        <label for="exampleName" class="form-label">Title</label>
        <input type="text" name="title" class="form-control @error('title') border border-danger @enderror" id="exampleName" value="{{$data->title}}" placeholder="Enter title" >
        <div class="text-danger">
          @error('title')
              please enter a valid name!
          @enderror
        </div>      
      </div>
      <div class="mb-3">
        <label for="exampleName" class="form-label">Description</label>
        <textarea name="description" class="form-control @error('description') border border-danger @enderror" id="exampleName"  placeholder="Enter description" ></textarea>
        <div class="text-danger">
          @error('description')
              please enter description!
          @enderror
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
    @endsection
