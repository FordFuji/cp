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
            <div class="col-12 col-md-6">
                <div class="alumni-head">
                    <h1>ติดต่อหน่วยงานทุน</h1>
                </div>
                <div class="contact-info">
                    <h3>โครงการทุนการศึกษาเครือเจริญโภคภัณฑ์</h3>
                    <address>
                        <i class="fas fa-map-marker-alt"></i>เลขที่ 18 อาคารทรูทาวเวอร์ ชั้น 27 ถนนรัชดาภิเษก เขตห้วยขวาง กรุงเทพฯ 10310
                    </address>
                </div>
                <div class="contact-info">
                    <h3>Charoen Pokphand Group Scholars Program</h3>
                    <address>
                        <i class="fas fa-map-marker-alt"></i>18 True Tower Building 27th Floor Ratchadapisek Road Huaykwang, Bangkok 10310
                    </address>
                </div>
                <div class="contact-info">
                    <h3>ข้อมูลการติดต่อ</h3>
                    <!-- <div>
                        <a href="#">
                            <i class="fas fa-phone-alt"></i>02-222-2222
                        </a>
                    </div> -->
                    <div>
                        <a href="#">
                            <i class="fas fa-envelope"></i>cpsp.admin@cp-scholarship.in.th
                        </a>
                    </div>
                </div>
                <!-- <div class="contact-info">
                    <h3>ช่องทางการติดตาม</h3>
                    <div class="contact-social">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                        <a href="#"><i class="fab fa-line"></i></a>
                    </div>
                </div> -->
            </div>
            <div class="col-12 col-md-6 contact-form-wrap">
                <div class="alumni-head">
                    <h1>ส่งข้อความถึงเรา</h1>
                </div>
                <div class="contact-info">
                    <form action="<?php echo site_url('contact_us');?>" method="post">
                    <div class="contact-form-input">
                        <label>ชื่อ</label>
                        <input type="text" name="contact_us_name" required>
                    </div>
                    <div class="contact-form-input">
                        <label>อีเมล</label>
                        <input type="email" name="contact_us_email" required>
                    </div>
                    <div class="contact-form-input">
                        <label>เบอร์โทร</label>
                        <input type="text" name="contact_us_telephone" required>
                    </div>
                    <div class="contact-form-input">
                        <label>หัวข้อ</label>
                        <input type="text" name="contact_us_topic" required>
                    </div>
                    <div class="contact-form-input">
                        <label>ข้อความ</label>
                        <textarea rows="4" name="contact_us_message" required></textarea>
                    </div>
                    <div class="contact-form-btn-wrap">
                        <button type="submit" name="submit" value="submit" class="contact-form-btn"><i class="fas fa-envelope-open-text"></i>ส่งข้อความ</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 contact-iframe">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62004.31975658015!2d100.53305484061345!3d13.762585496361513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e298d2454e80bd%3A0xd86a798f101e2e3f!2sCP%20International%20Bangkok!5e0!3m2!1sth!2sth!4v1661142850788!5m2!1sth!2sth" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.271497217424!2d100.56807429999999!3d13.762494199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29f2e0b6f9cd1%3A0x5ce164ea02e613c1!2sTrue%20Tower%201!5e0!3m2!1sen!2sth!4v1689747376737!5m2!1sen!2sth" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
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