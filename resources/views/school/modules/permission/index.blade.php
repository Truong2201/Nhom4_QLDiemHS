@extends('school.master')
@section('title',"Danh sách Loại Người Dùng")
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách quyền</h3>
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
                    <th>Tên Phân quyền</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $permission->dname}}</td>
                    <td><a href="{{ route('permission.destroy',['id' => $permission->id]) }}"onclick="return acceptDelete('Xóa quyền này?') " class="btn btn-danger">Xóa</a></td>
                    <td><a href="{{ route('permission.edit',['id' => $permission->id]) }}"class="btn btn-success">Sửa</a></td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
        
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-outline-primary"><a href="{{ route('permission.add') }}" >Thêm</a></button>
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection