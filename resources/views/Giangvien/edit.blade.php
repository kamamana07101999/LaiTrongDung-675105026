@extends('layouts.app')

@section('content')
<form action="{{route('admingiangvien.update',$giangvien->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="tensv">tên giảng viên</label>
    <input class="form-control" value="{{$giangvien->name}}" id="name" rows="3" name="name" >

   

      <label for="exampleFormControlTextarea1">tên khoa:</label>
            <select class="form-control"  id="tenkhoa" name="tenkhoa">
                        <option >{{$giangvien->tenkhoa}}</option>
                        @foreach($khoas as $khoa)
                        <option value="{{$khoa->tenkhoa}}" >{{$khoa->tenkhoa}}</option>
                        @endforeach
                      </select>
      <label for="email">email:</label>
      <input class="form-control" value="{{$giangvien->email}}"  id="email" rows="3" name="email" >

      

   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection;