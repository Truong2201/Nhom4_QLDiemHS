@extends('school.master')
@section('title',"Sửa thông tin Học sinh")
@section('content')
<!-- Default box -->
<form method="POST" action="{{ route('student.update',['id' => $student->id]) }}">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sửa thông tin Học Sinh</h3>
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
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
          </div>

          <div class="form-group">
              <label for="exampleInputEmail1">Mã Học sinh</label>
              <input type="text" name="mahs" class="form-control" placeholder="Nhập mã Học sinh" value="{{ $student->mahs }}">
          </div>

          <div class="form-group">
              <label for="exampleInputEmail1">Họ tên Học sinh</label>
              <div class="row">
                <div class="col-4">
                  <input type="text" name="hohs" class="form-control" placeholder="Họ" value="{{ $student->hohs }}">
                </div>
                <div class="col-5">
                  <input type="text" name="tenhs" class="form-control" placeholder="Tên" value="{{ $student->tenhs }}">
                </div>
              </div>
          </div>
          
          <div class="form-group">
              <label>Số điện thoại</label>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-phone"></i></span>
                </div>
                <input type="text" name="phone" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true" value="{{ $student->phone }}">
              </div>
              <!-- /.input group -->
          </div>

          <div class="col-sm-6">
          <!-- radio -->
          <div class="form-group">
              <div class="form-check">
              <input class="form-check-input" type="radio" name="gioitinh" value="0" {{ ($student->gioitinh == 0) ? 'checked' : ''}}>
              <label class="form-check-label"> &nbsp; &nbsp;Nam</label>
              </div>
              <div class="form-check">
              <input class="form-check-input" type="radio" name="gioitinh" value="1" {{ ($student->gioitinh == 1) ? 'checked' : ''}}>
              <label class="form-check-label">&nbsp; &nbsp;Nữ</label>
              </div>
          </div>

          <div class="form-group">
          <label>Ngày sinh</label>

          <div class="input-group">
              <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
              </div>
              <input type="date" name="ngaysinh" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false" value="{{ $student->ngaysinh }}">
          </div>
          <!-- /.input group -->
          </div>
          
          </div>
          <div class="form-group">
          <label for="exampleInputEmail1">Quê quán</label>
          <input type="text" name="quequan" class="form-control" placeholder="Quê quán" value="{{ $student->quequan }}">
          </div>
      
          <div class="form-group">
            <label >Họ tên Cha</label>
            <div class="row">
              <div class="col">
                <input type="text" name="hotencha" class="form-control" placeholder="Họ Tên Cha"  value="{{ $student->hotencha }}" >
                </div>
            </div>
        </div>
        <div class="form-group">
            <label >Nghề Nghiệp Cha</label>
            <div class="row">
              <div class="col">
                <input type="text" name="nghenghiepcha" class="form-control" placeholder="Nghề Nghiệp Cha"  value="{{ $student->nghenghiepcha }}" >
                </div>
            </div>
        </div>
        <div class="form-group">
            <label >Họ tên Mẹ</label>
            <div class="row">
              <div class="col">
                <input type="text" name="hotenme" class="form-control" placeholder="Họ Tên Mẹ"  value="{{ $student->hotenme }}" >
                </div>
            </div>
        </div>
        <div class="form-group">
            <label >Nghề Nghiệp Mẹ</label>
            <div class="row">
              <div class="col">
                <input type="text" name="nghenghiepme" class="form-control" placeholder="Nghề Nghiệp Mẹ"  value="{{ $student->nghenghiepme }}" >
                </div>
            </div>
        </div>
        

          <div class="form-group">
              <label>Chọn lớp</label>
              <select name="class_id" class="form-control" required="">
                <option value=""> __chọn lớp__ </option>
                @foreach ($classes as $class)
                    <option value="{{$class->id}}"                            
                      @if ($class->id == $student->class_id)
                          selected
                      @endif
                      >{{$class->tenlop}}</option>
                @endforeach
              </select>
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