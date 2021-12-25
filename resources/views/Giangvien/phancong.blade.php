@extends('adminlte::page')

@section('title', 'detai manager')

@section('content_header')
    <h1>Đề tài phân công</h1>
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
                      <th>Lĩnh vực</th>
                      <th>Sản phẩm</th>
                      <th>Điểm số</th>

                    </tr>
                  </thead>
                  <tbody>
                      @php
                      $stt=1;
                      @endphp
                      @foreach($phancongs as $phancong)
                    <tr>
                      <td>{{$phancong->msdt}}</td>
                      <td>{{$phancong->tendetai}}</td>
                      <td>{{$phancong->linhvuc}}</td>
                      <td>{{$phancong->filename}}</td>
                    <td>{{$phancong->diemso}}</td>   
                      <td><a href="{{route('giangviennghiemthu.edit',$phancong->id)}}"><button type="submit" class="btn btn-primary" value="Delete">Chấm điểm</button></a></td>
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