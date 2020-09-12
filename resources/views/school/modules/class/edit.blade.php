@extends('school.master')
@section('title',"Sửa Lớp")
@section('content')
<!-- Default box -->
<form method="POST" action="{{ route('class.update',['id' => $classes->id]) }}">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sửa Lớp</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã Lớp</label>
                    <input type="text" name="malop" class="form-control" placeholder="Nhập mã lớp" value="{{ $classes->malop }}">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Tên Lớp</label>
                <input type="text" name="tenlop" class="form-control" placeholder="Nhập tên lớp" value="{{ $classes->tenlop }}">
                &nbsp;
                <input type="text" name="siso" class="form-control" placeholder="Nhập sỉ số lớp" value="{{ $classes->siso }}">
                <div class="form-group">
                    <label>Chọn khối</label>
                    <select name="grade_id" class="form-control" required="">
                      <option value=""> __chọn Khối__ </option>
                      @foreach ($grades as $grade)
                          <option value="{{$grade->id}}"
                            @if ($grade->id == $classes->grade_id)
                                selected
                            @endif
                            >{{$grade->tenkhoi}}</option>
                            {{-- <option value="{{$grade->id}}">{{$grade->tenkhoi}}</option> --}}
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Chọn Giáo viên</label>
                    <select name="teachers_id" class="form-control" required="">
                      <option value=""> __Giáo Viên Chủ Nhiệm__ </option>
                      @foreach ($teachers as $teacher)
                          <option value="{{$teacher->id}}">{{$teacher->tengiaovien}}</option>
                      @endforeach
                    </select>
                </div>
            
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Sửa</button>
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</form>
@endsection