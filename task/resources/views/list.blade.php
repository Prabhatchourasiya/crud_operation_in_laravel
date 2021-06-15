@extends("layouts.frontend")
@section('container')
@section('title')
crud-list
@endsection
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
@endsection