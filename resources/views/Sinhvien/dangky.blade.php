@extends('adminlte::page')

@section('title', 'detai manager')

@section('content_header')
    <h1>Danh sách đề tài</h1>
@stop

@section('content')
<div class="card">
              
              <!-- /.card-header -->
         
            
            
              <div class="card-body">
                <form action=""  class="form-inline"  >
            
              <div class="form-group">
                <label class="sr-only" for="">label</label>
                <input class="form-control" name="key" placeholder="Input field">
              </div>
              <button type="submit" class="btn btn-primary"> <i class="fas fa-search"></i></button>
            </form>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">STT</th>
                      <th style="width: 10px">Mã đề tài</th>
                      <th>Tên đề tài</th>
                      <th>Thời gian đăng ký</th>
                      <th>Thời gian nộp</th>
                      <th>lĩnh vực</th>
                      <td></td>

                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $stt=1;
                    @endphp
                      @foreach($dangkys as $dangky)
                    <tr>
                      <td>{{$stt++}}</td>
                      <td>{{$dangky->msdt }}</td>
                      <td>{{$dangky->tendetai}}</td>
                      <td>{{$dangky->thoigiandangky}}</td>
                      <td>{{$dangky->thoigiannop}}</td>
                      <td>{{$dangky->linhvuc}}</td>


                      <td>
                      <a href="{{route('admindangky.edit',$dangky->id)}}"><button type="submit" class="btn btn-primary">Đăng ký</button></a> 
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