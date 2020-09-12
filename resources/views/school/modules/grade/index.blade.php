@extends('school.master')
@section('title',"Danh sách Khối")
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách Khối</h3>
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
                    <th>Mã Khối</th>
                    <th>Tên Khối</th>
                    <th>Created at</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grades as $grade)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $grade->makhoi}}</td>
                    <td>{{ $grade->tenkhoi}}</td>
                    <td>{{ date("d/m/Y - h:i:s", strtotime($grade->created_at))}}</td>
                    <td><a href="{{ route('grade.destroy',['id' => $grade->id]) }}"onclick="return acceptDelete('Xóa khối này?') " class="btn btn-danger">Xóa</a></td>
                    <td><a href="{{ route('grade.edit',['id' => $grade->id]) }}"class="btn btn-success">Sửa</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-outline-primary"><a href="{{ route('grade.add') }}" >Thêm Khối</a></button>
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection