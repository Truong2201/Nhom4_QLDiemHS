@extends('school.master')
@section('title',"Danh sách Giáo viên")
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách Giáo viên</h3>
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
                    <th>Họ và tên</th>
                    <th>Giới tính</th>
                    <th>Chuyên môn</th>
                    <th>Email</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $teacher->tengiaovien}}</td>                    
                    <td>
                        @if ($teacher->gioitinh == 0)
                            Nam
                        @else
                            Nữ
                        @endif
                    </td>
                    <td>{{ $teacher->subject->tenmon}}</td>
                    <td>{{ $teacher->gmail }}</td>
                    <td><a href="{{ route('teacher.destroy',['id' => $teacher->id]) }}"onclick="return acceptDelete('Xóa Giáo viên này?')" class="btn btn-danger">Xóa</a></td>
                    <td><a href="{{ route('teacher.edit',['id' => $teacher->id]) }}" class="btn btn-success">Sửa</a></td>
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