@extends('school.master')
@section('title',"Thêm Loại Người Dùng")
@section('content')
<!-- Default box -->
<form method="POST" action="{{ route('role.store') }}">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Thêm Loại Người Dùng</h3>
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
                <label for="exampleInputEmail1">Loại Người Dùng</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập tên loại người dùng" value ="{{old('name')}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Phân quyền</label>
                    @foreach ($permissions as $permission)
                        <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="permission[]" value="{{ $permission->id}}">
                                <label class="form-check-label">&nbsp; &nbsp;{{ $permission->dname}}</label>
                              </div>
                        </div>
                    @endforeach

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