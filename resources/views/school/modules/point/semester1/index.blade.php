@extends('school.master')
@section('title',"Bảng điểm lớp")
@section('content')
<div class="row">
    {{--{!! Form:: !!}--}}
    <form method="post" id="search-form">
        @csrf
        <div class="col-12">
            <div class="btn btn-flat fix-box" style="margin: 0;padding: 0 0 0 12px;">
                Chọn Môn
                <select name="search_mh" id="search_mh" class="form-control" data-url="{{route('loadSubject')}}">
                    <option>--Chọn môn học--</option>
                    @foreach(App\Subject::pluck('tenmon','mamon')->all() as $key=>$val)
                        <option value="{{$key}}">{{$val}}</option>
                    @endforeach
                </select>
                Chọn Lớp
                <select name="search_lop" id="search_lop" class="form-control" data-url="{{route('loadClass')}}">
                    <option>--Chọn lớp học--</option>
                    @foreach(App\LClass::pluck('tenlop','malop')->all() as $key=>$val)
                        <option value="{{$key}}">{{$val}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
    {{-- <div class="col-md-4">
        <ol class="breadcrumb" style="padding: 16px 0px 0px 150px;margin: 0;background-color: transparent;border-radius: 0;">
            <li><a href="#"><i class="fa fa-user"></i> Người sử dụng</a></li>
            <li class="active">Danh Sách</li>
        </ol>
    </div> --}}
</div>
{{-- @stop
@section('content') --}}
    <table class="table table-bordered table-striped" id="custom-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mã Học sinh</th>
                <th>Tên Học Sinh</th>
                <th>Điểm Chuyên Cần</th>
                <th>Điểm Thường Xuyên</th>
                <th>Điểm Giữa Kỳ</th>
                <th>Điểm Cuối Kỳ</th>
            </tr>
        </thead>
        <tbody id="asds">
        </tbody>
        {{-- <thead>
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
            {{-- <th>Điểm Thi Lại</th> --}}
        {{--</tr>
        </thead>
            @foreach ($student as $st)
                <tr>
                    <th>{{$st->rownum}}</th>
                    <th>{{$st->mahs}}</th>
                    <th>{{$st->hohs}}{{$st->tenhs}}</th>
                    <th>{{$st->class->tenlop}}</th>
                    <th>{{$st->mamon}}</th>
                    <th contenteditable="true" onBlur="saveToDatabase(this,'diemcc','{{$st->semester1_id}}','{{$st->sv_id}}','{{$st->subject_id}}')">{{$st->diemcc}}</th>
                    <th contenteditable="true" onBlur="saveToDatabase(this,'diemtx','{{$st->semester1_id}}','{{$st->sv_id}}','{{$st->subject_id}}')">{{$st->diemtx}}</th>
                    <th contenteditable="true" onBlur="saveToDatabase(this,'diemgk','{{$st->semester1_id}}','{{$st->sv_id}}','{{$st->subject_id}}')">{{$st->diemgk}}</th>
                    <th contenteditable="true" onBlur="saveToDatabase(this,'diemck','{{$st->semester1_id}}','{{$st->sv_id}}','{{$st->subject_id}}')">{{$st->diemck}}</th>
                    {{-- <th contenteditable="true" onBlur="saveToDatabase(this,'diemthilai','{{$st->semester1_id}}','{{$st->sv_id}}','{{$st->subject_id}}')">{{$st->diemthilai}}</th>
                </tr>
            @endforeach --}}
    </table>
    <script language="JavaScript" type="text/javascript" src="{{asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{asset('danhsachdiem1.js')}}"></script>
{{-- @stop
@section('css')
<link rel="stylesheet" href="{{asset('css/point.css')}} ">
@stop
@section('js')

<script src="{{ asset('js/point.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/1.5.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.0/js/buttons.html5.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url="{{route('semester1.savediem')}}";
    $(document).ready(function() {
        var table = $("#custom-table").DataTable({
            // "scrollY": "300px",
            // "scrollCollapse": true,
            // "scrollX": true,
            dom: 'Bfrtip',
            processing: true,
            // serverSide: true,
            autoWidth: true,
            searching: true,
            lengthMenu: [
                [-1],
                ['Tất cả']
            ],
            buttons: [
                {
                    extend: 'excel',
                    text: 'Xuất excel',
                    title: 'Danh sách Điểm sinh viên lớp'+$("#search_lop").val()+"môn học"+$("#search_mh").val(),
                    filename: 'Danh sách Điểm sinh viên lớp'+$("#search_lop").val()+"môn học"+$("#search_mh").val(),
                    header: true,
                    footer: false,
                    className: 'btn btn-warning btn-flat',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6,7,8,9]
                    }
                },
                {
                    extend: 'pdf',
                    text: 'PDF',
                    title: 'Danh sách Điểm sinh viên lớp'+$("#search_lop").val()+"môn học"+$("#search_mh").val(),
                    filename: 'Danh sách Điểm sinh viên lớp'+$("#search_lop").val()+"môn học"+$("#search_mh").val(),
                    header: true,
                    footer: false,
                    className: 'btn btn-danger btn-flat',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6,7,8,9]
                    }
                },
            ],
            language: {
                "lengthMenu": "Hiển thị _MENU_ bản ghi",
                "zeroRecords": "Không có bản ghi nào được tìm thấy",
                "emptyTable": "Không có bản ghi nào được hiển thị",
                "processing": "Đang xử lý",
                "search": "Tìm kiếm",
                "infoFiltered":   "(được lọc từ tổng số _MAX_ mục nhập)",
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
        $.fn.dataTable.ext.search.push(
            function (settings, data, dataIndex) {
                var search_lop = $('#search_lop').val();
                var search_mh = $('#search_mh').val();
                var lop = data[3]; // use data for the age column
                var mh = data[4]; // use data for the age column
                if (search_lop == lop && search_mh == mh) {
                    return true
                }
                return false;

            }
        );
        // Event listener to the two range filtering inputs to redraw on input
        $('#search_lop').change(function () {
            $('#search_mh').val('').trigger('change');
        });
        $('#search_mh').change(function () {
            table.draw();
        });
    });
    function saveToDatabase(diem,column,semester1_id,sv_id,subject_id) {
        $(diem).css("background","#FFF url({{url('images/preloader.gif')}}) no-repeat left center");
        // $(diem).css("background"," url(https://media.giphy.com/media/EhTIih4rcMoSI/source.gif) no-repeat right");
        $.ajax({
            url: url,
            type: "POST",
            data: {diem: diem.innerHTML, column: column, semester1_id: semester1_id,sv_id: sv_id,subject_id: subject_id},
            success: function(data){
                $(diem).css("background","#FDFDFD");
                // toastr.success(data.message, 'Thông Báo!', {closeButton: true});
            },
            error: function (data) {
                $(diem).css("background","red");
            }
        });
    }
</script> --}}
@endsection