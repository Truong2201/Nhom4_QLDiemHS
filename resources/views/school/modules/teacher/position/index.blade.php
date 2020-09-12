@extends('school.master')
@section('title',"Danh sách Chức vụ")
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách Chức vụ</h3>
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
                    <th>Chức vụ</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($positions as $position)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $position->name}}</td>
                    <td><a href="{{ route('position.destroy',['id' => $position->id]) }}"onclick="return acceptDelete('Xóa?')" class="btn btn-danger">Xóa</a></td>
                    <td><a href="{{ route('position.edit',['id' => $position->id]) }}" class="btn btn-success">Sửa</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <a href="{{ route('position.add')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Thêm chức vụ</a>
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection