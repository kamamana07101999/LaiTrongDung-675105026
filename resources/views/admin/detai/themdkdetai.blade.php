@extends('layouts.app')

@section('content')
<form action="{{ route('adminduyetsinhvien.store',$dangky->id)}}" method="POST">
    @csrf
    <label for="exampleFormControlTextarea1">tên sinh viên:</label>
    <input  class="form-control" rows="3" name="name" id="name" value="{{$user->name}}">

    <label for="exampleFormControlTextarea1">Mã sinh viên:</label>
    <input  class="form-control" rows="3" name="masv" id="masv" value="{{$user->masv}}">

    <label for="exampleFormControlTextarea1">tên khoa:</label>
            <select class="form-control" id="tenkhoa" name="tenkhoa">
                       
                        @foreach($khoas as $khoa)
                        <option value="{{$khoa->tenkhoa}}">{{$khoa->tenkhoa}}</option>
                        @endforeach
                      </select>

    <label for="exampleFormControlTextarea1">Mã số đề tài:</label>
    <input class="form-control"  id="msdt" rows="3" name="msdt" value="{{$dangky->msdt}}">

  <label for="exampleFormControlTextarea1">tên đề tài:</label>
    <input class="form-control"  id="tendetai" rows="3" name="tendetai" value="{{$dangky->tendetai}}">

    <label for="title">thời gian đăng ký đề tài:</label>
      <input type="date" class="form-control" id="thoigiandangky" name="thoigiandangky" value="{{$dangky->thoigiandangky}}" min="2021-11-08">

    <label for="title">Thời gian nộp đề tài:</label>
    <input type="date" class="form-control" id="thoigiannop" name="thoigiannop" value="{{$dangky->thoigiannop}}" min="2021-11-08">

  <label for="exampleFormControlTextarea1">Lĩnh vực đề tài:</label>
    <input  class="form-control" rows="3" name="linhvuc" id="linhvuc" value="{{$dangky->linhvuc}}">
    


  <button type="submit" class="btn btn-primary">Lưu</button>
</form>

@endsection;