@extends('school.master')
@section('title',"Nguyễn Văn A")
@section('content')
<!-- Default box -->
    {{-- <style>
        th, td {
        padding: 5px;
        text-align: center;    
        }
    </style> --}}

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Quá trình học tập</h3>
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
                <th colspan="3">Học kỳ I</th>
                <th colspan="3">Học kỳ II</th>
                <th colspan="3">Cả năm</th>                
            </thead>
            <tbody>
                <tr>
                    <td>TB</td>
                    <td>HL</td>
                    <td>HK</td>
                    <td>TB</td>
                    <td>HL</td>
                    <td>HK</td>
                    <td>TB</td>
                    <td>HL</td>
                    <td>HK</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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
                    <th>Môn học</th>
                    <th colspan="5" >Điểm miệng</th>
                    <th colspan="5">Điểm 15'</th>
                    <th colspan="5">Điểm 1 tiết</th>
                    <th> Điểm TB </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($semester2s as $semester2)
                <tr>
                    {{-- <td> 1 </td>
                    <td text-align="center">Toán</td>
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
                    <td>{{ $semester2->tbm}}</td> --}}
                    <td> 1 </td>
                    <td text-align="center">Toán</td>
                    <td>{{ $semester2->madiem}}</td>
                    <td>{{ $semester2->diemcc}}</td>
                    <td>{{ $semester2->diemtx}}</td>
                    <td>{{ $semester2->diemgk}}</td>
                    <td>{{ $semester2->diemck}}</td>
                    <td>{{ $semester2->diemtong}}</td>
                    <td>{{ $semester2->diemrl}}</td>
                    <td>{{ $semester2->HeSodiemcc}}</td>
                    <td>{{ $semester2->HeSodiemtx}}</td>
                    <td>{{ $semester2->HeSodiemgk}}</td>
                    <td>{{ $semester2->HeSodiemck}}</td>
                </tr>

                <tr>
                    <td> 2 </td>
                    <td text-align="center">Vật lí</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                
                <tr>
                    <td> 3 </td>
                    <td text-align="center">Hóa học</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td> 4 </td>
                    <td text-align="center">Sinh học</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td> 2 </td>
                    <td text-align="center">Vật lí</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td> 5 </td>
                    <td text-align="center">Tin học</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td> 6 </td>
                    <td text-align="center">Ngữ văn</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td> 7 </td>
                    <td text-align="center">Lịch sử</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td> 8 </td>
                    <td text-align="center">Địa lí</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td> 9 </td>
                    <td text-align="center">Tiếng Anh</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td> 10 </td>
                    <td text-align="center">GDCD</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td> 11 </td>
                    <td text-align="center">Công Nghệ</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td> 12 </td>
                    <td text-align="center">Thể dục</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td> 13 </td>
                    <td text-align="center">GDQP AN</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td> 14 </td>
                    <td text-align="center">Nghề PT</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <hr>        
    {{-- </table id="example1" class="table table-bordered table-striped">
        <tr>
            <th>Các môn học tốt nhất</th>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th>Các môn học kém nhất</th>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    <table> --}}
    </div>
    <!-- /.card-body -->
    <div class="card-footer">

    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection