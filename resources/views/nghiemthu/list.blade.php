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
                    
                    <tr>
                      <th style="width: 10px">STT</th>
                      <th style="width: 10px">Mã số hội đồng</th>
                      <th>Mã đề tài</th>
                      <th>Tên đề tài</th>
                      <th>Phản biện 1</th>
                      <th>Phản biện 2</th>
                      <th>Phản biện 3</th>
                      <th>Thư ký</th>

                    </tr>
                  </thead>
                  @php
                  $stt=1;
                  @endphp
                  <tbody>
                      @foreach($nghiemthudanhgias as $nghiemthudanhgia)
                    <tr>
                      <td>{{$stt++}}</td>
                      <td>{{$nghiemthudanhgia->mshoidong}}</td>
                      <td>{{$nghiemthudanhgia->msdt}}</td>
                      <td>{{$nghiemthudanhgia->tendetai}}</td>
                      <td>{{$nghiemthudanhgia->phanbien1 }}</td>
                      <td>{{$nghiemthudanhgia->phanbien2}}</td>
                      <td>{{$nghiemthudanhgia->phanbien3}}</td>
                      <td>{{$nghiemthudanhgia->thuky }}</td>
                      
                      <td><form action="{{route('adminnghiemthu.destroy',$nghiemthudanhgia->id)}}" method="POST">
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