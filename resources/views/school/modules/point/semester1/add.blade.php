@extends('school.master')
@section('title',"Nhập điểm Học kỳ I")
@section('content')
<!-- Default box -->
<form method="POST" action="{{ route('semester1.store') }}">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Nhập điểm Học kỳ I</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Họ tên</th>
                        <th colspan="1">CC</th>
                        <th colspan="1">TX</th>
                        <th colspan="1">GK</th>
                        <th colspan="1">CK</th>
                        <th colspan="1">Tổng</th>
                        <th colspan="1">RL</th>
                        <th colspan="1">HS CC</th>
                        <th colspan="1">HS TX</th>
                        <th colspan="1">HS GK</th>
                        <th colspan="1">HS CK</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nguyễn Văn A</td>
                        <td><input type="text" name="diemcc" ></td>
                        <td><input type="text" name="diemtx" ></td>
                        <td><input type="text" name="diemgk"></td>
                        <td><input type="text" name="diemck"></td>
                        <td><input type="text" name="diemtong"></td>
                        <td><input type="text" name="diemrl"></td>
                        <td><input type="text" name="hesodiemcc"></td>                        
                        <td><input type="text" name="hesodiemtx"></td>
                        <td><input type="text" name="hesodiemgk"></td>
                        <td><input type="text" name="hesodiemck"></td>
                    </tr>                    
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</form>
@endsection