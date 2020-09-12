@extends('school.master')
@section('title',"Thêm User")
@section('content')
<!-- Default box -->
<form method="POST" action="{{ route('user.store') }}">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Thêm User</h3>
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
                    <label for="exampleInputEmail1">Tên</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Nhập email" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Mật khẩu</label>
                <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Xác nhận mật khẩu</label>
                    <input type="password" name="cfm_password" class="form-control" placeholder="Xác nhận mật khẩu" >
                    </div>
                <div class="form-group">
                    <label>Chọn Loại người dùng</label>
                    @foreach($roles as $role)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1" name="roles[]" value="{{$role->id}}">
                        <label class="form-check-label" for="gridCheck1">&nbsp; &nbsp;{{ $role->name }}</label>
                    </div>
                    @endforeach
                </div>
            
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" href="{{ route('user.add') }}">Thêm </button>
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</form>
@endsection