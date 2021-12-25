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
                    <div style="text-align: right;"><a href="Detai/Them"><button type="submit" class="btn btn-primary" value="Delete">Thêm</button></a></div>
                    
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
                  <tbody >
                    @php
                      $stt=1;
                    @endphp
                      @foreach($detais as $detai)
                    <tr>
                      <td>{{$stt++}}  </td>
                      <td>{{$detai->msdt}}</td>
                      <td>{{$detai->tendetai}}</td>
                      <td>{{$detai->thoigiandangky}}</td>
                      <td>{{$detai->thoigiannop}}</td>
                      <td>{{$detai->linhvuc}}</td>


                      <td>
                        <a href="{{route('admindetai.edit',$detai->id)}}"><button type="submit" class="btn btn-primary" value="Delete">Sửa</button></a>
                      </td>
                      <td>
                        <form action="{{route('admindetai.destroy',$detai->id)}}" method="POST">
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



            
<h3>Xin gia hạn</h3>
            <div class="card">
              
              <!-- /.card-header -->
            
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th >STT</th>
                      <th style="width: 10px">tên sinh viên</th>
                      <th style="width: 10px">Mã sinh viên</th>
                      <th style="width: 10px">Mã đề tài</th>
                      <th>Tên đề tài</th>
                      <th>Thời gian đăng ký</th>
                      <th>Thời gian nộp</th>
                      
                      <th>lý do</th>
                      <td></td>
                      

                    </tr>
                  </thead>
                  <tbody >
                    @php
                      $stt=1;
                    @endphp
                      @foreach($xingiahans as $xingiahan)
                    <tr>
                      <td>{{$stt++}}  </td>
                      <td>{{$xingiahan->namesv}}</td>
                      <td>{{$xingiahan->masvv}}</td>
                      <td>{{$xingiahan->msdt}}</td>
                      <td>{{$xingiahan->tendetai}}</td>
                      <td>{{$xingiahan->thoigiandangky}}</td>
                      <td>{{$xingiahan->thoigiannop}}</td>
                      <td>{{$xingiahan->lydo}}</td>
                      <td>
                        <a href="{{route('adminxingiahan.edit',$xingiahan->id)}}"><button type="submit" class="btn btn-primary">Duyệt</button></a>
                      </td>
                      <td>
                        <form action="{{route('adminxingiahan.destroy',$xingiahan->id)}}" method="POST">
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
            
            <h3>Danh sách đề tài nộp</h3>
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
                      <th style="width: 10px">Họ tên</th>
                      <th style="width: 10px">Mã sinh viên</th>
                      <th style="width: 10px">Mã đề tài</th>
                      <th>Tên đề tài</th>
                     
                      <th>Thời gian đăng ký</th>
                      <th>Thời gian nộp</th>
                      
                      <th>Sản phẩm</th>
                      <td></td>
                      

                    </tr>
                  </thead>
                  <tbody >
                    @php
                      $stt=1;
                    @endphp
                      @foreach($mydetais as $mydetai)
                    <tr>
                      <td>{{$stt++}}  </td>
                      <td>{{$mydetai->name}}</td>
                      <td>{{$mydetai->masv}}</td>
                      <td>{{$mydetai->msdt}}</td>
                      <td>{{$mydetai->tendetai}}</td>
                      <td>{{$mydetai->thoigiandangky}}</td>
                      <td>{{$mydetai->thoigiannop}}</td>
                      <td></td>
                      <td>
                      <a href="{{route('admin.nghiemthu.edit',$mydetai->id)}}"> <button  type="submit" class="btn btn-primary">Phân công</button></a>
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