@extends('school.master')
@section('title',"Danh sách Môn học")
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách Môn học</h3>
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
                    <th>Mã Môn học</th>
                    <th>Tên Môn học</th>
                    <th>Số tiết</th>
                    <th>Hệ số</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $subject->mamon}}</td>
                    <td>{{ $subject->tenmon}}</td>
                    <td>{{ $subject->sotiet}}</td>
                    <td>{{ $subject->heso}}</td> 
                    <td><a href="{{ route('subject.edit',['id' => $subject->id]) }}"class="btn btn-success">Sửa</a></td>
                    <td><a href="{{ route('subject.destroy',['id' => $subject->id]) }}"onclick="return acceptDelete('Xóa môn học này?')"class="btn btn-danger">Xóa</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    <!-- /.card-body -->
    <div class="card-footer">

    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection