@extends('layouts.app')

@section('content')
<form action="{{ route('admindetai.store') }}" method="POST">
    @csrf
    <label for="exampleFormControlTextarea1">Mã số đề tài</label>
    <input class="form-control"  id="msdt" rows="3" name="msdt" >

    <label for="exampleFormControlTextarea1">tên đề tài</label>
      <input class="form-control"  id="tendetai" rows="3" name="tendetai" >

    <label for="title">thời gian đăng ký đề tài</label>
      <input type="date" class="form-control" id="thoigiandangky" name="thoigiandangky"  min="2021-11-08">

    <label for="title">Thời gian nộp đề tài</label>
    <input type="date" class="form-control" id="thoigiannop" name="thoigiannop" min="2021-11-08">

  <label for="exampleFormControlTextarea1">Lĩnh vực đề tài</label> 
    <input  class="form-control" rows="3" name="linhvuc" id="linhvuc" >
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection;