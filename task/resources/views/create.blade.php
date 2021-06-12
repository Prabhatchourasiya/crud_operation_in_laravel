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
  </body>
</html>