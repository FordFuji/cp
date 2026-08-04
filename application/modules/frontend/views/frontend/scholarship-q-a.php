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
            <div class="scls-head">
                <h2>Q&A</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 career-tab">
<?php
if(!empty($q_a)) {
    $i = 0;
    foreach($q_a as $r) {
?>
                <div class="accordion-item">
                    <h2><?php echo $r->q_a_question;?><i class="fas fa-angle-down"></i></h2>
                    <div <?php if($i == 0) { ?> style="display: block;" <?php } ?>>
                        <?php echo $r->q_a_answer;?>
                    </div>
                </div>
<?php
        $i++;
    }
}

/*
?>
                <div class="accordion-item">
                    <h2>คำถามที่ 2<i class="fas fa-angle-down"></i></h2>
                    <div>
                        <h5>Sed lacinia tortor non interdum tempus.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor diam sed enim posuere rutrum. Ut sapien ex, vehicula vitae molestie volutpat, bibendum ac lorem. Suspendisse aliquam efficitur ligula, sit amet blandit diam consequat id. Phasellus a vestibulum tellus. Donec molestie, purus nec rutrum convallis, sem dui maximus erat, ac pellentesque nulla diam quis orci. Sed nulla augue, euismod ac facilisis in, pellentesque ac velit. Proin dignissim at augue ac hendrerit. Proin vitae facilisis ligula.</p>
                        <h5>Vestibulum tempus diam quis mi feugiat congue.</h5>
                        <p>Pellentesque a enim ultricies, feugiat purus quis, tristique urna. Nam eu orci a eros sodales iaculis non ut odio. Proin at ante ut risus rutrum egestas at et tellus. Morbi lacinia dui ac sodales malesuada. Proin euismod lorem sit amet ante vestibulum, non maximus elit molestie.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2>คำถามที่ 3<i class="fas fa-angle-down"></i></h2>
                    <div>
                        <h5>Sed lacinia tortor non interdum tempus.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor diam sed enim posuere rutrum. Ut sapien ex, vehicula vitae molestie volutpat, bibendum ac lorem. Suspendisse aliquam efficitur ligula, sit amet blandit diam consequat id. Phasellus a vestibulum tellus. Donec molestie, purus nec rutrum convallis, sem dui maximus erat, ac pellentesque nulla diam quis orci. Sed nulla augue, euismod ac facilisis in, pellentesque ac velit. Proin dignissim at augue ac hendrerit. Proin vitae facilisis ligula.</p>
                        <h5>Vestibulum tempus diam quis mi feugiat congue.</h5>
                        <p>Pellentesque a enim ultricies, feugiat purus quis, tristique urna. Nam eu orci a eros sodales iaculis non ut odio. Proin at ante ut risus rutrum egestas at et tellus. Morbi lacinia dui ac sodales malesuada. Proin euismod lorem sit amet ante vestibulum, non maximus elit molestie.</p>
                    </div>
                </div>
<?php
*/
?>
            </div>
        </div>
    </div>
  </section>
  <?php require('inc_footer.php'); ?>

<script>
$(document).ready(function(){
    $('.scls-menu>ul>li:nth-child(4)').addClass('active');
});    
</script>
</body>
</html>