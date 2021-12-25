@extends('layouts.app')

@section('content')
<form action="{{route('adminuser.update',$user->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="tensv">tên sinh viên</label>
    <input class="form-control" value="{{$user->name}}" id="name" rows="3" name="name" >

    <label for="masv">mã sinh viên</label>
      <input class="form-control" value="{{$user->masv}}"  id="masv" rows="3" name="masv" >

      <label for="exampleFormControlTextarea1">tên khoa:</label>
            <select class="form-control"  id="tenkhoa" name="tenkhoa">
                        <option >{{$user->tenkhoa}}</option>
                        @foreach($khoas as $khoa)
                        <option value="{{$khoa->tenkhoa}}" >{{$khoa->tenkhoa}}</option>
                        @endforeach
                      </select>
      <label for="email">email:</label>
      <input class="form-control" value="{{$user->email}}"  id="email" rows="3" name="email" >

      

   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection;