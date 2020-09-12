@extends('school.master')
@section('title',"Danh sách Lớp")
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách Lớp</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Mã Lớp</th>
                    <th>Tên Lớp</th>
                    <th>Sỉ số</th>
                    <th>Tên Khối</th>
                    <th>Mã Giáo viên</th>
                    <th>Created at</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classes as $class)
                <tr> 
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $class->malop}}</td>
                    <td>{{ $class->tenlop}}</td>
                    <td>{{ $class->siso}}</td>
                    <td>{{ $class->grade_id}}</td>
                    <td>{{ $class->teacher->tengiaovien}}</td>
                    <td>{{ date("d/m/Y - h:i:s", strtotime($class->created_at))}}</td>
                    <td><a href="{{ route('class.destroy',['id' => $class->id]) }}"onclick="return acceptDelete('Xóa lớp này?')" class="btn btn-danger">Xóa</a></td>
                    <td><a href="{{ route('class.edit',['id' => $class->id]) }}" class="btn btn-success">Sửa</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-outline-primary"><a href="{{ route('class.add') }}">Thêm Lớp</a></button>
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection