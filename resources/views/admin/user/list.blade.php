@extends('adminlte::page')

@section('title', 'detai manager')

@section('content_header')
    <h1>Danh sách đề tài</h1>
@stop

@section('content')
<div class="card">
              
              <!-- /.card-header -->
            
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <div style="text-align: right;"><a href="user/create"><button type="submit" class="btn btn-primary" value="Delete">Thêm</button></a></div>
                    
                    <tr>
                      <th style="width: 10px">STT</th>
                      <th style="width: 10px">name</th>
                      <th>Mã sinh viên</th>
                      <th>Khoa</th>
                      <th>Địa chỉ email</th>
                      <th></th>
                      <th></th>

                    </tr>
                  </thead>
                  @php
                  $stt=1;
                  @endphp
                  <tbody>
                      @foreach($users as $user)
                    <tr>
                      <td>{{$stt++}}</td>
                      <td>{{$user->name }}</td>
                      <td>{{$user->masv}}</td>
                      <td>{{$user->tenkhoa}}</td>
                      <td>{{$user->email}}</td>
                      <td><a href="{{route('adminuser.edit',$user->id)}}"><button type="submit" class="btn btn-primary" value="Delete">Sửa</button></a>
                    </td>
                      
                      <td><form action="{{route('adminuser.destroy',$user->id)}}" method="POST">
                            @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-primary" value="Delete">Xóa</button>
                      </form>

                      </td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
            </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop