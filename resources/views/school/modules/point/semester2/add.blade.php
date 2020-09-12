@extends('school.master')
@section('title',"Nhập điểm Học kỳ II")
@section('content')
<!-- Default box -->
<form method="POST" action="{{ route('semester2.store') }}">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Nhập điểm Học kỳ II</h3>
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
                        <th>Họ và tên</th>
                        <th colspan="5">Điểm miệng</th>
                        <th colspan="5">Điểm 15'</th>
                        <th colspan="5">Điểm 1 tiết</th>
                        <th> Điểm TB </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nguyễn Văn A</td>
                        <td><input type="text" name="m1" ></td>
                        <td><input type="text" name="m2" ></td>
                        <td><input type="text" name="m3"></td>
                        <td><input type="text" name="m4"></td>
                        <td><input type="text" name="m5"></td>
                        <td><input type="text" name="d15p1"></td>
                        <td><input type="text" name="d15p2"></td>                        
                        <td><input type="text" name="d15p3"></td>
                        <td><input type="text" name="d15p4"></td>
                        <td><input type="text" name="d15p5"></td>
                        <td><input type="text" name="d1t1"></td>
                        <td><input type="text" name="d1t2"></td>                        
                        <td><input type="text" name="d1t3"></td>
                        <td><input type="text" name="d1t4"></td>
                        <td><input type="text" name="d1t5"></td>
                        <td><input type="text" name="tbm"></td>
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