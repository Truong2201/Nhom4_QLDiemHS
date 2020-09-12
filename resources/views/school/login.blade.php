<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<head>
    <title>Đăng nhập hệ thống</title>
    <!-- BEGIN PAGE LEVEL STYLES -->
    
    <!-- END PAGE LEVEL STYLES -->
    
    
    <meta charset="utf-8" />
<title>Đăng nhập hệ thống</title>
<link rel="shortcut icon" href="../images/sparent.ico" type="image/ico" />

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css" />
<script type="text/javascript"  src="../js/jquery.min.js"></script>
<!-- END LOGIN STYLES -->
</head>
<body class="login">
    <!-- BEGIN LOGIN -->
<div class="table-view"> 
    @csrf
    <div class="container-fluid box-login1 paddingContainer" id="display-container">
        <div class="row box-content">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="row logo-container paddingLogo">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-7 col-md-16 logo-image">
                        <img src="../images/logo.png" alt="" class="logo">
                    </div>
                    <div class="col-lg-4 col-md-3"></div>
                </div>
                <div class="row logo2">
                    <div class="col-lg-3 col-md-4"></div>
                    <div class="col-lg-4 col-md-3 logo-user-image">
                        <img src="../images/asd.jpg" class="User_Login" alt="">
                    </div>
                    <div class="col-lg-5 col-md-5"></div>
                </div>
                <div class="row">
                    <!-- BEGIN LOGIN FORM -->
                <form class="login-form" action="" method="post">
                        @csrf
                        <div class="form-group">
                            <p class="ErrorMsgStyle" id="errorMsgLogin" style="color: red; text-align: center;"></p>
                        </div>
                        <div class="input-container">
                            <img src="../images/email.png" class="icon" alt="">
                            <input value="" class="input-field" type="text" placeholder="Nhập Email" autocomplete="off" name="email" id="UserName" required="">
                        </div>
                        <div class="input-container">
                            <img src="../images/matkhau.jpg" class="icon" alt="" style="padding-right: 11px;">
                            <input value="" class="input-field" type="password" autocomplete="off" placeholder="Mật khẩu" name="password" id="Password" required="">
                        </div>
                        {{-- <div class="row">
                            <div class="col-lg-12 forgot-password-container">
                                <label class="container-checkbox col-lg-6 col-md-5 col-sm-5 col-xs-5">
                                    Ghi nhớ
                                <input type="checkbox"  name='Remember' value='true' >
                                    <span class="checkmark"></span>
                                </label>
                                <span class="col-lg-4 col-md-6 col-sm-6 col-xs-6 forgot-password "><a href="{{asset('registration')}}" onclick="move_on_form_forgotpass();"style="color: #0174DF;font: 20px;">Đăng Ký</a></span>
                                <span class="col-lg-6 col-md-7 col-sm-7 col-xs-7 forgot-password"><a href="javascript:;" onclick="move_on_form_forgotpass();" id="forget-password" style="color: #FF0000;">Quên mật khẩu</a></span>
                            </div>
                        </div> --}}
                        <input type="submit" class="btnlogin" value="Đăng nhập">
                        <button class="submit btn green pull-right " style="display: none;"></button>
                    </form>
                    <!-- END LOGIN FORM -->
                    <!-- BEGIN FORGOT PASSWORD FORM -->
                    {{-- <form class="forget-form" action="" method="post" style="display: none;">
                        <p class="txt-capmk">Kh&#244;i phục mật khẩu </p>
                        <div class="form-group">
                            <div class="input-icon">
                                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Số điện thoại" name="phone" id="userName" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 captcha-container">
                                <div class="captcha-image">
                                    <img id="captchaResetPassword" src="../captcha/reserPassword" alt="Captcha" />
                                </div>
                                <div class="refresh-captcha">
                                    <a href="javascript:ReloadCapchaImageLostPwd('captchaResetPassword');" id="forReset" title="Refesh">
                                        <i class="fa fa-refresh fa-2x" id="iconRefesh"></i>
                                    </a>
                                </div>

                                <div class="input-captcha">
                                    <input type="text" name="txtCaptchaResetPassword" onkeypress="return notKeySpace(event);" maxlength="10"
                                        id="txtCaptchaResetPassword" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <p class="renew-password txtNote">Hệ thống sẽ cấp lại mật khẩu của Phụ huynh học sinh qua số điện thoại đăng k&#253;.</p>
                        <div class="form-actions">
                            <button type="button" class="btn green btn-fogot-pass" onclick="getPassword();">Kh&#244;i phục mật khẩu </button>
                            <button type="button" id="back-btn" class="btn red btn-outline" onclick="move_on_form_login(0, 3);">Quay lại </button>
                        </div>

                        <p class="ErrorMsgStyle" id="errorMsg" style="color: red; text-align: center;">
                        </p>
                        <p class="Label1Style" id="sucessMsg" style="color: red;">
                        </p>

                    </form> --}}
                    <!-- END FORGOT PASSWORD FORM -->
                </div>
                <div class="row footer">
                    <div class="row">
                        <div class="col-lg-1 col-md-2"></div>
                        <div class="col-lg-8 col-md-8 note-sparent">
                            <p>Sổ liên lạc điện tử</p>
                        </div>
                        <div class="col-lg-3 col-md-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>
   <!-- BEGIN CORE PLUGINS -->
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <script src="../js/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js.cookie.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="../js/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="../js/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="../js/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="../js/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="../js/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="../js/app.min.js" type="text/javascript"></script>
</body>
</html>