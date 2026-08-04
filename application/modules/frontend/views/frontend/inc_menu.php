<?php
$this->load->helper('cookie');
?>
<header class="header-bg">
    <div class="container">
        <div class="row">
            <div class="col-4 col-lg-3 header-logo">
                <a href="<?php echo site_url('index');?>"><img src="<?php echo base_url('asset/frontend/images/cpsp-sustainability-logo.svg');?>" alt=""></a>
            </div>
            <nav class="col-8 col-lg-9 header-nav">
                <ul class="header-mainmenu">
                    <li><a href="<?php echo site_url('about_us');?>">About us</a></li>
                    <li class="mm-hssub"><a href="#">Alumni Hub</a>
                        <ul class="mm-sub">
                            <!-- <li><a href="<?php echo site_url('alumni_check');?>">Alumni Check</a></li> -->
                            <li><a href="<?php echo site_url('alumni_hub');?>">Alumni activity</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url('souvenir_shop');?>">Souvenir shop</a></li>
                    <li><a href="<?php echo site_url('contact_us');?>">Contact us</a></li>
                    <li>
<?php
if($this->session->userdata('profile_id') != '') {
?>
                        <a href="<?php echo site_url('scholarship_my_profile');?>"><span><i class="fas fa-user"></i></span></a>
                        <a href="<?php echo site_url('frontend/path/logout');?>"> Logout</a>
<?php
} else {
?>
                        <a href="#login" data-fancybox class="btn-login"><span><i class="fas fa-user"></i></span>Current Scholars</a>
<?php
}
?>
                        <div class="login-popup" id="login">
                            <form action="<?php echo site_url('frontend/path/checkLogin');?>" method="post">
                            <h3>Current Scholars Login</h3>
                            <div class="login-form">
                                <i class="fas fa-user"></i>
                                <input type="email" name="profile_email_personal" placeholder="EMAIL" value="<?php echo get_cookie("cp_username");?>">
                            </div>
                            <div class="login-form">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="profile_password" placeholder="PASSWORD" value="<?php echo get_cookie("cp_password");?>">
                            </div>
                            <div class="login-remember">
                                <label class="remembercheck-box">
                                    <input type="checkbox" name="remember_me" value="remember_me" <?php if(!empty(get_cookie("cp_username"))) echo 'checked';?>><div class="remembercheck-symbol"><i class="fas fa-check"></i></div> Remember me
                                </label>
                                <a href="#forgot-password" data-fancybox>Forgot Password?</a>
                            </div>
                            <div class="login-btn-wrap">
                                <input type="submit" class="login-btn" value="LOGIN">
                            </div>
                            </form>
                        </div>
                        <div class="login-popup" id="forgot-password">
                            <h3>Forgot Password?</h3>
                            <div class="login-form">
                                <input type="text" id="forget_password_email" placeholder="Please Enter Email">
                            </div>
                            <div class="login-btn-wrap">
                                <button class="login-btn" onclick="resetPassword();">RESET PASSWORD</button>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="button-menu">
                    <div class="icon-btn-menu">
                        <span></span><span></span><span></span>
                    </div>
                    Menu
                </div>
            </nav>
        </div>
    </div>
</header>
<div class="overlay"></div>

<script>
    function resetPassword() {
        if($("#forget_password_email").val() == '') {
            alert('กรุณากรอกอีเมล์');

            $("#forget_password_email").focus();
        } else if(!isEmail($("#forget_password_email").val())) {
            alert('อีเมล์มีรูปแบบไม่ถูกต้อง');

            $("#forget_password_email").val('');
            $("#forget_password_email").focus();
        } else {
            $.post('<?php echo site_url('frontend/path/ajaxCheckEmail');?>', { forget_password_email: $("#forget_password_email").val() }, function(data) {
                if(data == 'ไม่มีอีเมล์นี้ในระบบ') {
                    $("#forget_password_email").val('');
                }
                alert(data);
            });
        }
    }

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
</script>
