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
                <h3>Profile Update</h3>
            </div>
        </div>
        <div class="row" id="profile_update">
<?php
if(!empty($rows)) {
    foreach($rows as $r) {
?>
            <div class="col-12 col-md-4">
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
            </div>
<?php
    }
}
?>
            <!-- <div class="col-12 col-md-4">
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
            </div>
            <div class="col-12 col-md-4">
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
            </div>
            <div class="col-12 col-md-4">
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
            </div>
            <div class="col-12 col-md-4">
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
            </div>
            <div class="col-12 col-md-4">
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
            </div> -->
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="javascript:getPage('1');"><i class="fas fa-chevron-left"></i></a></li>
<?php 
for($i = 1; $i <= $page; $i++) {
?>
                    <li class="page-item page_page_<?php echo $i;?> <?php if($i == 1) echo 'active';?>"><a class="page-link" href="javascript:getPage('<?php echo $i;?>');"><?php echo $i;?></a></li>
<?php
}
?>
                    <!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li> -->
                    <li class="page-item"><a class="page-link" href="javascript:getPage('<?php echo $i;?>');"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
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

function getPage(page) {
    $(".page-item").removeClass('active');

    $(".page_page_" + page).addClass('active');

    $.post('<?php echo site_url("frontend/path/ajaxProfileUpdate");?>', { page: page }, function(data) {
        $("#profile_update").html(data);
    });
}
</script>
</body>
</html>