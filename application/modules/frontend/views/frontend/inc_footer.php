<footer class="container-fluid footer-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 footer-contact-info">
                <small>© โครงการทุนการศึกษา เครือเจริญโภคภัณฑ์</small>
            </div>
        </div>
    </div>
</footer>

<button class="backtotop"><i class="fas fa-chevron-up"></i></button>


<script src="<?php echo base_url('asset/frontend/js/jquery-3.6.0.min.js');?>"></script>
<script src="<?php echo base_url('asset/frontend/js/jquery-ui.min.js');?>"></script>
<script src="<?php echo base_url('asset/frontend/js/modernizr.js');?>"></script>
<script src="<?php echo base_url('asset/frontend/js/jquery.fancybox.min.js');?>"></script>
<script src="<?php echo base_url('asset/frontend/js/wow.js');?>"></script>
<script src="<?php echo base_url('asset/frontend/js/bootstrap-datepicker.min.js');?>"></script>
<script src="<?php echo base_url('asset/frontend/js/bootstrap-datepicker.th.min.js');?>"></script>
<script src="<?php echo base_url('asset/frontend/js/owl.carousel.min.js');?>"></script>
<script defer src="https://kit.fontawesome.com/3e8060abb4.js" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    var mmH = $('.header-bg').outerHeight(true);
    $('.container-fluid').eq(0).parent('body').not('.first-page').css('padding-top', mmH);

    if (Modernizr.mq('(max-width: 991px)')) {
        $('.header-mainmenu').css('top', mmH);
    }

    var ctnH = $(window).outerHeight(true) - $('.footer-bg').outerHeight(true) - $('.header-bg').outerHeight(true);
    $('.container-height').eq(0).css('min-height', ctnH);

    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        language: "th",
        autoclose: true
    });

    $( '.button-menu' ).click(function (event) {
	  if (  $( ".header-mainmenu" ).is( ":hidden" ) ) {
            $(this).addClass("active");
            $( ".header-mainmenu" ).effect('slide', { direction: 'right', mode: 'show' }, 500);
	  } else {
          $(this).removeClass("active");
          $( ".header-mainmenu" ).effect('slide', { direction: 'right', mode: 'hide' }, 500);
          $( ".button-menu" ).removeClass('active');
          //$('.overlay').fadeOut();
	  }
	  event.stopPropagation();
	});

    $( '.button-menu-scls' ).click(function (event) {
	  if (  $( ".scls-menu > ul" ).is( ":hidden" ) ) {
            $(this).addClass("active");
            $( ".scls-menu>ul" ).fadeIn();
	  } else {
          $(this).removeClass("active");
          $( ".scls-menu > ul" ).fadeOut();
          $( ".button-menu-scls" ).removeClass('active');
          //$('.overlay').fadeOut();
	  }
	  event.stopPropagation();
	});

    $( '.scls-menu>ul>li>a' ).click(function (event) {
	  if (  $(this).next( ".submenu" ).is( ":hidden" ) ) {
        if (Modernizr.mq('(max-width: 991px)')) {
            $('.scls-menu>ul>li').removeClass("active");
            $(this).parent('li').addClass("active");
            $( ".submenu" ).slideUp();
            $(this).next( ".submenu" ).slideDown();
            event.preventDefault();
        }
	  } else {
        if (Modernizr.mq('(max-width: 991px)')) {
          $(this).parent('li').removeClass("active");
          $( ".submenu" ).slideUp();
        }
          //$( ".button-menu-scls" ).removeClass('active');
          //$('.overlay').fadeOut();
	  }
	});

    $( '.mm-hssub > a' ).click(function (event) {
	  if (  $(this).next( ".mm-sub" ).is( ":hidden" ) ) {
        if (Modernizr.mq('(max-width: 991px)')) {
            $('.mm-hssub').addClass("active");
            $(this).next( ".mm-sub" ).slideDown();
        }
	  } else {
        if (Modernizr.mq('(max-width: 991px)')) {
          $(this).parent('li').removeClass("active");
          $( ".mm-sub" ).slideUp();
        }
        event.preventDefault();
          //$( ".button-menu-scls" ).removeClass('active');
          //$('.overlay').fadeOut();
	  }
	});

    $( '.accordion-item > h2' ).click(function (event) {
	  if (  $(this).next( "div" ).is( ":hidden" ) ) {
            var tbox = $(this);
            $( '.accordion-item' ).removeClass('active');
            $(this).parent('.accordion-item').addClass("active");
            $( '.accordion-item > div' ).slideUp();
            $(this).next( "div" ).slideDown({
                complete: function(){
                    $("html, body").animate({ scrollTop: $( tbox ).offset().top - $('.header-bg').height() - 10 }, 1000);
                }
            });
	  } else {
            $( '.accordion-item' ).removeClass('active');
            $( '.accordion-item > div' ).slideUp();
	  }
	  event.stopPropagation();
	});

    $('html').click(function(){
        if (Modernizr.mq('(max-width: 1199px)')) {
            //$( ".mainmenu > ul" ).removeClass('active');
        }
        $('.sel').removeClass('active');
    });

    $('.sel').each(function() {
    $(this).children('select').css('display', 'none');
    
    var $current = $(this);
    
        $(this).find('option').each(function(i) {
            if (i == 0) {
                $current.prepend($('<div>', {
                    class: $current.attr('class').replace(/sel/g, 'sel__box')
                }));
                var placeholder = $(this).text();
                $current.prepend($('<span>', {
                    class: $current.attr('class').replace(/sel/g, 'sel__placeholder'),
                    text: placeholder,
                    'data-placeholder': placeholder
                }));
                
                return;
            }
            if ($(this).is(':selected'))  {
                var placeholder = $(this).text();
                $current.children('.sel__placeholder').text(placeholder);
                $current.children('div').append($('<span>', {
                    class: $current.attr('class').replace(/sel/g, 'sel__box__options selected'),
                    text: $(this).text()
                }));
            } else{
                $current.children('div').append($('<span>', {
                    class: $current.attr('class').replace(/sel/g, 'sel__box__options'),
                    text: $(this).text()
                }));
            }
        });
    });

    // Toggling the `.active` state on the `.sel`.
    $('.sel').click(function(event) {
        if (  $( this ).hasClass( "active" ) ) {
            $('.form-select').removeClass('active');
            $('.sel').removeClass('active');
        } else{
            $('.sel').removeClass('active');
            $('.form-select').removeClass('active');
            $(this).parent('.form-select').addClass('active');
            $(this).addClass('active');
        }
        event.stopPropagation();
    });

    // Toggling the `.selected` state on the options.
    $('.sel__box__options').click(function() {
    var txt = $(this).text();
    var index = $(this).index();
    
    $(this).siblings('.sel__box__options').removeClass('selected');
    $(this).addClass('selected');
    
    var $currentSel = $(this).closest('.sel');
        $currentSel.children('.sel__placeholder').text(txt);
        $currentSel.children('select').prop('selectedIndex', index + 1);
    });


    $(function(){
        jQuery('img.svg').each(function(){
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            jQuery.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Check if the viewport is set, else we gonna set it if we can.
                if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                    $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                }

                // Replace image with new SVG
                $img.replaceWith($svg);

            }, 'xml');

        });
    });

    $('.backtotop').on("click", function (e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "1500");
    });

});
    
$(window).on('load', function () {    

    wow = new WOW(
		  {
			animateClass: 'animated',
			offset: 100
		  }
		);
    wow.init();

});
    
$(window).scroll(function() {
    if ($(this).scrollTop() > 250){  
        $('.backtotop').addClass("active");
    } else if ($(this).scrollTop() > 150){ 
        $('.header-bg').addClass("sticky");
        if (Modernizr.mq('(max-width: 767px)')) {
            $('.header-right-wrapper').slideUp();
        }
    } else{
        $('.header-bg').removeClass("sticky");
        if (Modernizr.mq('(max-width: 767px)')) {
            $('.header-right-wrapper').slideDown();
        }
        $('.backtotop').removeClass("active");
    }
});

</script>