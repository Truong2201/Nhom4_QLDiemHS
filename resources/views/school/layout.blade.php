<!DOCTYPE html>
<html lang="en">
    <head>
        @include('school.blocks.head')
    </head>
    <!-- END HEAD -->
    <body class="page-container-bg-solid page-header-menu-fixed page-boxed page-md">
        <img src="{{asset('images/BG_Left.png')}}" alt="background-left" class="image-background-layout background-left" >
        <img src="{{asset('images/BG_Head01.png')}}" alt="background-header" class="image-background-layout background-top" />
        <img src="{{asset('images/BG_Botton.png')}}" alt="background-bottom" class="image-background-layout background-bottom" />
        <img src="{{asset('images/BG_Right.png')}}" alt="background-right" class="image-background-layout background-right" />
        <!-- BEGIN HEADER -->
        <div class="page-header" style="border-bottom: 2px dotted #017184;">
            <!--BEGIN HEADER TOP 01 -->
            <div class="header01"></div>
            <div class="page-header-top">
                <div class="container">
                    <!-- BEGIN LOGO -->
                    <!-- -->
                    <div class="row headermenu">
                        <div class="col-sm-auto" style="width: auto;">
                            <a href="/">
                            <img src="{{asset('images/logo.png')}}" class="logo" style="width: 70px"></a>
                        </div>
                        <div class="col-xs-8 col-lg-5 col-sm-6 ml-auto menumobile">
                            <div class="row">
                                <div class="col-xs-6 col-lg-4 col-sm-4 col-sm-offset-4 menu_letter">
                                    <a class="nav-link" href="/Home/Mail">
                                    <img src="{{asset('images/HopThu.png')}}" alt="">
                                    Hộp thư
                                    </a>
                                </div>
                                <div class="col-xs-6 col-lg-4 col-sm-4 menu_top">
                                    <ul class="nav navbar-nav pull-right">
                                        <!-- BEGIN USER LOGIN DROPDOWN -->
                                        <li class="dropdown dropdown-user dropdown-dark nav-item" style="padding-right: 0px;">
                                            <a href="javascript:;" style="padding: 0;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                            <img alt="" class="img-circle op-05" src="{{asset('images/Phone.png')}}">
                                            <span class="username username-hide-mobile c-skin">0969845147</span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                                <li id="dmk" onclick="refeshForm();" class="li_child_menu">
                                                    <a data-toggle="modal" href="#responsive">
                                                    <i class=" icon-key"></i>Đổi mật khẩu
                                                    </a>
                                                </li>
                                                {{-- 
                                                <li class="divider"></li>
                                                <li class="li_child_menu">
                                                    <a href="/Home/Select">
                                                    <i class="icon-shuffle"></i>Đổi học sinh
                                                    </a>
                                                </li>
                                                </li> --}}
                                                <li class="divider"></li>
                                                <li class="li_child_menu">
                                                    <a href="/login">
                                                    <i class="icon-logout"></i>Quay về Login
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- -->
                                    <!-- -->
                                    @include('school.blocks.change_password')
                                </div>
                            </div>
                            <div class="row row_schoolname">
                                <div class="schoolname ">
                                    <div style="float: left;">
                                        <img src="{{asset('images/TruongMamNonSaoMai.png')}}" alt="" style="width:25px;">
                                    </div>
                                    <div class="school_name">
                                        Trường THPT Côn Đảo
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END HEADER TOP -->
            <!-- BEGIN HEADER MENU -->
            <div class="page-header-menu hidden-xs" style="display: none">
                <div class="container">
                    <!-- SEARCH BOX -->
                    <!-- MEGA MENU -->
                    <div class="hor-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="/"><i class="fa fa-home t-white"></i>Trang chủ</a> </li>
                            <li><a href="/Home/Mail" class=""><i class="fa fa-envelope-o t-white"></i>Hộp thư</a> </li>
                            <li class="hidden"><a href="/Home/Select">Chọn học sinh</a></li>
                            <li class="hidden "><a href="/Home/Profile">Hồ sơ học sinh</a></li>
                        </ul>
                    </div>
                    <div class="nav-user-info "><i class='fa fa-star-o'></i> Vũ Văn Trường</div>
                    <div class="nav-user-info "><i class='fa fa-university'></i> Trường THPT Côn Đảo</div>
                </div>
            </div>
            <!-- END HEADER MENU -->
            <div class="header-spliter hidden-lg hidden-md hidden-sm display-xs">
                &nbsp;
            </div>
        </div>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head hidden">
            <div class="container">
                <div class="page-title">
                    <h1>Trang chủ</h1>
                </div>
                <!-- THEME SETTING -->
                <div class="page-toolbar">
                    <div class="btn-group btn-theme-panel">
                        <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-settings"></i>
                        </a> 
                        @include('school.blocks.theme-panel')
                    </div>
                </div>
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE CONTENT BODY -->
            <div class="page-content">
                <div class="container">
                    <!-- BEGIN PAGE BREADCRUMBS -->
                    <ul class="page-breadcrumb breadcrumb hidden">
                        <li>
                            <a href="/">Trang chủ</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span></span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                    <!-- CONTENT INNER -->
                    <div class="page-content-inner">
                        <div class="alert alert-success" id="alertSuccess" style="display: none;">
                            <span id="messenger" style="color: white"></span>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="portlet light profile-sidebar-portletx">
                                    <div class="portlet-title">
                                        <div class="caption caption-md">
                                            <i class="icon-graduation font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">Thông tin hồ sơ</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body row tths-container" id="profile-container">
                                        <div class="col-md-5 col-sm-12">
                                            <div class="profile-userpic">
                                                <img src="{{asset('images/Avatar (2).png')}}" class="img-responsive op-05" alt="">
                                            </div>
                                            <!-- SIDEBAR USER TITLE -->
                                            <div class="profile-usertitle">
                                                <div class="profile-usertitle-name">Vũ Văn Trường</div>
                                                <div class="profile-usertitle-job">Lớp 12A5</div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-sm-12 p-r-10 p-l-10">
                                            <div class="profile-usermenu m-t-0">
                                                <ul class="nav">
                                                    <li class="activeX" onclick="onChooseTab(1)">
                                                        <a href="/Home/Profile?currentab=1">
                                                        <i class="fa fa-user"></i> Hồ sơ học sinh
                                                        </a>
                                                    </li>
                                                    <li onclick="onChooseTab(2)">
                                                        <a href="/Home/Profile?currentab=2">
                                                        <i class="fa fa-edit"></i> Quá Trình Học Tập
                                                        </a>
                                                    </li>
                                                    <li onclick="onChooseTab(3)">
                                                        <a href="/Home/Profile?currentab=3">
                                                        <i class="icon-info"></i> Khen thưởng, kỷ luật
                                                        </a>
                                                    </li>
                                                    <li onclick="onChooseTab(4)">
                                                        <a href="/Home/Profile?currentab=4">
                                                        <i class="fa fa-exclamation-triangle"></i> Vi phạm, miễn giảm, nghỉ học
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="profile-userpic t-center">
                                                {{-- <img data-bind="attr: { src: img }" class="img-responsive item-pic rounded atavar-item" alt=""> --}}
                                                <img src="{{asset('images/user.png')}}" class="item-pic rounded atavar-item op-05" />
                                            </div>
                                            <div class="profile-usertitle-job t-center">
                                                <div data-bind="text: name" style="display: inline;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    function headTeacherViewModel(name, img) {
                                        this.name = ko.observable(name);
                                        this.img = ko.observable(img);
                                    }
                                    var hTeacherViewModel;
                                    $(function () {
                                        hTeacherViewModel = new headTeacherViewModel();
                                        ko.applyBindings(hTeacherViewModel, document.getElementById("profile-container"));
                                    })
                                    function onChooseTab(index) {
                                        $("#current_tab").val(index);
                                    }
                                </script>
                                <script type="text/javascript">
                                    var teachers = [{"userAccountID":0,"userName":null,"teacherName":"Trần Thị Thực","teacherCode":"THPTHS050","mobile":"","subjectName":"Tin học","image":"","isHeadTeacher":false},{"userAccountID":0,"userName":null,"teacherName":"Nguyễn Thái Sơn","teacherCode":"THPTHS084","mobile":"","subjectName":"Công Nghệ","image":"","isHeadTeacher":false},{"userAccountID":0,"userName":null,"teacherName":"Nguyễn Thị Thu Hiền","teacherCode":"THPTHS036","mobile":"","subjectName":"Sinh học","image":"","isHeadTeacher":false},{"userAccountID":0,"userName":null,"teacherName":"Đoàn Thị Kim Dung","teacherCode":"THPTHS070","mobile":"","subjectName":"Thể dục","image":"","isHeadTeacher":false},{"userAccountID":0,"userName":null,"teacherName":"Nguyễn Thị Thanh Tạo","teacherCode":"THPTHS010","mobile":"","subjectName":"GDCD","image":"","isHeadTeacher":false},{"userAccountID":0,"userName":null,"teacherName":"Nguyễn Vĩnh Tường","teacherCode":"THPTHS046","mobile":"","subjectName":"Tiếng Anh","image":"","isHeadTeacher":false},{"userAccountID":0,"userName":null,"teacherName":"Đoàn Thị Kim Dung","teacherCode":"THPTHS070","mobile":"","subjectName":"GDQP AN","image":"","isHeadTeacher":false},{"userAccountID":0,"userName":null,"teacherName":"Nguyễn Vĩnh Giang","teacherCode":"THPTHS102","mobile":"","subjectName":"Toán","image":"","isHeadTeacher":false},{"userAccountID":0,"userName":null,"teacherName":"Ngô Thị Mai","teacherCode":"THPTHS031","mobile":"","subjectName":"Ngữ Văn","image":"","isHeadTeacher":false},{"userAccountID":0,"userName":null,"teacherName":"Nguyễn Thị Hiền","teacherCode":"THPTHS012","mobile":"","subjectName":"Hóa học","image":"","isHeadTeacher":false},{"userAccountID":0,"userName":null,"teacherName":"Nguyễn Thị Hoài Nam","teacherCode":"THPTHS020","mobile":"","subjectName":"Lịch sử","image":"","isHeadTeacher":false},{"userAccountID":0,"userName":null,"teacherName":"Trần Thị Thanh Huyền","teacherCode":"THPTHS006","mobile":"","subjectName":"Địa lí","image":"","isHeadTeacher":false},{"userAccountID":0,"userName":null,"teacherName":"Phạm Đình Tính","teacherCode":"THPTHS067","mobile":"","subjectName":"Nghề PT","image":"","isHeadTeacher":false},{"userAccountID":0,"userName":null,"teacherName":"Lý Huệ","teacherCode":"THPTHS072","mobile":"","subjectName":"Vật lí","image":"","isHeadTeacher":false},{"userAccountID":0,"userName":null,"teacherName":"Lê Thị Hằng","teacherCode":"THPTHS094","mobile":"","subjectName":"Địa lí","image":"","isHeadTeacher":false},{"userAccountID":0,"userName":null,"teacherName":"Nguyễn Thị Nga","teacherCode":"THPTHS093","mobile":"","subjectName":"Lịch sử","image":"","isHeadTeacher":false},{"userAccountID":376005,"userName":"thpths_ngomai","teacherName":"Ngô Thị Mai","teacherCode":"THPTHS031","mobile":"","subjectName":null,"image":"","isHeadTeacher":true}];
                                </script>
                                <div class="portlet light dsgv-container">
                                    <div class="portlet-title">
                                        <div class="caption caption-md">
                                            <i class="icon-users font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">Danh s&#225;ch gi&#225;o vi&#234;n bộ m&#244;n</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default fullscreen c-skin" href="javascript:;" data-original-title="" title="" aria-describedby="tooltip832312"> </a>
                                        </div>
                                    </div>
                                    <div id="teachers" class="portlet-body p-t-0">
                                        <div class="table-scrollable table-scrollable-borderless">
                                            <table class="table table-hover table-lightX sp-table-row">
                                                <thead>
                                                    <tr class="uppercase">
                                                        <th>M&#244;n học</th>
                                                        <th>Gi&#225;o vi&#234;n</th>
                                                        <th>ĐTDĐ</th>
                                                    </tr>
                                                </thead>
                                                <tbody data-bind="foreach: teachers">
                                                    <tr>
                                                        <td class="t-left">
                                                            <span data-bind="text: subjectName"></span>
                                                        </td>
                                                        <td class="t-left">
                                                            <!-- ko if: image!=null && image!='' -->
                                                            <img class="item-pic rounded atavar-item" alt="" data-bind="attr: { src: 'data:image/png;base64,' + image }" />
                                                            <!-- /ko -->
                                                            <!-- ko if: image==null || image=='' -->
                                                            <img class="item-pic rounded atavar-item op-05" src="{{asset('images/user.png')}}">
                                                            <!-- /ko -->
                                                            <span data-bind="text: teacherName"></span>
                                                        </td>
                                                        <td class="t-left" data-bind="text: mobile">
                                                            <span data-bind="text: mobile"></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    function TeacherViewModel(teachers) {
                                        this.teachers = teachers;
                                    }
                                    $(function () {
                                        var gvcn_index = -1;
                                        $.each(teachers, function(i, v){
                                            if(v.isHeadTeacher) {
                                                gvcn_index = i;
                                                hTeacherViewModel.name('GVCN: ' + v.teacherName);
                                                if(v.image === '') {
                                                    hTeacherViewModel.img('../images/user.png');
                                                } else {
                                                    hTeacherViewModel.img( 'data:image/png;base64,' + v.image);
                                                }
                                                
                                                return;
                                            }
                                        });
                                        if(gvcn_index > -1) {
                                            teachers.splice(gvcn_index, 1);
                                        } else {
                                            hTeacherViewModel.name('GVCN: Chưa có');
                                            hTeacherViewModel.img('../images/user.png');
                                        }
                                        ko.applyBindings(new TeacherViewModel(teachers), document.getElementById('teachers'));
                                    });
                                </script>        
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <script type="text/javascript">
                                    var scheduler = [{"semester":2,"dateOfWeek":6,"section":1,"subjectOrder":4,"subjectID":30,"subjectName":"Vật lí","color":"#099d01"},{"semester":2,"dateOfWeek":6,"section":1,"subjectOrder":3,"subjectID":49,"subjectName":"Hóa học","color":"#9fcb05"},{"semester":2,"dateOfWeek":6,"section":1,"subjectOrder":2,"subjectID":32,"subjectName":"Sinh học","color":"#82b5d0"},{"semester":2,"dateOfWeek":6,"section":1,"subjectOrder":1,"subjectID":33,"subjectName":"Tiếng Anh","color":"#81d0cd"},{"semester":2,"dateOfWeek":5,"section":1,"subjectOrder":4,"subjectID":33,"subjectName":"Tiếng Anh","color":"#81d0cd"},{"semester":2,"dateOfWeek":5,"section":1,"subjectOrder":3,"subjectID":27,"subjectName":"Toán","color":"#7d74dd"},{"semester":2,"dateOfWeek":5,"section":1,"subjectOrder":2,"subjectID":28,"subjectName":"Ngữ Văn","color":"#e7696c"},{"semester":2,"dateOfWeek":5,"section":1,"subjectOrder":1,"subjectID":28,"subjectName":"Ngữ Văn","color":"#e7696c"},{"semester":2,"dateOfWeek":4,"section":1,"subjectOrder":5,"subjectID":49,"subjectName":"Hóa học","color":"#9fcb05"},{"semester":2,"dateOfWeek":4,"section":1,"subjectOrder":4,"subjectID":47,"subjectName":"Lịch sử","color":"#b6861d"},{"semester":2,"dateOfWeek":4,"section":1,"subjectOrder":3,"subjectID":27,"subjectName":"Toán","color":"#7d74dd"},{"semester":2,"dateOfWeek":4,"section":1,"subjectOrder":2,"subjectID":45,"subjectName":"GDCD","color":"#70ab08"},{"semester":2,"dateOfWeek":4,"section":1,"subjectOrder":1,"subjectID":10,"subjectName":"Tin học","color":"#fe3087"},{"semester":2,"dateOfWeek":3,"section":1,"subjectOrder":3,"subjectID":11,"subjectName":"Thể dục","color":"#36cf97"},{"semester":2,"dateOfWeek":3,"section":1,"subjectOrder":2,"subjectID":12,"subjectName":"GDQP AN","color":"#70ab08"},{"semester":2,"dateOfWeek":3,"section":1,"subjectOrder":1,"subjectID":11,"subjectName":"Thể dục","color":"#36cf97"},{"semester":2,"dateOfWeek":2,"section":1,"subjectOrder":5,"subjectID":27,"subjectName":"Toán","color":"#7d74dd"},{"semester":2,"dateOfWeek":2,"section":1,"subjectOrder":4,"subjectID":32,"subjectName":"Sinh học","color":"#82b5d0"},{"semester":2,"dateOfWeek":2,"section":1,"subjectOrder":3,"subjectID":48,"subjectName":"Địa lí","color":"#FDA767"},{"semester":2,"dateOfWeek":2,"section":1,"subjectOrder":2,"subjectID":30,"subjectName":"Vật lí","color":"#099d01"},{"semester":2,"dateOfWeek":2,"section":1,"subjectOrder":1,"subjectID":-1,"subjectName":"Chào cờ","color":"#91b8bf"},{"semester":2,"dateOfWeek":7,"section":1,"subjectOrder":5,"subjectID":28,"subjectName":"Ngữ Văn","color":"#e7696c"},{"semester":2,"dateOfWeek":7,"section":1,"subjectOrder":4,"subjectID":-2,"subjectName":"Sinh hoạt lớp","color":"#e7698f"},{"semester":2,"dateOfWeek":7,"section":1,"subjectOrder":3,"subjectID":33,"subjectName":"Tiếng Anh","color":"#81d0cd"},{"semester":2,"dateOfWeek":7,"section":1,"subjectOrder":2,"subjectID":27,"subjectName":"Toán","color":"#7d74dd"},{"semester":2,"dateOfWeek":7,"section":1,"subjectOrder":1,"subjectID":35,"subjectName":"Công Nghệ","color":"#e7698f"}];
                                </script>
                                <div id="schedule" class="portlet light">
                                    <div class="portlet-title">
                                        <div class="caption caption-md">
                                            <i class="icon-calendar font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">Thời kh&#243;a biểu</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default fullscreen c-skin" href="javascript:;" data-original-title="" title="" aria-describedby="tooltip832312"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body tkb-container p-t-0">
                                        <span data-bind="ifnot: hasScheduler">Nh&#224; trường chưa khai b&#225;o thời kh&#243;a biểu.</span>
                                        <!-- ko if: hasScheduler -->
                                        <div class="table-responsive">
                                            <div data-bind="foreach: sections">
                                                <table class="table table-borderedX sp-table-bg m-b-0 no-border-header" data-bind="css: {text: true}">
                                                    <colgroup>
                                                        <col class="section head" />
                                                        <col class="period head" />
                                                        <col class="date" />
                                                        <col class="date" />
                                                        <col class="date" />
                                                        <col class="date" />
                                                        <col class="date" />
                                                        <col class="date" />
                                                        <col class="date" />
                                                    </colgroup>
                                                    <thead>
                                                        <tr class="rows">
                                                            <th class="head col-24-1">
                                                                <div class="t-vertical">Buổi</div>
                                                            </th>
                                                            <th class="head col-24-2">
                                                                <div>Tiết</div>
                                                            </th>
                                                            <th class="head col-24-3">
                                                                <div>Thứ 2</div>
                                                            </th>
                                                            <th class="head col-24-3">
                                                                <div>Thứ 3</div>
                                                            </th>
                                                            <th class="head col-24-3">
                                                                <div>Thứ 4</div>
                                                            </th>
                                                            <th class="head col-24-3">
                                                                <div>Thứ 5</div>
                                                            </th>
                                                            <th class="head col-24-3">
                                                                <div>Thứ 6</div>
                                                            </th>
                                                            <th class="head col-24-3">
                                                                <div>Thứ 7</div>
                                                            </th>
                                                            <th class="head col-24-3">
                                                                <div>Chủ nhật</div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody data-bind="foreach: orders">
                                                        <tr data-bind="foreach: cells" id="table-tr-schedule">
                                                            <!-- ko if: $index() === 0 -->
                                                            <!-- ko if: $parentContext.$index() === 0 -->
                                                            <td rowspan="5" class="sectionName b-r-1">
                                                                <div class="t-vertical" data-bind="text: $parentContext.$data.sectionName"></div>
                                                            </td>
                                                            <!-- /ko -->
                                                            <td class="sectionName sectionName-detail">
                                                                <div data-bind="text: $parentContext.$data.name"></div>
                                                            </td>
                                                            <!-- /ko -->
                                                            <td class="cell">
                                                                <div data-bind="text: subjectName, style: {color: color}"></div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /ko -->
                                    </div>
                                </div>
                                @include('school.blocks.SubjectViewModel')
                                <style type="text/css">
                                </style>
                            </div>
                            <div class="col-md-6 col-sm-12" style="float:right;">
                                @include('school.blocks.mail')
                                {{-- <div class="portlet light mail-container" id="list-mail">
                                    <div class="portlet-title">
                                        <div class="caption caption-md">
                                            <i class="icon-calendar font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">Danh Sách Lớp Học</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default fullscreen c-skin" href="javascript:;" data-original-title="" title="" aria-describedby="tooltip832312"> </a>
                                        </div>
                                    </div>
                                    <div id="hocsinh" class="portlet-body p-t-0">
                                        <div class="table-scrollable table-scrollable-borderless">
                                            <table class="table table-hover table-lightX sp-table-row">
                                            </table>
                                        </div>
                                            <div class="portlet-title">
                                                <a href="{{asset('hocsinh/danhsach/index')}}">
                                                <button type="submit" class="table-scrollable table-scrollable-borderless"> THÊM </button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                                @include('school.blocks.MailViewModel')
                                {{-- <script type="text/javascript">
                                    var news = {"lstInformationOfPupil":[]};
                                </script>
                                <div class="portlet light ">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class="icon-directions font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">Chưa có thông tin mới</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default fullscreen c-skin" href="javascript:;" data-original-title="" title="" aria-describedby="tooltip832312"> </a>
                                        </div>
                                    </div> --}}
                                    <div class="portlet-body news-container" id="news">
                                        <div class="scroller" data-bind="style: { height: news().length >= 5 ? '300px' : 'auto' }" data-always-visible="1" data-rail-visible="0">
                                            <!-- ko if: !news().length -->
                                            <div>Chưa có thông tin mới về điểm danh, khen thưởng, vi phạm, kỷ luật.</div>
                                            <!-- /ko -->
                                            <ul id="news-list" class="feeds" data-bind="foreach: news">
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm" data-bind="css: { 'label-info': typeName === 'Điểm danh', 'label-success': typeName === 'Khen thưởng', 'label-danger': typeName === 'Kỷ luật', 'label-warning': typeName === 'Vi phạm'}">
                                                                    <i class="fa" data-bind="css: { 'fa-calendar-check-o': typeName === 'Điểm danh', 'fa-gift': typeName === 'Khen thưởng', 'fa-legal': typeName === 'Kỷ luật', 'fa-bullhorn': typeName === 'Vi phạm'}"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc" data-bind="text: content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <span class="label label-sm label-default" data-bind="text: typeName"></span>
                                                    </div>
                                                    <div class="desc info-at" data-bind="text: actionDate"></div>
                                                </li>
                                            </ul>
                                            <div class="pagination-container">
                                                <nav>
                                                    <ul class="pagination"></ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    function NewsViewModel(news) {
                                        this.news = ko.observableArray(news);
                                    }
                                    var newsViewModel;
                                    $(function () {
                                        newsViewModel = new NewsViewModel(news.lstInformationOfPupil);
                                    
                                        ko.applyBindings(newsViewModel, document.getElementById('news'));
                                    })
                                </script>
                                <style type="text/css">
                                    li:hover {
                                    cursor: pointer;
                                    }
                                    .news-date {
                                    width: 100px;
                                    }
                                    .news-type {
                                    width: 110px;
                                    }
                                    .pagination-container {
                                    position: absolute;
                                    bottom: 0px;
                                    }
                                </style>
                            </div>
                        </div>
                        <input hidden value="0" id="current_tab" />
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
        <!-- SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler">
        <i class="icon-login"></i>
        </a>
        @include('school.blocks.page-quick-sidebar-wrapper')
        <style>
            .contentFooter {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            /*align-items: center;*/
            margin-top:2vh;
            }
            .contentFooter col-sm-auto {
            align-self: center;
            }
            .contentFooter .ml-auto {
            margin-left: auto !important;
            }
            .reponsive-sdt {
            display: none;
            }
            .footerrow1 span {
            display: inline-block;
            vertical-align: middle;
            }
            .footerrow1 img {
            vertical-align: middle;
            }
            .support-text {
            display: inline-block;
            vertical-align: middle;
            }
            .purple {
            }
        </style>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
        @include('school.blocks.foot')
        <div class="modal">
            <div class="close" title="Đóng">Đ&#243;ng</div>
        </div>
        <script src="{{asset('layout/js/knockout-lastest.js')}}" type="text/javascript"></script>
        <script src="{{asset('layout/js/Utils.js')}}"></script>
        <script type="text/javascript">
            $('.img-menu-home').click(function () {
                var href = $("a.title-home1").attr('href');
                window.location.href = href;
            });
            
            $('.img-menu-mailbox').click(function () {
                var href = $("a.title-mailbox1").attr('href');
                window.location.href = href;
            });
            
            function ShowMessenger(content, type) {
                if (content.length > 0) {
                    $("#alertSuccess").slideDown();
                    if (type == 'success') {
                        $("#alertSuccess").css('background-color', 'green');
                    }
                    else {
                        $("#alertSuccess").css('background-color', 'red');
                    }
            
                    $("#alertSuccess #messenger").html(content);
            
                    setTimeout(function () {
                        $("#alertSuccess").slideUp(500, function () { });
                    }, 3000);
                }
            }
            function backHome()
            {
               window.location = window.location.href;
            }
        </script>
    </body>
</html>