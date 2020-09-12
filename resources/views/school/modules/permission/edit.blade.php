@extends('school.master')
@section('title',"Sửa Phân quyền")
@section('content')
<!-- Default box -->
<form method="POST" action="{{ route('permission.update',['id' => $permissions->id]) }}">
@csrf
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa Phân quyền</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">

        <div class="form-group">
            <label for="exampleInputEmail1">Mã Phân quyền</label>
            <input type="text" name="name" class="form-control" placeholder="Nhập tên loại người dùng"value="{{ $permissions->name }}">
        </div>        

        <div class="form-group">
            <label for="exampleInputEmail1">Tên Phân quyền</label>
            <input type="text" name="dname" class="form-control" placeholder="Nhập tên loại người dùng" value ="{{ $permissions->dname}}">
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Hoàn tất</button>
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
</form>
@endsection