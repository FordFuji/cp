<!doctype html>
<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>โครงการทุนการศึกษา เครือเจริญโภคภัณฑ์</title>
<?php require('inc_header.php'); ?>
</head>
<body>
  <?php require('inc_menu.php'); ?>
  <section class="container-fluid wow fadeInDown">
    <div class="container">
        <div class="row">
            <div class="col-12 alumni-head">
                <h1>Souvenir Shop</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 alumni-subhead">
                <h3>สั่งซื้อเสื้อโปโลโครงการทุน</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme souvenir-carousel">
<?php
if(!empty($cp)) {
    foreach($cp as $r) {
?>
                    <a href="<?php echo $r->souvenir_shop_contact;?>" class="souvenir-item" target="_blank">
                        <figure>
                            <div class="souvenir-img">
                                <img src="<?php echo base_url('uploads/souvenir_shop/'.$r->souvenir_shop_image);?>" alt="">
                            </div>
                            <figcaption>
                                <h4>฿ <?php echo number_format($r->souvenir_shop_price, 2, '.', ',');?> <span>฿ <?php echo number_format($r->souvenir_shop_before_discount_price, 2, '.', ',');?></span></h4>
                                <div class="souvenir-button line-button">
                                    <i class="fab fa-line"></i>
                                    ติดต่อเจ้าหน้าที่
                                </div>
                            </figcaption>
                        </figure>
                    </a>
<?php
    }
}
?>
                    <!-- <a href="#" class="souvenir-item">
                        <figure>
                            <div class="souvenir-img">
                                <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                            </div>
                            <figcaption>
                                <h4>฿ 340.00</h4>
                                <div class="souvenir-button line-button">
                                    <i class="fab fa-line"></i>
                                    ติดต่อเจ้าหน้าที่
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="#" class="souvenir-item">
                        <figure>
                            <div class="souvenir-img">
                                <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                            </div>
                            <figcaption>
                                <h4>฿ 340.00</h4>
                                <div class="souvenir-button line-button">
                                    <i class="fab fa-line"></i>
                                    ติดต่อเจ้าหน้าที่
                                </div>
                            </figcaption>
                        </figure>
                    </a> -->
                </div>
            </div>
        </div>
    </div>
  </section>
  <section class="container-fluid wow fadeInDown photo-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 alumni-subhead">
                <h3>สั่งซื้อสินค้าผลงานนักเรียนทุน</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme souvenir-carousel">
<?php
if(!empty($schrolar)) {
    foreach($schrolar as $r) {
?>
                    <a href="<?php echo $r->souvenir_shop_contact;?>" class="souvenir-item" target="_blank">
                        <figure>
                            <div class="souvenir-img">
                                <img src="<?php echo base_url('uploads/souvenir_shop/'.$r->souvenir_shop_image);?>" alt="">
                            </div>
                            <figcaption>
                                <h4>฿ <?php echo number_format($r->souvenir_shop_price, 2, '.', ',');?> <span>฿ <?php echo number_format($r->souvenir_shop_before_discount_price, 2, '.', ',');?></span></h4>
                                <div class="souvenir-button line-button">
                                    <i class="fab fa-line"></i>
                                    ติดต่อเจ้าของผลงาน
                                </div>
                            </figcaption>
                        </figure>
                    </a>
<?php
    }
}
?>
                    <!-- <a href="#" class="souvenir-item">
                        <figure>
                            <div class="souvenir-img">
                                <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                            </div>
                            <figcaption>
                                <h4>฿ 340.00</h4>
                                <div class="souvenir-button line-button">
                                    <i class="fab fa-line"></i>
                                    ติดต่อเจ้าของผลงาน
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="#" class="souvenir-item">
                        <figure>
                            <div class="souvenir-img">
                                <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                            </div>
                            <figcaption>
                                <h4>฿ 340.00</h4>
                                <div class="souvenir-button line-button">
                                    <i class="fab fa-line"></i>
                                    ติดต่อเจ้าของผลงาน
                                </div>
                            </figcaption>
                        </figure>
                    </a> -->
                </div>
            </div>
        </div>
    </div>
  </section>
  <?php require('inc_footer.php'); ?>

<script>
$(document).ready(function(){
    $(".souvenir-carousel").owlCarousel({
        loop:false,
        rewind: true,
        margin:30,
        nav: false,
        lazyLoad: true,
        navText: ['<span><i class="fas fa-chevron-left"></i></span>','<span><i class="fas fa-chevron-right"></i></span>'],
        autoplayHoverPause: false,
        dots:true,
        autoplay:false,
        autoplayTimeout:8000,
        smartSpeed: 1000,
        stagePadding: 0,
        slideBy: 1,
        responsive:{
            0:{
                items:1
            },
            500:{
                items:2
            },
            1024:{
                items:3
            },
            1301:{
                items:4
            }
        }
    });
});    
</script>
</body>
</html>