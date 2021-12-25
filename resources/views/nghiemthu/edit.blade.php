@extends('layouts.app')

@section('content')
<form action="{{ route('adminnghiemthu.store',$mydetai->id)}}" method="POST">
    @csrf
    <label for="exampleFormControlTextarea1">Mã số hội đồng:</label>
    <input  class="form-control" rows="3" name="mshoidong" id="mshoidong">
    <label for="exampleFormControlTextarea1">Thư ký:</label>
    <select class="form-control" id="phanbien1" name="thuky">
                       
                       @foreach($giangviens as $giangvien)
                       <option value="{{$giangvien->name}}">{{$giangvien->name}}</option>
                       @endforeach
                     </select>

    <label for="exampleFormControlTextarea1">Phản biện 1:</label>
                     <select class="form-control" id="phanbien1" name="phanbien1">
                       
                       @foreach($giangviens as $giangvien)
                       <option value="{{$giangvien->name}}">{{$giangvien->name}}</option>
                       @endforeach
                     </select>
    <label for="exampleFormControlTextarea1">Phản biện 2:</label>
                          <select class="form-control" id="phanbien1" name="phanbien2">
                       
                       @foreach($giangviens as $giangvien)
                       <option value="{{$giangvien->name}}">{{$giangvien->name}}</option>
                       @endforeach
                     </select> 
     <label for="exampleFormControlTextarea1">Phản biện 3:</label>
                <select class="form-control" id="phanbien1" name="phanbien3">
                        @foreach($giangviens as $giangvien)
                        <option value="{{$giangvien->name}}">{{$giangvien->name}}</option>
                        @endforeach
                        </select>
    <label for="exampleFormControlTextarea1">tên sinh viên:</label>
    <input  class="form-control" rows="3" name="name" id="name" value="{{$user->name}}">

    <label for="exampleFormControlTextarea1">Mã sinh viên:</label>
    <input  class="form-control" rows="3" name="masv" id="masv" value="{{$mydetai->masv}}">

   
    <label for="exampleFormControlTextarea1">Mã số đề tài:</label>
    <input class="form-control"  id="msdt" rows="3" name="msdt" value="{{$mydetai->msdt}}">

  <label for="exampleFormControlTextarea1">tên đề tài:</label>
    <input class="form-control"  id="tendetai" rows="3" name="tendetai" value="{{$mydetai->tendetai}}">
    
    

  <label for="exampleFormControlTextarea1">Lĩnh vực đề tài:</label>
    <input  class="form-control" rows="3" name="linhvuc" id="linhvuc" value="{{$mydetai->linhvuc}}">
    


  <button type="submit" class="btn btn-primary">Lưu</button>
</form>

@endsection;