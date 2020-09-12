@extends('school.master')
@section('title',"Thêm thông tin Giáo viên")
@section('content')
<!-- Default box -->
<form method="POST" action="{{ route('teacher.store') }}">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Thêm thông tin Giáo viên</h3>
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
                            <h3>Cảnh báo:</h3>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                </div>   

                <div class="form-group">
                    <label >Họ tên Giáo viên</label>
                    <div class="row">
                      <div class="col">
                        <input type="text" name="tengiaovien" class="form-control" placeholder="Họ và tên"  value="{{ old('tengiaovien') }}" >
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label> Giới tính</label>
                    <div class="col-sm-6">
                    <!-- radio -->
                    <div class="form-group">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gioitinh" value="0" checked="checked">
                        <label class="form-check-label"> &nbsp; &nbsp;Nam</label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gioitinh" value="1">
                        <label class="form-check-label">&nbsp; &nbsp;Nữ</label>
                        </div>
                    </div>
                    
                </div>

                <div class="form-group">
                <label>Ngày sinh</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" name="ngaysinh" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false"  value="{{ old('ngaysinh') }}" >
                </div>
                <!-- /.input group -->
                </div>
                
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Địa chỉ</label>
                <input type="text" name="diachi" class="form-control" placeholder="Địa chỉ"  value="{{ old('diachi') }}" >
                </div>

                <div class="form-group">
                    <label>Email</label>
  
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" name="gmail" class="form-control" placeholder="Email" value="{{ old('gmail') }}">
                      </div>
                    <!-- /.input group -->
                </div>
                
                <div class="form-group">
                    <label>Số điện thoại</label>
  
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      </div>
                      <input type="text" name="sdt" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true"  value="{{ old('sdt') }}" >
                    </div>
                    <!-- /.input group -->
                </div>
                
                <div class="form-group">
                    <label>Ngày tuyển dụng </label>
    
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="date" name="ngaytuyendung" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false"  value="{{ old('ngaytuyendung') }}" >
                    </div>
                    <!-- /.input group -->
                    </div>

                <div class="form-group">
                    <label>Chuyên môn</label>
                    <select name="sub_id" class="form-control" id="class"  >
                      <option value=""> __chọn môn học__ </option>
                      @foreach ($subjects as $sub)
                          <option value="{{$sub->id}}">{{$sub->tenmon}}</option>
                      @endforeach
                    </select>
                </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Giáo viên</button>
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</form>
@endsection
