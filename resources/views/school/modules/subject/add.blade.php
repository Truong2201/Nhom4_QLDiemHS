@extends('school.master')
@section('title',"Thêm thông tin Môn học")
@section('content')
<!-- Default box -->
<form method="POST" action="{{ route('subject.store') }}">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Thêm thông tin Môn học</h3>
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
                <label>Mã Môn Học</label> 
                <input type="text" name="mamon" class="form-control" placeholder="Nhập Mã Môn" value="{{ old('mamon') }}" >
            </div>
                               
            <div class="form-group"> 
                <label>Tên Môn Học</label> 
                <input type="text" name="tenmon" class="form-control" placeholder="Nhập Tên Môn" value="{{ old('tenmon') }}">   
            </div>

            <div class="form-group"> 
                <label>Số tiết</label> 
                <input type="text" name="sotiet" class="form-control" placeholder="Nhập Số Tiết" value="{{ old('sotiet') }}">   
            </div>
            <div class="form-group"> 
                <label>Hệ Số</label> 
                <input type="text" name="heso" class="form-control" placeholder="Nhập Hệ số" value="{{ old('heso') }}">   
            </div>

        </div> 
        
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary"> Thêm Vào </button>
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</form>
@endsection