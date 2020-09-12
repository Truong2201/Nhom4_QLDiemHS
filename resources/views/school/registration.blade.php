<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<head>
    <title>Đăng Ký Tài Khoản</title>
    <!-- BEGIN PAGE LEVEL STYLES -->
    
    <!-- END PAGE LEVEL STYLES -->
    
    
    <meta charset="utf-8" />
<title>Đăng Ký Tài Khoản</title>
<link rel="shortcut icon" href="../images/sparent.ico" type="image/ico" />

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../css/login.css" rel="stylesheet" type="text/css" />
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
                    <div class="col-lg-7 col-md-8 logo-image">
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
                            <img src="../images/2.png" class="icon" alt="">
                            <input value="" class="input-field" type="text" placeholder="Nhập Tên" autocomplete="off" name="email" id="name" required="">
                        </div>
                        <div class="input-container">
                            <img src="../images/email.png" class="icon" alt="">
                            <input value="" class="input-field" type="text" placeholder="Nhập Email" autocomplete="off" name="email" id="email" required="">
                        </div>
                        <div class="input-container">
                            <img src="../images/matkhau.jpg" class="icon" alt="" style="padding-right: 11px;">
                            <input value="" class="input-field" type="password" autocomplete="off" placeholder="Mật khẩu" name="password" id="password" required="">
                        </div>
                        <input type="submit" class="btnlogin" value="Đăng Ký">
                        <button class="submit btn green pull-right " style="display: none;"></button>
                    </form>
                    <!-- END LOGIN FORM -->
                    <!-- BEGIN FORGOT PASSWORD FORM -->
                    <!-- END FORGOT PASSWORD FORM -->
                </div>
                <div class="row footer">
                    <div class="row">
                        <div class="col-lg-1 col-md-2"></div>
                        <div class="col-lg-8 col-md-8 note-sparent">
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