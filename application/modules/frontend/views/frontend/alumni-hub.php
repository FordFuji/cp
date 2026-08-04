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
                <h1>Alumni Hub</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 alumni-subhead">
                <h3>Upcoming event</h3>
                <a class="btn-viewall" href="<?php echo site_url('events');?>"><i class="fas fa-bars"></i>ดูทั้งหมด</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme event-carousel">
<?php
if(!empty($upComingEvent)) {
    foreach($upComingEvent as $r) {
?>
                    <a href="<?php echo site_url('detail/'.$r->alumni_activity_id);?>" class="event-item">
                        <figure>
                            <div class="event-img">
                                <img src="<?php echo base_url('uploads/alumni_activity/'.$r->alumni_activity_image);?>" alt="">
                            </div>
                            <figcaption>
                                <h4><?php echo $r->alumni_activity_name;?></h4>
                                <p><?php echo $r->alumni_activity_description;?></p>
                                <div class="event-button">รายละเอียด</div>
                            </figcaption>
                        </figure>
                    </a>
<?php
    }
}
?>
                    <!-- <a href="<?php echo site_url('detail');?>" class="event-item">
                        <figure>
                            <div class="event-img">
                                <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                            </div>
                            <figcaption>
                                <h4>Quisque arcu enim, commodo id auctor.</h4>
                                <p>Vestibulum rhoncus nulla nec ipsum rutrum, vel venenatis felis mattis. In faucibus magna...</p>
                                <div class="event-button">รายละเอียด</div>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="<?php echo site_url('detail');?>" class="event-item">
                        <figure>
                            <div class="event-img">
                                <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                            </div>
                            <figcaption>
                                <h4>Quisque arcu enim, commodo id auctor.</h4>
                                <p>Vestibulum rhoncus nulla nec ipsum rutrum, vel venenatis felis mattis. In faucibus magna...</p>
                                <div class="event-button">รายละเอียด</div>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="<?php echo site_url('detail');?>" class="event-item">
                        <figure>
                            <div class="event-img">
                                <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                            </div>
                            <figcaption>
                                <h4>Quisque arcu enim, commodo id auctor.</h4>
                                <p>Vestibulum rhoncus nulla nec ipsum rutrum, vel venenatis felis mattis. In faucibus magna...</p>
                                <div class="event-button">รายละเอียด</div>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="<?php echo site_url('detail');?>" class="event-item">
                        <figure>
                            <div class="event-img">
                                <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                            </div>
                            <figcaption>
                                <h4>Quisque arcu enim, commodo id auctor.</h4>
                                <p>Vestibulum rhoncus nulla nec ipsum rutrum, vel venenatis felis mattis. In faucibus magna...</p>
                                <div class="event-button">รายละเอียด</div>
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
                <h3>Photo Gallery</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme gallery-carousel">
<?php
if(!empty($photoGallery)) {
    foreach($photoGallery as $r) {
?>
                    <a href="<?php echo base_url('uploads/photo_gallery/'.$r->photo_gallery_image);?>" data-fancybox="gallery" class="photo-item">
                        <img src="<?php echo base_url('uploads/photo_gallery/'.$r->photo_gallery_image);?>" alt="">
                    </a>
<?php
    }
}
?>
                    <!-- <a href="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" data-fancybox="gallery" class="photo-item">
                        <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                    </a>
                    <a href="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" data-fancybox="gallery" class="photo-item">
                        <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                    </a>
                    <a href="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" data-fancybox="gallery" class="photo-item">
                        <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                    </a>
                    <a href="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" data-fancybox="gallery" class="photo-item">
                        <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                    </a> -->
                </div>
            </div>
        </div>
    </div>
  </section>
  <section class="container-fluid wow fadeInDown">
    <div class="container">
        <div class="row">
            <div class="col-12 alumni-subhead">
                <h3>Profile update</h3>
                <a class="btn-viewall" href="<?php echo site_url('events_profile_update');?>"><i class="fas fa-bars"></i>ดูทั้งหมด</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme event-carousel">
<?php
if(!empty($profileUpdate)) {
    foreach($profileUpdate as $r) {
?>
                    <a href="<?php echo site_url('profile_update_detail/'.$r->profile_update_id);?>" class="event-item">
                        <figure>
                            <div class="event-img">
                                <img src="<?php echo base_url('uploads/profile_update/'.$r->profile_update_image);?>" alt="">
                            </div>
                            <figcaption>
                                <h4><?php echo $r->profile_update_name;?></h4>
                                <p><?php echo $r->profile_update_description;?></p>
                                <div class="event-button">รายละเอียด</div>
                            </figcaption>
                        </figure>
                    </a>
<?php
    }
}
?>
                    <!-- <a href="<?php echo site_url('profile_update_detail');?>" class="event-item">
                        <figure>
                            <div class="event-img">
                                <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                            </div>
                            <figcaption>
                                <h4>Quisque arcu enim, commodo id auctor.</h4>
                                <p>Vestibulum rhoncus nulla nec ipsum rutrum, vel venenatis felis mattis. In faucibus magna...</p>
                                <div class="event-button">รายละเอียด</div>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="<?php echo site_url('profile_update_detail');?>" class="event-item">
                        <figure>
                            <div class="event-img">
                                <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                            </div>
                            <figcaption>
                                <h4>Quisque arcu enim, commodo id auctor.</h4>
                                <p>Vestibulum rhoncus nulla nec ipsum rutrum, vel venenatis felis mattis. In faucibus magna...</p>
                                <div class="event-button">รายละเอียด</div>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="<?php echo site_url('profile_update_detail');?>" class="event-item">
                        <figure>
                            <div class="event-img">
                                <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                            </div>
                            <figcaption>
                                <h4>Quisque arcu enim, commodo id auctor.</h4>
                                <p>Vestibulum rhoncus nulla nec ipsum rutrum, vel venenatis felis mattis. In faucibus magna...</p>
                                <div class="event-button">รายละเอียด</div>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="<?php echo site_url('profile_update_detail');?>" class="event-item">
                        <figure>
                            <div class="event-img">
                                <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                            </div>
                            <figcaption>
                                <h4>Quisque arcu enim, commodo id auctor.</h4>
                                <p>Vestibulum rhoncus nulla nec ipsum rutrum, vel venenatis felis mattis. In faucibus magna...</p>
                                <div class="event-button">รายละเอียด</div>
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

    $(".event-carousel").owlCarousel({
        loop:false,
        rewind: true,
        margin:50,
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
            1201:{
                items:3
            }
        }
    });

    $(".gallery-carousel").owlCarousel({
        loop:false,
        rewind: true,
        margin:10,
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
            1201:{
                items:4
            }
        }
    });

});    
</script>
</body>
</html>