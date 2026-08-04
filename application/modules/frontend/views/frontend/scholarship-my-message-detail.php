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
            <div class="col-12 scls-head">
                <div class="message-text">
                    <div class="message-sender"><span>From : </span><?php if(!empty($row)) echo $row->webboard_username;?><span> -  <?php if(!empty($row)) echo date2DateEnBasic($row->webboard_datetime);?></span></div>
                </div>
                <h3><?php if(!empty($row)) echo $row->webboard_topic;?></h3>
                <div class="message-action">
                    <button><i class="fas fa-reply"></i></button>
                    <button><i class="fas fa-trash-alt"></i></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 message-detail">
                <!-- <p>ขอความร่วมมือผู้รับทุนทุกท่าน เข้าไปดำเนินการกรอกผลการศึกษาในหน้า <a href="#">“My Study”</a> ให้แล้วเสร็จ ภายในวันที่ 10 กรกฎาคม 2022</p>
                <p>CP Scholarship Program ขอขอบคุณในความร่วมมือ</p> -->
                <?php if(!empty($row)) echo $row->webboard_detail;?>
            </div>
            <div class="col-12 scls-subhead">
                <h3>ตอบกลับ</h3>
            </div>
            <div class="col-12">
<?php
//pre($my_message);

if(!empty($my_message)) {
    foreach($my_message as $r) {
        if($r->user_id != 0) {
            $user = $this->model_frontend->getUserRow($r->user_id);

            if(!empty($user)) {
?>
                <div class="message-list">
                    <a href="#" class="message-text">
                        <div class="message-sender"><span>From : </span><?php echo $user->user_name;?>(<?php echo $user->user_username;?>)<span> -  <?php echo $r->my_message_datetime_create;?> น.</span></div>
                        <p><?php echo $r->my_message_answer;?></p>
                    </a>
                </div>
<?php
            }
        } elseif($r->profile_id != 0) {
            $profile = $this->model_frontend->getProfileRow($r->profile_id);
            
            if(!empty($profile)) {
?>
                <div class="message-list">
                    <a href="#" class="message-text">
                        <div class="message-sender"><span>From : </span><?php echo $profile->profile_name_th.' '.$profile->profile_surname_th;?><span> -  <?php echo $r->my_message_datetime_create;?> น.</span></div>
                        <p><?php echo $r->my_message_answer;?></p>
                    </a>
                </div>
<?php
            }
        }
    }
}
?>
                <!-- <div class="message-list message-list-reply">
                    <a href="#" class="message-text">
                        <div class="message-sender"><span>From : </span>CPSP Reminder<span> -  03.07.2565 - 9.00 น.</span></div>
                        <p>ภายในเดือนสิงหาคมค่ะ</p>
                    </a>
                    <div class="message-action">
                        <button><i class="fas fa-reply"></i></button>
                        <button><i class="fas fa-trash-alt"></i></button>
                    </div>
                </div>
                <div class="message-list message-list-reply">
                    <a href="#" class="message-text">
                        <div class="message-sender"><span>From : </span>CPSP Reminder<span> -  05.07.2565 - 9.00 น.</span></div>
                        <p>ยื่นไปแล้วค่ะ</p>
                    </a>
                    <div class="message-action">
                        <button><i class="fas fa-reply"></i></button>
                        <button><i class="fas fa-trash-alt"></i></button>
                    </div>
                </div> -->
                <form action="<?php echo site_url('frontend/path/scholarship_my_message_detail_/'.$webboard_id);?>" method="post">
                <div class="message-list message-list-reply message-list-reply-comment">
                    <h5>ตอบกลับ</h5>
                    <textarea rows="3" name="my_message_answer" class="form-control" required></textarea>
                    <input type="submit" name="submit" class="btn-replay" value="ส่งข้อความ">
                </div>
                </form>
            </div>
        </div>
    </div>
  </section>
  <?php require('inc_footer.php'); ?>

<script>
$(document).ready(function(){
    $('.scls-menu>ul>li:nth-child(1)').addClass('active');
    $('.scls-menu>ul>li:nth-child(1) .submenu li:nth-child(2)').addClass('active');
});    
</script>
</body>
</html>