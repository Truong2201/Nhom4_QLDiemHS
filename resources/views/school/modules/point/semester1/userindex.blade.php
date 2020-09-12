@extends('school.master')
@section('title',"Sửa điểm")
@section('content')
<div class="row">
    {{--{!! Form:: !!}--}}
    <form method="post" id="search-form">
        <div class="col-md-8">
            <div class="btn btn-flat fix-box" style="margin: 0;padding: 0 0 0 12px;">
                <select name="search_lop" id="search_lop" class="form-control">
                    <option>--Chọn lớp--</option>
                    @foreach(App\LClass::pluck('tenlop','malop')->all() as $key=>$val)
                        <option value="{{$key}}">{{$val}}</option>
                    @endforeach
                </select>
                <select name="search_mh" id="search_mh" class="form-control">
                    <option>--Chọn môn học--</option>
                    @foreach(App\Subject::pluck('tenmon','mamon')->all() as $key=>$val)
                        <option value="{{$key}}">{{$val}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
    <div class="col-md-4">
        <ol class="breadcrumb" style="padding: 16px 0px 0px 150px;margin: 0;background-color: transparent;border-radius: 0;">
            <li><a href="#"><i class="fa fa-user"></i> Người sử dụng</a></li>
            <li class="active">Danh Sách</li>
        </ol>
    </div>
</div>
@stop
@section('content')
<table class="table table-bordered table-striped" id="custom-table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Mã học sinh</th>
        <th>Họ Tên học sinh</th>
        <th>Lớp</th>
        <th>Mã môn học</th>
        <th>Điểm Chuyên Cần</th>
        <th>Điểm Thường Xuyên</th>
        <th>Điểm Giữa Kỳ</th>
        <th>Điểm Cuối Kỳ</th>
        {{--<th>Điểm Trung Bình</th>--}}
    </tr>
    </thead>
    @foreach ($student as $st)
        <tr>
            <th>{{$st->rownum}}</th>
            <th>{{$st->mahs}}</th>
            <th>{{$st->hohs.' '.$st->tenhs}}</th>
            <th>{{$st->malop}}</th>
            <th>{{$st->mamon}}</th>
            <th>{{$st->diemcc}}</th>
            <th>{{$st->diemtx}}</th>
            <th>{{$st->diemgk}}</th>
            <th>{{$st->diemck}}</th>
            {{--<th>{{$st->diemtb}}</th>--}}
        </tr>
    @endforeach
</table>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/point.css')}} ">
@stop
@section('js')
<!-- List user JS -->
<script src="{{ asset('js/point.js')}}"></script>
<script>

    $(document).ready(function() {
        var table = $("#custom-table").DataTable({
            // "scrollY": "300px",
            // "scrollCollapse": true,
            // "scrollX": true,
            // processing: true,
            // // serverSide: true,
            autoWidth: true,
            searching: true,
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, 'Tất cả']
            ],
            language: {
                "lengthMenu": "Hiển thị _MENU_ bản ghi",
                "zeroRecords": "Không có bản ghi nào được tìm thấy",
                "emptyTable": "Không có bản ghi nào được hiển thị",
                "processing": "Đang xử lý",
                "search": "Tìm kiếm",
                "infoFiltered": "(được lọc từ tổng số _MAX_ mục nhập)",
                "paginate": {
                    "first": "Đầu tiên",
                    "last": "Cuối cùng",
                    "next": "<i class='fa fa-chevron-right' aria-hidden='true'></i>",
                    "previous": "<i class='fa fa-chevron-left' aria-hidden='true'></i>"
                },
                "info": "Trình bày _START_ - _END_ trong số _TOTAL_ mục",
                "infoEmpty": "Trình bày 0 - 0 trong 0 mục"
            },
        });
        // var search_lop= $('#search_lop').val();
        // var search_mh= $('#search_mh').val();
        // var search_masv= $('#search-masv').val();
        // table.search(search_lop).draw();
        // $('#search_lop').on( 'change', function () {
        //    table.columns().search( this.value ).draw();
        // } );
        // $('#search_mh').on( 'change', function () {
        //     table.search( this.value ).draw();
        // } );
        // $('#search-masv').on('keyup',function () {
        //     table.search( this.value ).draw();
        // });
        /* Custom filtering function which will search data in column four between two values */
        $.fn.dataTable.ext.search.push(
            function (settings, data, dataIndex) {
                var search_lop = $('#search_lop').val();
                var search_mh = $('#search_mh').val();
                var search_masv = $('#search-masv').val();
                var lop = data[3]; // use data for the age column
                var mh = data[4]; // use data for the age column
                var masv = data[1]; // use data for the age column
                if (search_lop == lop && search_mh == mh) {
                    return true
                }
                return false;

            }
        );
        // Event listener to the two range filtering inputs to redraw on input
        $('#search_lop, #search_mh').change(function () {
            table.draw();
        });
    });

</script>
@endsection