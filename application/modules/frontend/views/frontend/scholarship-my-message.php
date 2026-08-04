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
                <h2>My Message</h2>
                <div class="scls-head-message">คุณมี<span><?php if(!empty($unread)) echo number_format(count($unread), 0, '.', ','); else echo 0;?></span>ข้อความใหม่</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 message-wrap">
<?php
if(!empty($rows)) {
    foreach($rows as $r) {
?>
                <div class="message-list unread undelete_<?php echo $r->webboard_id;?>">
                    <a href="#" class="message-text">
                        <div class="message-sender"><?php echo $r->webboard_username;?><span>-  <?php echo date2DateEnBasic($r->webboard_datetime);?></span></div>
                        <p class="twolines"><?php echo $r->webboard_topic;?></p>
                    </a>
                    <div class="message-action">
<?php
        if($r->webboard_status_read == 'unread') {
?>
                        <button id="reader_<?php echo $r->webboard_id;?>" onclick="read('<?php echo $r->webboard_id;?>');"><i class="fas fa-minus-circle"></i></button>
<?php
        }
?>
                        <button onclick="window.location.href = '<?php echo site_url('scholarship_my_message_detail/'.$r->webboard_id);?>';"><i class="fas fa-reply"></i></button>
                        <button onclick="delete_('<?php echo $r->webboard_id;?>');"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </div>
<?php
    }
}

/*
?>
                <div class="message-list">
                    <a href="<?php echo site_url('scholarship_my_message_detail');?>" class="message-text">
                        <div class="message-sender">CPSP Reminder<span>-  30.06.2565 - 9.00 น.</span></div>
                        <p class="twolines">กรุณาเข้าไปดำเนินการกรอกผลการศึกษา</p>
                    </a>
                    <div class="message-action">
                        <button><i class="fas fa-check-circle"></i></button>
                        <button><i class="fas fa-reply"></i></button>
                        <button><i class="fas fa-trash-alt"></i></button>
                    </div>
                </div>
                <div class="message-list">
                    <a href="<?php echo site_url('scholarship_my_message_detail');?>" class="message-text">
                        <div class="message-sender">CPSP Reminder<span>-  30.06.2565 - 9.00 น.</span></div>
                        <p class="twolines">กรุณาเข้าไปดำเนินการกรอกผลการศึกษา</p>
                    </a>
                    <div class="message-action">
                        <button><i class="fas fa-check-circle"></i></button>
                        <button><i class="fas fa-reply"></i></button>
                        <button><i class="fas fa-trash-alt"></i></button>
                    </div>
                </div> */ ?>
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

function read(webboard_id) {
    $.post('<?php echo site_url('frontend/path/ajaxSetRead');?>', { webboard_id: webboard_id }, function(data) {
        $("#reader_" + webboard_id).hide();
    });
}

function delete_(webboard_id) {
    if(confirm('Confirm Delete') == true) {
        $.post('<?php echo site_url('frontend/path/ajaxDeleteWebboard');?>', { webboard_id: webboard_id }, function(data) {
            $(".undelete_" + webboard_id).hide();
        });
    }
}
</script>
</body>
</html>