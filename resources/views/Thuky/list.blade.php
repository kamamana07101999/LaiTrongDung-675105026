@extends('adminlte::page')

@section('title', 'detai manager')

@section('content_header')
    <h1>báo cáo</h1>
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
                      <th style="width: 10px">Mã số hội đồng</th>
                      <th>Mã đề tài</th>
                      <th>Tên đề tài</th>
                      <th>Mã sinh viên</th>
                      <th>Tên sinh viên</th>
                      <th>Sản phẩm</th>
                    

                    </tr>
                  </thead>
                  @php
                  $stt=1;
                  @endphp
                  <tbody>
                      @foreach($baocaos as $nghiemthudanhgia)
                    <tr>
                      <td>{{$stt++}}</td>
                      <td>{{$nghiemthudanhgia->mshoidong}}</td>
                      <td>{{$nghiemthudanhgia->msdt}}</td>
                      <td>{{$nghiemthudanhgia->tendetai}}</td>
                      <td>{{$nghiemthudanhgia->masv }}</td>
                      <td>{{$nghiemthudanhgia->name}}</td>
                      <td>{{$nghiemthudanhgia->filename}}</td>
                    
                      
                      <td>
                              <button type="submit" class="btn btn-primary" value="Delete">Báo cáo</button>
                

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