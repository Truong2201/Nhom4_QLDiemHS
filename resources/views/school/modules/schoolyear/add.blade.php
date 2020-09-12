@extends('school.master')
@section('title',"Thêm Năm Học")
@section('content')
<!-- Default box -->
<form method="POST" action="{{ route('schoolyear.store') }}">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Thêm Năm Học</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <h3>Cảnh báo</h3>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
            </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã Năm Học</label>
                    <input type="text" name="mahanhkiem" class="form-control" placeholder="Nhập mã năm học" value ="{{old('mahanhkiem')}}">
                </div>

                <div class="form-group">
                    <label>Start </label>
    
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="date" name="start" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false"  value="{{ old('start') }}" >
                    </div>
                    <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>End</label>
        
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="date" name="end" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false"  value="{{ old('end') }}" >
                        </div>
                        <!-- /.input group -->
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