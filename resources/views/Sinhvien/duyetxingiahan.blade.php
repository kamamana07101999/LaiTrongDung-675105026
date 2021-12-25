@extends('layouts.app')

@section('content')
<form action="{{ route('adminmydetai.update',$xingiahan->id)}}" method="POST">
    @csrf
   @method('PUT')
    <label for="exampleFormControlTextarea1">Mã số đề tài</label>
    <input class="form-control"  id="msdt" rows="3" name="msdt" value="{{$xingiahan->msdt}}">

  <label for="exampleFormControlTextarea1">tên đề tài</label>
    <input class="form-control"  id="tendetai" rows="3" name="tendetai" value="{{$xingiahan->tendetai}}">

    <label for="title">thời gian đăng ký đề tài</label>
      <input type="date" class="form-control" id="thoigiandangky" name="thoigiandangky" value="{{$xingiahan->thoigiandangky}}" min="2021-11-08">

    <label for="title">Thời gian nộp đề tài</label>
    <input type="date" class="form-control" id="thoigiannop" name="thoigiannop" value="{{$xingiahan->thoigiannop}}" min="2021-11-08">

  <button type="submit" class="btn btn-primary">Lưu</button>
</form>

@endsection;