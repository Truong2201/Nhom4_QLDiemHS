@extends('school.master')
@section('title',"Bảng điểm lớp")
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Học kỳ II</h3>
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
                    <th> Sửa </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($semester2s as $semester2)
                <tr>
                    <td> 1 </td>
                    <td>Nguyễn Văn A</td>
                    <td>{{ $semester2->m1}}</td>
                    <td>{{ $semester2->m2}}</td>
                    <td>{{ $semester2->m3}}</td>
                    <td>{{ $semester2->m4}}</td>
                    <td>{{ $semester2->m5}}</td>
                    <td>{{ $semester2->d15p1}}</td>
                    <td>{{ $semester2->d15p2}}</td>
                    <td>{{ $semester2->d15p3}}</td>
                    <td>{{ $semester2->d15p4}}</td>
                    <td>{{ $semester2->d15p5}}</td>
                    <td>{{ $semester2->d1t1}}</td>
                    <td>{{ $semester2->d1t2}}</td>
                    <td>{{ $semester2->d1t3}}</td>
                    <td>{{ $semester2->d1t4}}</td>
                    <td>{{ $semester2->d1t5}}</td>
                    <td>{{ $semester2->tbm}}</td>                    
                    <td><a href="{{ route('semester2.edit',['id' => $semester2->id]) }}">Cập nhật</a></td>
                    {{-- <td><a href="{{ route('semester2.destroy',['id' => $semester2->id]) }}"onclick="return acceptDelete('Xóa học sinh này?')">Xóa</a></td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">

    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection