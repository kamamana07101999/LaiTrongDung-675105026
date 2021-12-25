@extends('layouts.app')

@section('content')
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <label for="exampleFormControlTextarea1">nộp sản phẩm</label>
    <input  class="form-control" type="file" rows="3" name="filename" id="filename" value="{{$mydetai->filename}}">
    
  

  <button type="submit" class="btn btn-primary">Lưu</button>
</form>

@endsection;