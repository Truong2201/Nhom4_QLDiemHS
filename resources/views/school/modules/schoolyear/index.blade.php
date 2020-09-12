@extends('school.master')
@section('title',"Danh sách Năm Học")
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách Năm Học</h3>
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
                    <th>Mã Năm Học</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Ngày tạo</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schoolyear as $schoolyear)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $schoolyear->mahanhkiem}}</td>
                    <td>{{ $schoolyear->start}}</td>
                    <td>{{ $schoolyear->end}}</td>
                    <td>{{ date("d/m/Y - h:i:s", strtotime($schoolyear->created_at))}}</td>
                    <td><a href="{{ route('schoolyear.destroy',['id' => $schoolyear->id]) }}"onclick="return acceptDelete('Xóa năm học này?') " class="btn btn-danger">Xóa</a></td>
                    <td><a href="{{ route('schoolyear.edit',['id' => $schoolyear->id]) }}"class="btn btn-success">Sửa</a></td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
        
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-outline-primary"><a href="{{ route('schoolyear.add') }}" >Thêm</a></button>
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection