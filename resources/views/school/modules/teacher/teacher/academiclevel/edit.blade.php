@extends('school.master')
@section('title',"Sửa trình độ học vấn")
@section('content')
<!-- Default box -->
<form method="POST" action="{{ route('academiclevel.update',['id' => $academiclevel->id]) }}">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sửa trình độ học vấn</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Nhập chức vụ</label>
                <input type="text" name="name" class="form-control" placeholder="Chức vụ" value="{{ $academiclevel->name }}" required="">
                </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</form>
@endsection