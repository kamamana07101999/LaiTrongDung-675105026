@extends('adminlte::page')

@section('title', 'detai manager')

@section('content_header')
    <h1>Duyệt đề tài</h1>
@stop

@section('content')
<div class="card">
              
              <!-- /.card-header -->
            
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                   
                    
                    <tr>
                      

                      <th style="width: 10px">Mã đề tài</th>
                      <th>Tên đề tài</th>
                      <th>lĩnh vực</th>
                      <th>thời gian đăng ký</th>
                      <th>Thời gian nộp</th>
                      <th>sản phẩm</th>

                    </tr>
                  </thead>
                  <tbody>
                      @php
                      $stt=1;
                      @endphp
                      @foreach($mydetais as $mydetai)
                    <tr>
                    
                      <td>{{$mydetai->msdt}}</td>
                      <td>{{$mydetai->tendetai}}</td>
                      <td>{{$mydetai->linhvuc}}</td>
                      <td>{{$mydetai->thoigiandangky}}</td>
                      <td>{{$mydetai->thoigiannop}}</td>  
                      <td>{{$mydetai->filename}}</td>
                          <td>
                          <a href="{{route('adminNopsp.edit',$mydetai->id)}}"><button type="submit" class="btn btn-primary">Nộp</button></a>
                      </td>
                      <td>
                      <a href="{{route('adminmydetaisinvien.edit',$mydetai->id)}}"><button type="submit" class="btn btn-primary">Xin gia hạn</button></a>
                    </td>  
                    <td><form action="{{route('adminmydetaisinvien.destroy',$mydetai->id)}}" method="POST">
                    @method('DELETE')
                        @csrf
                         <button type="submit" class="btn btn-primary">Hủy</button>
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