<!doctype html>
<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>โครงการทุนการศึกษา เครือเจริญโภคภัณฑ์</title>
<?php require('inc_header.php'); ?>
</head>
<body class="first-page">
  <?php require('inc_menu.php'); ?>
  <section class="container-fluid wow fadeInDown">
    <div class="row">
      <div class="col-12 banner-slide">
        <div class="owl-carousel owl-theme banner-carousel">
<?php
if(!empty($bannerSlide)) {
  foreach($bannerSlide as $r) {
?>
          <div class="banner-item">
            <img src="<?php echo base_url('uploads/banner_slide/'.$r->banner_slide_image);?>" alt="">
            <figcaption class="container">
              <hgroup>
                <h5><?php echo $r->banner_slide_text1;?></h5>
                <h1><?php echo $r->banner_slide_text2;?></h1>
                <h3><?php echo $r->banner_slide_text3;?></h3>
              </hgroup>
              <p>
              <?php echo $r->banner_slide_text4;?>
                </p>
              <a href="<?php echo $r->banner_slide_link;?>">About Us<span><i class="fas fa-angle-right"></i></span></a>
            </figcaption>
          </div>
<?php
  }
}
?>
          <!-- <div class="banner-item">
            <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
            <figcaption class="container">
              <hgroup>
                <h5>CP SCHOLARSHIP PROGRAM</h5>
                <h1>โครงการทุนการศึกษา</h1>
                <h3>เครือเจริญโภคภัณฑ์</h3>
              </hgroup>
              <p>
                Duis facilisis tempor finibus. Integer posuere, erat id malesuada 
                dignissim, risus eros dictum sapien, et semper magna eros semper 
                lacus. Aenean mattis bibendum fermentum.
                </p>
              <a href="#">About Us<span><i class="fas fa-angle-right"></i></span></a> -->
            </figcaption>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php require('inc_footer.php'); ?>

<script>
$(document).ready(function(){

  $(".banner-carousel").owlCarousel({
      loop:true,
      rewind: true,
      // animateOut: 'fadeOut',
      // animateIn: 'fadeIn',
      margin:0,
      nav:false,
      lazyLoad: false,
      navText: ['<span><i class="fas fa-chevron-left"></i></span>','<span><i class="fas fa-chevron-right"></i></span>'],
      autoplayHoverPause: false,
      dots:false,
      autoplay:true,
      autoplayTimeout:8000,
      smartSpeed: 1500,
      stagePadding: 0,
      slideBy: 1,
      items:1
  });

});    
</script>
</body>
</html>