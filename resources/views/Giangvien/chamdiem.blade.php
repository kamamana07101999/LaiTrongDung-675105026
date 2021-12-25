@extends('layouts.app')

@section('content')
<form action="{{route('giangviennghiemthu.update',$nghiemthudanhgia->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
   @method('PUT')
   

  <label for="exampleFormControlTextarea1">Chấm điểm</label>
    <input  class="form-control" rows="3" name="diemso" id="diemso">
    
  

  <button type="submit" class="btn btn-primary">Lưu</button>
</form>

@endsection;