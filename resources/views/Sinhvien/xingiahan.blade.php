@extends('layouts.app')

@section('content')
<form action="{{ route('sinhvienxingiahan.store',$mydetai->id)}}" method="POST">
    @csrf
    <label for="exampleFormControlTextarea1">tên sinh viên:</label>
    <input  class="form-control" rows="3" name="namesv" id="namesv" value="{{$user->name}}">
   
    <label for="exampleFormControlTextarea1">Mã sinh viên:</label>
    <input  class="form-control" rows="3" name="masvv" id="masvv" value="{{$user->masv}}">
    
    <label for="exampleFormControlTextarea1">Mã số đề tài:</label>
    <input class="form-control"  id="msdt" rows="3" name="msdt" value="{{$mydetai->msdt}}">

  <label for="exampleFormControlTextarea1">tên đề tài:</label>
    <input class="form-control"  id="tendetai" rows="3" name="tendetai" value="{{$mydetai->tendetai}}">

    <label for="title">thời gian đăng ký đề tài</label>
      <input type="date" class="form-control" id="thoigiandangky" name="thoigiandangky" value="{{$mydetai->thoigiandangky}}" min="2021-11-08">

    <label for="title">Thời gian nộp đề tài</label>
    <input type="date" class="form-control" id="thoigiannop" name="thoigiannop" value="{{$mydetai->thoigiannop}}" min="2021-11-08">

  <label for="exampleFormControlTextarea1">Lý do:</label>
    <input  class="form-control" rows="3" name="lydo" id="lydo" value="{{$mydetai->lydo}}">
    
  

  <button type="submit" class="btn btn-primary">Lưu</button>
</form>

@endsection;