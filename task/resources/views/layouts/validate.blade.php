<div>
@yield('validation')
@foreach ($errors->all() as $item)
<div  class="alert alert-danger" role="alert">
{{$item}}
</div>
@endforeach
</div>