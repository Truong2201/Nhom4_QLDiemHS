@extends('school.master')
@section('title',"Sửa thông tin Môn học")
@section('content')
<!-- Default box -->
<form method="POST" action="{{ route('subject.update',['id' => $subjects->id]) }}">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sửa thông tin Môn học</h3>
        </div>
        <div class="card-body">
            
            <div class="form-group"> 
                <label>Mã Môn Học</label> 
                <input type="text" name="mamon" class="form-control" placeholder="Nhập Mã Môn" value="{{ $subjects->mamon }}">
            </div>
                               
            <div class="form-group"> 
                <label>Tên Môn Học</label> 
                <input type="text" name="tenmon" class="form-control" placeholder="Nhập Tên Môn" value="{{ $subjects->tenmon }}">   
            </div>

            <div class="form-group"> 
                <label>Số tiết</label> 
                <input type="text" name="sotiet" class="form-control" placeholder="Nhập Số Tiết" value="{{ $subjects->sotiet }}">   
            </div>
            <div class="form-group"> 
                <label>Hệ Số</label> 
                <input type="text" name="heso" class="form-control" placeholder="Nhập Hệ số" value="{{ $subjects->heso }}">   
            </div>
        </div>    
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary"> Hoàn tất </button>
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</form>
@endsection