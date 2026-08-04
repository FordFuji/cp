<!doctype html>
<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>โครงการทุนการศึกษา เครือเจริญโภคภัณฑ์</title>
<?php require('inc_header.php'); ?>
</head>
<body class="scholarship-bg">
  <?php require('inc_menu.php'); ?>
  <section class="container-fluid wow fadeInDown container-height">
  <?php require('inc_menu_scholarship.php'); ?>
    <div class="container scls-bg-container">
        <div class="row">
            <div class="col-12 offset-md-3 col-md-6 offset-0 offset-lg-4 col-lg-4 scls-head">
                <h2>Change Password</h2>
            </div>
            <div class="col-12 offset-md-3 col-md-6 offset-0 offset-lg-4 col-lg-4">
                <div class="login-form">
                    <input type="password" placeholder="รหัสผ่านเดิม" name="old_password" id="old_password">
                </div>
                <div class="login-form">
                    <input type="password" placeholder="รหัสผ่านใหม่" name="profile_password" id="profile_password">
                </div>
                <div class="login-form">
                    <input type="password" placeholder="ยืนยันรหัสผ่านใหม่" name="confirm_password" id="confirm_password">
                </div>
                <div class="login-btn-wrap">
                    <button class="login-btn" onclick="changePassword();">ยืนยันเปลี่ยนรหัสผ่าน</button>
                </div>
                <br>
            </div>
        </div>
    </div>
  </section>
  <?php require('inc_footer.php'); ?>

<script>
$(document).ready(function(){
    $('.scls-menu>ul>li:nth-child(5)').addClass('active');
});    

function changePassword() {
    if($("#old_password").val() == '') {
        alert('กรุณากรอกรหัสผ่านเดิม');

        $("#old_password").focus();
    } else if($("#profile_password").val() == '') {
        alert('กรุณากรอกรหัสผ่านใหม่');

        $("#profile_password").focus();
    } else if($("#confirm_password").val() == '') {
        alert('กรุณากรอกยืนยันรหัสผ่านใหม่');

        $("#profile_password").focus();
    } else if($("#profile_password").val() != $("#confirm_password").val()) {
        alert('รหัสผ่านใหม่ไม่ตรงกัน');

        $("#profile_password").val('');
        $("#confirm_password").val('');
    } else {
        $.post('<?php echo site_url('frontend/path/ajaxChangePassword');?>', { old_password: $("#old_password").val(), profile_password: $("#profile_password").val() }, function(data) {
            if(data == 'รหัสผ่านเดิมไม่ถูกต้อง') {
                $("#old_password").val('');
            }

            alert(data);
        });
    }
}
</script>
</body>
</html>