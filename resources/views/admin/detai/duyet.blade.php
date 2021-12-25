@extends('adminlte::page')

@section('title', 'detai manager')

@section('content_header')
    <h1>Duyệt đề tài</h1>
@stop

@section('content')

<div class="card">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
              <!-- /.card-header -->
            
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                   
                    
                    <tr>
                    <th style="width: 10px">STT</th>
                      <th style="width: 10px">Tên</th>
                      <th style="width: 10px">Mã sinh viên</th>
                      <th style="width: 10px">tên khoa</th>
                      <th style="width: 10px">Mã đề tài</th>
                      <th>Tên đề tài</th>
                      <th>lĩnh vực</th>
                      <th>thời gian đăng ký</th>
                      <th>Thời gian nộp</th>
                      

                    </tr>
                  </thead>
                  <tbody>
                    @php 
                    $stt=1;
                    @endphp
                      @foreach($duyets as $duyet)
                    <tr>    
                      <td>{{$stt++}}</td>
                      <td>{{$duyet->name}}</td>
                      <td>{{$duyet->masv}}</td>
                      <td>{{$duyet->tenkhoa}}</td>
                      <td>{{$duyet->msdt}}</td>
                      <td>{{$duyet->tendetai}}</td>
                      <td>{{$duyet->linhvuc}}</td>
                      <td>{{$duyet->thoigiandangky}}</td>
                      <td>{{$duyet->thoigiannop}}</td>  
                      <td>
                         <a href="{{route('adminduyet.edit',$duyet->id)}}"><button type="submit" class="btn btn-primary">Duyệt</button></a>   
                     
                    </form>
                      <td>
                        <form action="{{route('adminduyet.destroy',$duyet->id)}}" method="POST">
                           @method('DELETE')
                           @csrf
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