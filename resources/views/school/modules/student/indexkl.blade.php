@extends('school.master')
@section('title',"Danh sách Học sinh")
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách Học sinh</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    
    <div class="card-body">
        <div class="form-group alert alert-secondary" role="alert">
            <label style="color: yellow">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chọn Khối , Chọn Lớp</label>
            <div class="row">
              <div class="col-5">
                    <select name="gradesearch" class="form-control" data-url="{{route('loadGrade')}}">
                      <option value=""> Vui Lòng Chọn Khối </option>
                      @foreach ($grade as $gr)
                          <option value="{{$gr->id}}">{{$gr->tenkhoi}}</option>
                      @endforeach
                    </select>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col-5">
                    <select name="classsearch" class="form-control" data-url="{{route('loadClass')}}">
                      <option value=""> Vui Lòng Chọn Lớp </option>
                      @foreach ($class as $class)
                        <option value="{{$class->id}}">{{$class->tenlop}}</option>
                      @endforeach
                    </select>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {{-- <td><button type="submit" id="'.$c->id.'" data="'.$c->class_id.'" data-url="'.route('student.destroy').'" name="classsearch" class=" btn btn-danger p-1" style="margin-left: 10px;font-size: 12px;" >Xóa</button></td></tr>'; --}}
            </div>
        </div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Mã Học sinh</th>
                        <th>Họ</th>
                        <th>Tên</th>
                        <th>Giới tính</th>
                        <th>Ngày Sinh</th>
                        <th>Created</th>
                        {{-- <th>Quê Quán</th> --}}
                        {{-- <th>Lớp</th> --}}
                        {{-- <th>Xóa</th>
                        <th>Sửa</th>
                        <th>Chi tiết</th> --}}
                    </tr>
                </thead>
                <tbody id="asd">
                    {{-- @foreach ($students as $student )
                    <tr>
                        <td>{{ $student->id}}</td>
                        <td>{{ $student->mahs}}</td>
                        <td>{{ $student->hohs}} {{ $student->tenhs}}</td>
                        <td>
                            @if ($student->gioitinh == 0)
                                Nam
                            @else
                                Nữ
                            @endif
                        </td> --}}
                        {{-- <td>{{ $student->quequan}}</td>
                        <td>{{ $student->class->id}}</td>

                        <td><a href="{{ route('student.destroy',['id' => $student->id]) }}"onclick="return acceptDelete('Xóa học sinh này?')" class="btn btn-danger">Xóa</a></td>
                        <td><a href="{{ route('student.edit',['id' => $student->id]) }}" class="btn btn-success">Sửa</a></td>
                        <td><a href="{{ route('student.dashboard',['id' => $student->id]) }}" class="btn btn-warning">Chi tiết</a></td> --}}
                    {{-- </tr>
                    @endforeach --}}
                </tbody>
            </table>
        <script language="JavaScript" type="text/javascript" src="{{asset('admin/plugins/jquery/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('danhsach.js')}}"></script>
    </div>    
    <!-- /.card-body -->
    <div class="card-footer">
        
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->

@endsection