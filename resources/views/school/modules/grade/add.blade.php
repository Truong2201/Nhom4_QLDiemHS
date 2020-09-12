@extends('school.master')
@section('title',"Thêm Khối")
@section('content')
<!-- Default box -->
<form method="POST" action="{{ route('grade.store') }}">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Thêm Khối</h3>
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
                    <label for="exampleInputEmail1">Mã Khối</label>
                    <input type="text" name="makhoi" class="form-control" placeholder="Nhập mã khối" value ="{{old('makhoi')}}">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Tên Khối</label>
                <input type="text" name="tenkhoi" class="form-control" placeholder="Nhập tên khối" value ="{{old('tenkhoi')}}">
                </div>
            
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Khối</button>
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</form>
@endsection