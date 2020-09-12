@extends('school.master')
@section('title',"Danh sách User")
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách User</h3>
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
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Created at</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $users)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $users->name}}</td>
                    <td>{{ $users->email}}</td>
                    <td>{{ date("d/m/Y - h:i:s", strtotime($users->created_at))}}</td>
                    <td><a href="{{ route('user.destroy',['id' => $users->id]) }}"onclick="return acceptDelete('Đống ý xoá?')" class="btn btn-danger">Xóa</a></td>
                    <td><a href="{{ route('user.edit',['id' => $users->id]) }}" class="btn btn-success">Sửa</a></td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    
        </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-outline-primary"><a href="{{ route('user.add') }}">Thêm User</a></button>
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection