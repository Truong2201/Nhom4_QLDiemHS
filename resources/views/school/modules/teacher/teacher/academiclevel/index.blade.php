@extends('school.master')
@section('title',"Danh sách trình độ học vấn")
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách trình độ học vấn</h3>
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
                    <th>Trình độ</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($academiclevels as $academiclevel)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $academiclevel->name}}</td>
                    <td><a href="{{ route('academiclevel.destroy',['id' => $academiclevel->id]) }}"onclick="return acceptDelete('Xóa?')">Xóa</a></td>
                    <td><a href="{{ route('academiclevel.edit',['id' => $academiclevel->id]) }}">Sửa</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <a href="{{ route('academiclevel.add')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Thêm trình độ học vấn</a>
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection