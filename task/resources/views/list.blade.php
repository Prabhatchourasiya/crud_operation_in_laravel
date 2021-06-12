<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  {{session('msg')}}
<table class="table" border="1px" ><center><h1>List of data submitted:-</h1></center>
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">description</th>
        <th scope="col">delete</th>
        <th scope="col">edit</th>
        <th scope="col"><a href="/post/create"><button type="submit" class="btn btn-primary">create new</button></a></th>
      </tr>
      @foreach ( $data as $value)
      <tr>
          <td> {{$value->id}}</td>
          <td> {{$value->title}}</td>
          <td> {{$value->description}}</td>
          <td> <form action="/post/{{$value->id}}}" method="post">@csrf @method("delete")<button type="submit" class="btn btn-primary">Delete</button></form></td>
          <td> <form action="/post/{{$value->id}}/edit" method="get" >@csrf <button type="submit" class="btn btn-primary">Edit</button></form></td>
      </tr>
      @endforeach
    </thead>
 
</table>
</body>

</html>