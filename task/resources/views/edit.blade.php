<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>crud</title>
  </head>
  <body>
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
  </body>
</html>