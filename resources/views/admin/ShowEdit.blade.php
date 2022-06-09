@extends('sb-admin/app')

@section('content')
<form action="/UpdateGuest/{{ $data->id }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{  $data->name}}">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" name="username" value="{{ $data->username}} ">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Address</label>
      <textarea class="form-control" id="address" name="address" >{{  $data->address}}</textarea>
    </div>
    
    <button type="submit" class="btn btn-success">Update</button>
  </form>
@endsection