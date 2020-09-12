<form role="form">
    <div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog"  id="change_password">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Đổi mật khẩu</h4>
                </div>
                <div class="modal-body">
                    <div class="scroller" style="height: 300px" data-always-visible="1" data-rail-visible1="1">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="portlet-body">
                                    <p id="errorMsg" style="margin: 0; color: red"></p>
                                    <p id="successMsg" style="margin: 0; color: green"></p>
                                    <div class="form-group form-md-line-input form-md-floating-label m-b-15">
                                        <input type="password" class="form-control" id="currentPassword" value="">
                                        <label for="form_control_1">Mật khẩu hiện tại</label>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label m-b-15">
                                        <input type="password" class="form-control" id="newPassword" value="">
                                        <label for="form_control_1">Mật khẩu mới</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label m-b-15">
                                        <input type="password" class="form-control" id="repeatPassword" value="">
                                        <label for="form_control_1">X&#225;c nhận mật khẩu mới</label>
                                    </div>
                                    <div class="form-group form-md-line-input has-error">
                                        <label for="form_control_1">
    Phụ huynh n&#234;n sử dụng mật khẩu mạnh: chiều d&#224;i tối thiểu 8 k&#253; tự, gồm chữ, số v&#224; k&#253; tự đặc biệt.                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn dark btn-outline">Đ&#243;ng</button>
                        <button type="button" class="btn green" onclick="validate();">Cập nhật</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript">
    function hasSpecialCharacter(password) {
        var codeList = [33, 34, 64, 35, 36, 37, 94, 38];
        for (var i = 0; i < password.length; i++) {
            if ($.inArray(password.charCodeAt(i), codeList) !== -1) {
                return true;
            }
        }
        return false;
    }

    function refeshForm() {
        $("#errorMsg").html('');
        $("#successMsg").html('');
        $('#currentPassword').val('');
        $('#newPassword').val('');
        $('#repeatPassword').val('');
    }

    function validate() {
        $("#errorMsg").html('');
        $("#successMsg").html('');
        var currentPassword = $("#currentPassword").val();
        var newPassword = $("#newPassword").val();
        var repeatPassword = $("#repeatPassword").val();

        if (currentPassword === '') {
            $("#errorMsg").html('Chưa nhập mật khẩu cũ');
            $("#currentPassword").focus();
            return;
        }
        if (currentPassword.length < 8) {
            $("#errorMsg").html('Mật khẩu phải c&#243; &#237;t nhất 8 k&#253; tự');
            $("#currentPassword").focus();
            return;
        }
        /////////////////////////////////////////////////////////////////////////////////
        if (newPassword === '') {
            $("#errorMsg").html('Chưa nhập mật khẩu mới');
            $("#newPassword").focus();
            return;
        }
        if (newPassword.length < 8) {
            $("#errorMsg").html('Mật khẩu phải c&#243; &#237;t nhất 8 k&#253; tự');
            $("#newPassword").focus();
            return;
        }
        /////////////////////////////////////////////////////////////////////////////////
        if (repeatPassword === '') {
            $("#errorMsg").html('Chưa nhập x&#225;c nhận mật khẩu mới');
            $("#repeatPassword").focus();
            return;
        }
        if (repeatPassword !== newPassword) {
            $("#errorMsg").html('X&#225;c nhận mật khẩu mới kh&#244;ng hợp lệ');
            $("#repeatPassword").focus();
            return;
        }

        if (newPassword === currentPassword) {
            $("#errorMsg").html('Mật khẩu mới phải kh&#225;c mật khẩu cũ');
            $("#newPassword").focus();
            return;
        }

        $.ajax({
            type: "POST",
            contentType: "application/json",
            dataType: "json",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8',
                "Authorization": "Bearer " + 'ivGvdZSEr6l_Y3pcJ1r56jxENgPNG2_wm2oPEPl4sTDSKze-2ITrlLie_CV8ybSrMk5Jd1hAGuVOOGJqOBNoZ6LBStfQ6VLuhFKsdr8jQiOzftTxVZqp0n1-9f_vk5u1fU7bSsgouTSsvGpH96X7Qf2o7kKIVtGhHO9vzEl8Z6JnCm49Z9JP1rsToIkfLuEO7GMi6AbGzAJ0UiywL7GN2fDlQyom1wrFu-KXveBz3GSLU73wEXsSD0dW8pEmGfpx4TVIZxEWxbTA6hjb90CQrxqMoI2lqhzpM7NXRAxO6O4iLUJcfPvOz1YwnFwOHnDiEvZU4W88rWOYQvGQ0w_bD4_3WMr8cs8P3KidDXlnYLkTUGVRxoXkRbsw9IfpY1VLVXq6lnJ3gLGKdrCL4wj7azbfOOyzdqN7rsdVYRc3ARXObdOIlR2fg7Mi4vt1ckKGjAV2V7k7EY6EaXGsXylztKECVV0lrn-aWyGXvG9RPgrkk0R6SgTD0bIhEd9apgGjCCFvQCnmZ8xT8XnJqtUrptBzQG8'
            },
            url: config.apiBaseUrl + "api/account/changePassword?username=0399163107&password="
                + encodeURIComponent(currentPassword) + "&newPassword=" + encodeURIComponent(newPassword) + "&confirmPassword=" + encodeURIComponent(repeatPassword),
            beforeSend: function () { AddLoading() },
        }).done(function (data) {
            RemoveLoading();
            if (data.status == true) {
                $('#currentPassword').val('');
                $('#newPassword').val('');
                $('#repeatPassword').val('');
                $('#successMsg').html(data.message);

            }
            else {
                $('#errorMsg').html(data.message);
            }
        })
    }
</script>