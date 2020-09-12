<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    @include('school.blocks.head')
</head>
<body class="page-container-bg-solid page-header-menu-fixed page-boxed page-md">
    <img src="{{asset('images/BG_Left.png')}}" alt="background-left" class="image-background-layout background-left" />
    <img src="{{asset('images/BG_Head01.png')}}" alt="background-header" class="image-background-layout background-top" />
    <img src="{{asset('images/BG_Botton.png')}}" alt="background-bottom" class="image-background-layout background-bottom" />
    <img src="{{asset('images/BG_Right.png')}}" alt="background-right" class="image-background-layout background-right" />
    <!-- BEGIN HEADER -->
    <div class="page-header" style="border-bottom: 3px dotted #017184;">
        <div class="header01">
            @yield('content')
        </div>
        <div class="page-header-top">
            <div class="container">
                <!-- BEGIN LOGO -->
                <div class="row headermenu">
                        <div class="col-sm-auto" style="width: auto">
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
                                        <li class="divider"></li>
                                        <li class="li_child_menu">
                                            <a href="/school/login">
                                                <i class="icon-logout"></i>Tho&#225;t
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            </div>
                            </div>
                            <div class="row row_schoolname">
                                <div class="schoolname ">
                                    <div style="float: left;">
                                        <img src="{{asset('images/TruongMamNonSaoMai.png')}}" alt="" style="width:25px;">
                                    </div>
                                    <div class="school_name">
                                        Trường THPT
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
<div class="hor-menu">
    <ul class="nav navbar-nav">
        <li><a href="/"><i class="fa fa-home t-white"></i>Trang chủ</a> </li>
        <li><a href="/Home/Mail" class=""><i class="fa fa-envelope-o t-white"></i>Hộp thư</a> </li>
        <li class="hidden"><a href="/Home/Select">Chọn học sinh</a></li>
        <li class="hidden "><a href="/Home/Profile">Hồ sơ học sinh</a></li>
    </ul>    
</div>
<div class="nav-user-info "><i class='fa fa-star-o'></i> Vũ Văn Trường</div>
<div class="nav-user-info "><i class='fa fa-university'></i> Trường THPT</div>
            </div>
        </div>
        <!-- END HEADER MENU -->
        <div class="header-spliter hidden-lg hidden-md hidden-sm display-xs">
            &nbsp;
        </div>
    </div>
    <div class="page-container">
        <div class="page-content-wrapper">
            <div class="page-head hidden">
                <div class="container">
                    <div class="page-title">
                        <h1>Trang chủ</h1>
                    </div>
                    <div class="page-toolbar">
                        <div class="btn-group btn-theme-panel">
    <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
        <i class="icon-settings"></i>
    </a>
    <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h3>THEME COLORS</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="theme-colors">
                            <li class="theme-color theme-color-default" data-theme="default">
                                <span class="theme-color-view"></span>
                                <span class="theme-color-name">Default</span>
                            </li>
                            <li class="theme-color theme-color-blue-hoki" data-theme="blue-hoki">
                                <span class="theme-color-view"></span>
                                <span class="theme-color-name">Blue Hoki</span>
                            </li>
                            <li class="theme-color theme-color-blue-steel" data-theme="blue-steel">
                                <span class="theme-color-view"></span>
                                <span class="theme-color-name">Blue Steel</span>
                            </li>
                            <li class="theme-color theme-color-yellow-orange" data-theme="yellow-orange">
                                <span class="theme-color-view"></span>
                                <span class="theme-color-name">Orange</span>
                            </li>
                            <li class="theme-color theme-color-yellow-crusta" data-theme="yellow-crusta">
                                <span class="theme-color-view"></span>
                                <span class="theme-color-name">Yellow Crusta</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="theme-colors">
                            <li class="theme-color theme-color-green-haze" data-theme="green-haze">
                                <span class="theme-color-view"></span>
                                <span class="theme-color-name">Green Haze</span>
                            </li>
                            <li class="theme-color theme-color-red-sunglo" data-theme="red-sunglo">
                                <span class="theme-color-view"></span>
                                <span class="theme-color-name">Red Sunglo</span>
                            </li>
                            <li class="theme-color theme-color-red-intense" data-theme="red-intense">
                                <span class="theme-color-view"></span>
                                <span class="theme-color-name">Red Intense</span>
                            </li>
                            <li class="theme-color theme-color-purple-plum" data-theme="purple-plum">
                                <span class="theme-color-view"></span>
                                <span class="theme-color-name">Purple Plum</span>
                            </li>
                            <li class="theme-color theme-color-purple-studio" data-theme="purple-studio">
                                <span class="theme-color-view"></span>
                                <span class="theme-color-name">Purple Studio</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 seperator">
                <h3>LAYOUT</h3>
                <ul class="theme-settings">
                    <li>
                        Theme Style
                        <select class="theme-setting theme-setting-style form-control input-sm input-small input-inline tooltips" data-original-title="Change theme style" data-container="body" data-placement="left">
                            <option value="boxed" selected="selected">Square corners</option>
                            <option value="rounded">Rounded corners</option>
                        </select>
                    </li>
                    <li>
                        Layout
                        <select class="theme-setting theme-setting-layout form-control input-sm input-small input-inline tooltips" data-original-title="Change layout type" data-container="body" data-placement="left">
                            <option value="boxed" selected="selected">Boxed</option>
                            <option value="fluid">Fluid</option>
                        </select>
                    </li>
                    <li>
                        Top Menu Style
                        <select class="theme-setting theme-setting-top-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change top menu dropdowns style" data-container="body"
                                data-placement="left">
                            <option value="dark" selected="selected">Dark</option>
                            <option value="light">Light</option>
                        </select>
                    </li>
                    <li>
                        Top Menu Mode
                        <select class="theme-setting theme-setting-top-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) top menu" data-container="body" data-placement="left">
                            <option value="fixed">Fixed</option>
                            <option value="not-fixed" selected="selected">Not Fixed</option>
                        </select>
                    </li>
                    <li>
                        Mega Menu Style
                        <select class="theme-setting theme-setting-mega-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change mega menu dropdowns style" data-container="body"
                                data-placement="left">
                            <option value="dark" selected="selected">Dark</option>
                            <option value="light">Light</option>
                        </select>
                    </li>
                    <li>
                        Mega Menu Mode
                        <select class="theme-setting theme-setting-mega-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) mega menu" data-container="body"
                                data-placement="left">
                            <option value="fixed" selected="selected">Fixed</option>
                            <option value="not-fixed">Not Fixed</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
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
            <span class="caption-subject font-green bold uppercase">Th&#244;ng tin hồ sơ</span>
        </div>
    </div>
    <div class="portlet-body row tths-container" id="profile-container">
        <div class="col-md-5 col-sm-12">
            <div class="profile-userpic">
                <img src="{{asset('images/icon.png')}}" class="img-responsive op-05" alt="">
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
                            <i class="fa fa-edit"></i> Qu&#225; tr&#236;nh học tập
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
                <br><br>
                <img src="{{asset('images/1.png')}}" class="item-pic rounded atavar-item op-05" />
            </div>
            <div class="profile-usertitle-job t-center">
                <div data-bind="text: name" style="display: inline;">GVCN: Lý Huệ</div>
            </div>
        </div>
    </div>
</div>

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
                    <tr class="uppercase" >
                        <th>M&#244;n học</th>
                        <th>Gi&#225;o vi&#234;n</th>
                        <th>ĐTDĐ</th>
                    </tr>
                </thead>
                <tbody name="teachers" >
                    <tr>
                        <td class="t-left">
                            <span name="subjectName"> Toán Học</span>
                        </td>
                        <td class="t-left">
                            {{-- <img class="item-pic rounded atavar-item" alt="" data-bind="attr: { src: 'data:image/png;base64,' + image }" /> --}}
                            <img class="item-pic rounded atavar-item op-05" src="{{asset('images/user.png')}}">
                            <span name="teacherName">Lê Trung Tín</span>
                        </td>
                        <td class="t-left" name="mobile">
                            <span name="mobile">0123456789</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-left">
                            <span name="subjectName"> Ngữ Văn</span>
                        </td>
                        <td class="t-left">
                            {{-- <img class="item-pic rounded atavar-item" alt="" data-bind="attr: { src: 'data:image/png;base64,' + image }" /> --}}
                            <img class="item-pic rounded atavar-item op-05" src="{{asset('images/user.png')}}">
                            <span name="teacherName">Lê Trung Tín</span>
                        </td>
                        <td class="t-left" name="mobile">
                            <span name="mobile">0123456789</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-left">
                            <span name="subjectName"> Vật Lý</span>
                        </td>
                        <td class="t-left">
                            {{-- <img class="item-pic rounded atavar-item" alt="" data-bind="attr: { src: 'data:image/png;base64,' + image }" /> --}}
                            <img class="item-pic rounded atavar-item op-05" src="{{asset('images/user.png')}}">
                            <span name="teacherName">Lê Trung Tín</span>
                        </td>
                        <td class="t-left" name="mobile">
                            <span name="mobile">0123456789</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-left">
                            <span name="subjectName"> Hoá Học</span>
                        </td>
                        <td class="t-left">
                            {{-- <img class="item-pic rounded atavar-item" alt="" data-bind="attr: { src: 'data:image/png;base64,' + image }" /> --}}
                            <img class="item-pic rounded atavar-item op-05" src="{{asset('images/user.png')}}">
                            <span name="teacherName">Lê Trung Tín</span>
                        </td>
                        <td class="t-left" name="mobile">
                            <span name="mobile">0123456789</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-left">
                            <span name="subjectName"> Sinh Học</span>
                        </td>
                        <td class="t-left">
                            {{-- <img class="item-pic rounded atavar-item" alt="" data-bind="attr: { src: 'data:image/png;base64,' + image }" /> --}}
                            <img class="item-pic rounded atavar-item op-05" src="{{asset('images/user.png')}}">
                            <span name="teacherName">Lê Trung Tín</span>
                        </td>
                        <td class="t-left" name="mobile">
                            <span name="mobile">0123456789</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-left">
                            <span name="subjectName"> Anh Văn</span>
                        </td>
                        <td class="t-left">
                            {{-- <img class="item-pic rounded atavar-item" alt="" data-bind="attr: { src: 'data:image/png;base64,' + image }" /> --}}
                            <img class="item-pic rounded atavar-item op-05" src="{{asset('images/user.png')}}">
                            <span name="teacherName">Lê Trung Tín</span>
                        </td>
                        <td class="t-left" name="mobile">
                            <span name="mobile">0123456789</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-left">
                            <span name="subjectName"> Anh Văn</span>
                        </td>
                        <td class="t-left">
                            {{-- <img class="item-pic rounded atavar-item" alt="" data-bind="attr: { src: 'data:image/png;base64,' + image }" /> --}}
                            <img class="item-pic rounded atavar-item op-05" src="{{asset('images/user.png')}}">
                            <span name="teacherName">Lê Trung Tín</span>
                        </td>
                        <td class="t-left" name="mobile">
                            <span name="mobile">0123456789</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-left">
                            <span name="subjectName"> Anh Văn</span>
                        </td>
                        <td class="t-left">
                            {{-- <img class="item-pic rounded atavar-item" alt="" data-bind="attr: { src: 'data:image/png;base64,' + image }" /> --}}
                            <img class="item-pic rounded atavar-item op-05" src="{{asset('images/user.png')}}">
                            <span name="teacherName">Lê Trung Tín</span>
                        </td>
                        <td class="t-left" name="mobile">
                            <span name="mobile">0123456789</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-left">
                            <span name="subjectName"> Anh Văn</span>
                        </td>
                        <td class="t-left">
                            {{-- <img class="item-pic rounded atavar-item" alt="" data-bind="attr: { src: 'data:image/png;base64,' + image }" /> --}}
                            <img class="item-pic rounded atavar-item op-05" src="{{asset('images/user.png')}}">
                            <span name="teacherName">Lê Trung Tín</span>
                        </td>
                        <td class="t-left" name="mobile">
                            <span name="mobile">0123456789</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-left">
                            <span name="subjectName"> Anh Văn</span>
                        </td>
                        <td class="t-left">
                            {{-- <img class="item-pic rounded atavar-item" alt="" data-bind="attr: { src: 'data:image/png;base64,' + image }" /> --}}
                            <img class="item-pic rounded atavar-item op-05" src="{{asset('images/user.png')}}">
                            <span name="teacherName">Lê Trung Tín</span>
                        </td>
                        <td class="t-left" name="mobile">
                            <span name="mobile">0123456789</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-left">
                            <span name="subjectName"> Anh Văn</span>
                        </td>
                        <td class="t-left">
                            {{-- <img class="item-pic rounded atavar-item" alt="" data-bind="attr: { src: 'data:image/png;base64,' + image }" /> --}}
                            <img class="item-pic rounded atavar-item op-05" src="{{asset('images/user.png')}}">
                            <span name="teacherName">Lê Trung Tín</span>
                        </td>
                        <td class="t-left" name="mobile">
                            <span name="mobile">0123456789</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-left">
                            <span name="subjectName"> Anh Văn</span>
                        </td>
                        <td class="t-left">
                            {{-- <img class="item-pic rounded atavar-item" alt="" data-bind="attr: { src: 'data:image/png;base64,' + image }" /> --}}
                            <img class="item-pic rounded atavar-item op-05" src="{{asset('images/user.png')}}">
                            <span name="teacherName">Lê Trung Tín</span>
                        </td>
                        <td class="t-left" name="mobile">
                            <span name="mobile">0123456789</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-left">
                            <span name="subjectName"> Anh Văn</span>
                        </td>
                        <td class="t-left">
                            {{-- <img class="item-pic rounded atavar-item" alt="" data-bind="attr: { src: 'data:image/png;base64,' + image }" /> --}}
                            <img class="item-pic rounded atavar-item op-05" src="{{asset('images/user.png')}}">
                            <span name="teacherName">Lê Trung Tín</span>
                        </td>
                        <td class="t-left" name="mobile">
                            <span name="mobile">0123456789</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-left">
                            <span name="subjectName"> Anh Văn</span>
                        </td>
                        <td class="t-left">
                            {{-- <img class="item-pic rounded atavar-item" alt="" data-bind="attr: { src: 'data:image/png;base64,' + image }" /> --}}
                            <img class="item-pic rounded atavar-item op-05" src="{{asset('images/user.png')}}">
                            <span name="teacherName">Lê Trung Tín</span>
                        </td>
                        <td class="t-left" name="mobile">
                            <span name="mobile">0123456789</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-left">
                            <span name="subjectName"> Anh Văn</span>
                        </td>
                        <td class="t-left">
                            {{-- <img class="item-pic rounded atavar-item" alt="" data-bind="attr: { src: 'data:image/png;base64,' + image }" /> --}}
                            <img class="item-pic rounded atavar-item op-05" src="{{asset('images/user.png')}}">
                            <span name="teacherName">Lê Trung Tín</span>
                        </td>
                        <td class="t-left" name="mobile">
                            <span name="mobile">0123456789</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-left">
                            <span name="subjectName"> Anh Văn</span>
                        </td>
                        <td class="t-left">
                            {{-- <img class="item-pic rounded atavar-item" alt="" data-bind="attr: { src: 'data:image/png;base64,' + image }" /> --}}
                            <img class="item-pic rounded atavar-item op-05" src="{{asset('images/user.png')}}">
                            <span name="teacherName">Lê Trung Tín</span>
                        </td>
                        <td class="t-left" name="mobile">
                            <span name="mobile">0123456789</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
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
                                <td rowspan="5" class="sectionName b-r-1">
                                    <div class="t-vertical" data-bind="text: $parentContext.$data.sectionName"></div>
                                </td>
                                <td class="sectionName sectionName-detail">
                                    <div data-bind="text: $parentContext.$data.name"></div>
                                </td>
                                <td class="cell">
                                    <div data-bind="text: subjectName, style: {color: color}"></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
</div>     
                        <div class="portlet light " id="detail-mail" hidden>
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-envelope font-green"></i>
                                    <span class="caption-subject font-green bold uppercase">Chi tiết thư</span>
                                </div>
                                <div class="actions">
                                    <a id="btn-open-mail-detail" onclick="openMailDetail()" class="btn btn-circle btn-icon-only btn-default fullscreen c-skin" href="javascript:;" data-original-title="" title="" aria-describedby="tooltip832312"> </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="scroller" style="height: 338px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                    <div class="general-item-list mail">
                                        <div class="item">
                                            <div class="item-head">
                                                <div class="item-details">
                                                    <img id="has-img" class="item-pic rounded atavar-item" alt="" hidden/>
                                                    
                                                    <img id="not-img" class="item-pic rounded atavar-item op-05" src="{{asset('images/school.png')}}" hidden>
                                                    
                                                    <span class="item-name primary-link" id="sender"></span>
                                                    <span class="item-label" id="createDate"></span>
                                                </div>
                                                <span class="item-status">
                                                    <span class="fa fa-caret-left"></span> <a onclick="backListMail()">Quay lại</a>
                                                </span>
                                            </div>
                                            <div class="item-body" id="content"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input id="open-mail" value=0 hidden />
                        <input id="open-mail-detail" value=0 hidden />            
</div>
</div>
<div class="portlet light ">
    <div class="portlet-body news-container" id="news">
        <div class="scroller" data-bind="style: { height: news().length >= 5 ? '300px' : 'auto' }" data-always-visible="1" data-rail-visible="0">
            <!-- ko if: !news().length -->
                <div>Chưa c&#243; th&#244;ng tin mới về điểm danh, khen thưởng, vi phạm, kỷ luật.</div>
            <!-- /ko -->
            {{-- <ul id="news-list" class="feeds" data-bind="foreach: news">
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
            </div> --}}
        </div>
    </div>
</div>
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
        <a href="javascript:;" class="page-quick-sidebar-toggler">
    <i class="icon-login"></i>
</a>
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
    @include('school.blocks.foot')
</body>
</html>