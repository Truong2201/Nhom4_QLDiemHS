@extends('school.master')
@section('title',"Sửa Năm Học")
@section('content')
<!-- Default box -->
<form method="POST" action="{{ route('schoolyear.update',['id' => $schoolyear->id]) }}">
@csrf
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa Năm Học</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    
    <br>
    <hr>
    <div class="form-group">
        <label for="exampleInputEmail1">Mã Năm Học</label>
        <input type="text" name="mahanhkiem" class="form-control" placeholder="Nhập mã năm học" value ="{{ $schoolyear->mahanhkiem }}">
    </div>

    <div class="form-group">
        <label>Start </label>

        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
            </div>
            <input type="date" name="start" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false"  value="{{ $schoolyear->start }}" >
        </div>
        <!-- /.input group -->
        </div>
        <div class="form-group">
            <label>End</label>

            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input type="date" name="end" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false"  value="{{ $schoolyear->end}}" >
            </div>
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