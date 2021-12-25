@extends('layouts.app')

@section('content')
<form action="{{route('adminuser.store')}}" method="POST">
    @csrf
    <label for="tensv">tên sinh viên</label>
    <input class="form-control"  id="name" rows="3" name="name" >

    <label for="masv">mã sinh viên</label>
      <input class="form-control"  id="masv" rows="3" name="masv" >

      <label for="exampleFormControlTextarea1">tên khoa:</label>
            <select class="form-control" id="tenkhoa" name="tenkhoa">
                       
                        @foreach($khoas as $khoa)
                        <option value="{{$khoa->tenkhoa}}">{{$khoa->tenkhoa}}</option>
                        @endforeach
                      </select>
      <label for="email">email:</label>
      <input class="form-control"  id="email" rows="3" name="email" >

      <label for="username">user name</label>
      <input class="form-control"  id="username" rows="3" name="username" >

      <label for="password">password</label>
      <input class="form-control"  id="password" rows="3" name="password" >

   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection;