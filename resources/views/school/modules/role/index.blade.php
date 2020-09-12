@extends('school.master')
@section('title',"Danh sách Loại Người Dùng")
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách Loại Người Dùng</h3>
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
                    <th>Tên Loại Người Dùng</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $role->name}}</td>
                    <td><a href="{{ route('role.destroy',['id' => $role->id]) }}"onclick="return acceptDelete('Xóa loại người dùng này?') " class="btn btn-danger">Xóa</a></td>
                    <td><a href="{{ route('role.edit',['id' => $role->id]) }}"class="btn btn-success">Sửa</a></td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
        
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-outline-primary"><a href="{{ route('role.add') }}" >Thêm</a></button>
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection