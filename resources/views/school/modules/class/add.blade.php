@extends('school.master')
@section('title',"Thêm Lớp")
@section('content')
<!-- Default box -->
<form method="POST" action="{{ route('class.store') }}">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Thêm Lớp</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            
            <div class="form-group">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <h3>Cảnh báo</h3>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
            </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Mã Lớp</label>
                    <input type="text" name="malop" class="form-control" placeholder="Nhập mã lớp"  >
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Tên Lớp</label>
                <input type="text" name="tenlop" class="form-control" placeholder="Nhập tên lớp"  >
                </div>
                <div>
                <label for="exampleInputEmail1">Sỉ số</label>
                <input type="text" name="siso" class="form-control" placeholder="Nhập sỉ số lớp"  >
                </div>
                <div class="form-group">
                    <label>Chọn khối</label>
                    <select name="grade_id" class="form-control"  >
                      <option value=""> __chọn khối__ </option>
                      @foreach ($grades as $grade)
                          <option value="{{$grade->id}}">{{$grade->tenkhoi}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Năm Học</label>
                    <select name="schoolyear_id" class="form-control"  >
                      <option value=""> __Năm Học__ </option>
                      @foreach ($schoolyear as $schoolyear)
                          <option value="{{$schoolyear->id}}">start:{{$schoolyear->start}} - end: {{$schoolyear->end}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Chọn Giáo Viên</label>
                    <select name="teachers_id" class="form-control"  >
                      <option value=""> __Giáo Viên Chủ Nhiệm__ </option>
                      @foreach ($teachers as $teacher)
                          <option value="{{$teacher->id}}">{{$teacher->tengiaovien}}</option>
                      @endforeach
                    </select>
                </div>
            
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Lớp</button>
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</form>
@endsection