@extends('school.master')
@section('title',"Danh sách Học sinh")
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        {{-- <h3 class="card-title">Danh sách Học sinh</h3> --}}
        <div class="card-tools">
            @csrf
            <div class="export">
                <a href ="{{ route('export') }}" class="btn btn-info export" id="export-button"> Excel </a>
           </div>
            {{-- &nbsp; --}}
            {{-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button> --}}
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped" id="custom-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Mã Học sinh</th>
                    <th>Họ và tên</th>
                    <th>Giới tính</th>
                    <th>Ngày Sinh</th>
                    <th>Quê Quán</th>
                    <th>Họ và tên cha</th>
                    <th>Nghề Nghiệp cha</th>
                    <th>Họ và tên mẹ</th>
                    <th>Nghề Nghiệp mẹ</th>
                    <th>Lớp</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                    <th>Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $student->mahs}}</td>
                    <td>{{ $student->hohs}} {{ $student->tenhs}}</td>
                    <td>
                        @if ($student->gioitinh == 0)
                            Nam
                        @else
                            Nữ
                        @endif
                    </td>
                    <td>{{ $student->ngaysinh}}</td>
                    <td>{{ $student->quequan}}</td>
                    <td>{{ $student->hotencha}}</td>
                    <td>{{ $student->nghenghiepcha}}</td>
                    <td>{{ $student->hotenme}}</td>
                    <td>{{ $student->nghenghiepme}}</td>
                    <td>{{ $student->class->tenlop}}</td>
                    <td><a href="{{ route('student.destroy',['id' => $student->id]) }}"onclick="return acceptDelete('Xóa học sinh này?')" class="btn btn-danger">Xóa</a></td>
                    <td><a href="{{ route('student.edit',['id' => $student->id]) }}" class="btn btn-success">Sửa</a></td>
                    <td><a href="{{ route('student.dashboard',['id' => $student->id]) }}" class="btn btn-warning">Chi tiết</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer"></div>
</div>
@endsection
        {{-- <script src="{{asset('js/student.js')}}"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.0/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.0/js/buttons.html5.min.js"></script>
        <script>
            var url="{{route('student.data_json')}}";
            $(function() {
                datatable = $('#custom-table').DataTable({
                    dom: 'Bfrtip',
                    processing: true,
                    serverSide: true,
                    autoWidth: true,
                    searching: false,
                    columnDefs: [
                        {
                            "targets": 0,
                            "className": "text-center",
                            'width':'5%'
                        },
                        {
                            "targets": 50,
                            "className": "text-center",
                        }
                    ],
                    ajax: {
                        url: url,
                        data: function (d) {
                        d.search.custom = {
                            typesearch:$('#type_search').val(),
                            lop: $('input[name=search-lop]').val(),
                            mahs: $('input[name=search-masv]').val(),
                            hohs: $('input[name=search-hosv]').val(),
                            tenhs: $('input[name=search-tensv]').val(),
                            quequan: $('input[name=search-quequan]').val(),
                            gioitinh: $('input[name=search-gioitinh]').val(),
                            hotencha: $('input[name=search-hotencha]').val(),
                            nghenghiepcha: $('input[name=search-nghenghiepcha]').val(),
                            hotenme: $('input[name=search-hotenme]').val(),
                            nghenghiepme: $('input[name=search-nghenghiepme]').val(),
                        };
                        };
                    },
                    columns: [
                        {data: 'rownum', name: 'rownum'},
                        {data: 'mahs', name: 'mahs'},
                        {data: 'hohs', name: 'hohs'},
                        {data: 'tenhs', name: 'tenhs'},
                        {data: 'gioitinh', name: 'gioitinh'},
                        {data: 'ngaysinh', name: 'ngaysinh'},
                        {data: 'quequan', name: 'quequan'},
                        {data: 'hotencha', name: 'hotencha'},
                        {data: 'nghenghiepcha', name: 'nghenghiepcha'},
                        {data: 'hotenme', name: 'hotenme'},
                        {data: 'nghenghiepme', name: 'nghenghiepme'},
                        {data: 'malophs', name: 'malophs'},
                    ],
                    buttons: [
                            {
                                extend: 'excel',
                                text: 'Xuất excel',
                                title: 'Danh sách học sinh',
                                filename: 'danhsachsinhvien',
                                header: true,
                                footer: false,
                                className: 'btn btn-warning btn-flat',
                                exportOptions: {
                                    columns: [0, 1, 2, 3, 4, 5, 6 ,7 ,8 ,9 ,10 ,11 ,12]
                                }
                            },
                            {
                                extend: 'pdf',
                                text: 'PDF',
                                title: 'Danh sách học sinh',
                                filename: 'danhsachsinhvien',
                                header: true,
                                footer: false,
                                className: 'btn btn-danger btn-flat',
                                exportOptions: {
                                    columns: [0, 1, 2, 3, 4, 5, 6 ,7 ,8 ,9 ,10 ,11 ,12]
                                }
                            },
                            ],
                            initComplete : function () {
                            datatable.buttons().container()
                            .appendTo( $('.my-dt-buttons:eq(0)'));
                            },
                    language: {
                        "lengthMenu": "Hiển thị _MENU_ bản ghi",
                        "zeroRecords": "Không có bản ghi nào được tìm thấy",
                        "emptyTable": "Không có bản ghi nào được hiển thị",
                        "processing": "Đang xử lý",
                        "search": "Tìm kiếm",
                        "paginate": {
                            "first": "Đầu tiên",
                            "last": "Cuối cùng",
                            "next": "<i class='fa fa-chevron-right' aria-hidden='true'></i>",
                            "previous": "<i class='fa fa-chevron-left' aria-hidden='true'></i>"
                        },
                        "info": "Trình bày _START_ - _END_ trong số _TOTAL_ mục",
                        "infoEmpty": "Trình bày 0 - 0 trong 0 mục"
                    },
                    lengthMenu: [
                        [-1],
                        ['all']
                    ],
                    drawCallback: function () {
                    }
            });
                datatable.on('draw', function () {
                    $('.btn-edit').on('click', function () {
                        var url = $(this).data('detail');
                        var editUrl = $(this).data('url');
                        $('#frm_edit_student').attr('action', editUrl);
                        $.get(url, function (resp) {
                            console.log(resp);
                            $("#edit_hohs").val(resp.hohs);
                            $("#edit_tenhs").val(resp.tenhs);
                            $("#edit_gioitinh").val(resp.gioitinh);
                            $("#edit_ngaysinh").val(resp.ngaysinh);
                            $("#edit_quequan").val(resp.quequan);
                            $("#edit_hotencha").val(resp.hotencha);
                            $("#edit_nghenghiepcha").val(resp.nghenghiepcha);
                            $("#edit_hotenme").val(resp.hotenme);
                            $("#edit_nghenghiepme").val(resp.nghenghiepme);
                            $("#edit_lop").val(resp.class_id).trigger('change');
                        }, 'json');
                    });
                });
            });
        </script>
    </div>
@endsection --}}