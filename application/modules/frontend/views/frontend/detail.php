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
            <div class="col-12 alumni-subhead">
                <h3><?php if(!empty($upComingEvent)) echo $upComingEvent->alumni_activity_name;?></h3>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-12 detail-img">
                <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
            </div>
            <div class="detail-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu lacus sit amet enim faucibus fermentum. Integer eget dapibus ex. Vestibulum interdum elit purus, non consequat lectus tincidunt iaculis. Morbi odio felis, scelerisque nec condimentum in, suscipit commodo massa. Sed mattis nisl in erat hendrerit rhoncus ut sed felis. Integer sit amet ultricies ex.</p>
                <p>Duis luctus augue sit amet ante feugiat sagittis. Nulla orci velit, dictum vitae diam eget, tincidunt semper lectus. Pellentesque sodales congue libero, id luctus enim malesuada ut. Ut felis quam, consequat sed pellentesque eu, faucibus vel nunc.</p>
            </div> -->
            <?php if(!empty($upComingEvent)) echo $upComingEvent->alumni_activity_detail;?>
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