<?php 
/*
* Template Name: Foleja Lanadingpage
*/
get_header(); 
?>
<div class="page-foleja" >
            


<section class="banner-wrapper-foleja-landingpage">
    <div class="container">

        <div class="row">
            <div class="upside-content col-lg-6">
                <div class="content-left">

                        <?php the_field('banner-content'); ?>

                        <div class="info-project">
                            <div class="row">
                            <div class="col col-lg-3 col-md-6">
                                <?php the_field('colone'); ?>
                                
                                </div>
                                <div class="col col-lg-4 col-md-6">
                                <?php the_field('coltwo'); ?>
                                
                                </div>
                                <div class="col col-lg-5 col-md-12 col-sm-12">
                                <?php the_field('colthree'); ?>
                                
                                </div>
                            </div>
                        </div>

                        <div class="banner-btn"> 
                            <div class="migrate-btn">
                                <a href="<?php the_field('button-web-link'); ?>"><?php the_field('button-web-name'); ?></a>
                            </div>
						</div>

                </div>
            </div>
            <div class="rightside col-lg-6">
                <div class="img-portf">
                    <img src="<?php the_field('banner-img-foleja'); ?>" alt="foleja-banner">
                </div>
            </div>
        </div>

    </div>
</section>
        





<section class="second__section-foleja">
    <div class="container">
        <div class="title-content">
            <?php echo ( get_field('apps-section')['upside-content'] );?>
        </div>
        <div class="media-media">
            <div class="row">

                <div class="leftside col-lg-6">
                    <div class="inner">
                        <!-- <?php echo ( get_field('apps-section')['videoleftside'] );?> -->
                        <lottie-player src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/json-animation/loptop-middleware.json" background="transparent"  speed="1"  loop autoplay></lottie-player>
                    </div>
                
                    <div class="content">
                    <?php echo ( get_field('apps-section')['midleware'] );?>
                    </div>
                </div>

                <div class="rightside col-lg-6">
                    <div class="inner">
                    <!-- <?php echo ( get_field('apps-section')['videorightside'] );?> -->
                    <lottie-player src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/json-animation/telefone-animation.json" background="transparent"  speed="1"  loop autoplay></lottie-player>
                    </div>
                    <div class="content">
                    <?php echo ( get_field('apps-section')['apps'] );?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="four-steps-garantie four-steps-garantie-foleja">
    <div class="container">
        <div class="title">
            <h1><?php the_field('title-garantie-foleja'); ?></h1>
            <h2><?php the_field('subtitle-garantie-foleja'); ?></h2>
        </div>
        <div class="boxs">

                <div class="box box-one">
                    <span><?php echo ( get_field('group_fourboxes-foleja')['box1-span'] );?></span>
                    <div class="">
                        <h3><?php echo ( get_field('group_fourboxes-foleja')['title-bx11'] );?></h3>
                        <p><?php echo ( get_field('group_fourboxes-foleja')['sub-bx11'] );?></p>
                    </div>
                </div>
                <div class="box box-one"> 
                    <span><?php echo ( get_field('group_fourboxes-foleja')['box2-span'] );?></span>
                    <div class="">
                        <h3><?php echo ( get_field('group_fourboxes-foleja')['title-bx22'] );?></h3>
                        <p><?php echo ( get_field('group_fourboxes-foleja')['sub-bx22'] );?></p>
                    </div>
                </div> 
                <div class="box box-one">
                    <span><?php echo ( get_field('group_fourboxes-foleja')['box3-span'] );?></span>
                    <div class="">
                        <h3><?php echo ( get_field('group_fourboxes-foleja')['title-bx33'] );?></h3>
                        <p><?php echo ( get_field('group_fourboxes-foleja')['sub-bx33'] );?></p>
                    </div>
                </div>
                <div class="box box-four">
                    <span><?php echo ( get_field('group_fourboxes-foleja')['box4-span'] );?></span>
                    <div class="">
                        <h3><?php echo ( get_field('group_fourboxes-foleja')['title-bx44'] );?></h3>
                        <p><?php echo ( get_field('group_fourboxes-foleja')['sub-bx44'] );?></p>
                    </div>
                </div>

        </div>

    </div>
</section>

<section class="step-garantie-foleja">
    <div class="container">
        <div class="title">
            <?php the_field('content-garantiesection'); ?>
        </div>
        <div class="media-media" data-aos="fade-up" data-aos-duration="500">
        <lottie-player src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/json-animation/home-slider.json" background="transparent"  speed="1"  loop autoplay></lottie-player>
        </div>

    </div>
</section>



<section class="fast-migrate-foleja">
    <div class="container">

        <div class="row">
            <div class="upside-content col-lg-5">
                <div class="content-left">
                
                <h1><?php echo ( get_field('big-project')['title'] );?></h1>
                <h2><?php echo ( get_field('big-project')['subtitle'] );?></h2>

                        <div class="info-project">
                        <?php
                        if( have_rows('big-project') ): 
                        while ( have_rows('big-project') ) : the_row(); 
                        if( have_rows('big-project_repeater') ): 
                        ?>
                            <ul>
                            <?php 
                                while( have_rows('big-project_repeater') ): the_row(); 
                            ?>
                            <li><?php the_sub_field('text'); ?></li>
                            <?php 
                                endwhile;
                            ?>
                            </ul>
                            <?php 
                        endif; 
                        endwhile; 
                        endif;
                        ?>
                        </div>


                </div>
            </div>

            <div class="rightside col-lg-7">
                <div class="img-portf">
                    <img src="<?php echo ( get_field('big-project')['rightside-img'] );?>" alt="foleja-img">
                </div>
            </div>
        </div>

    </div>
</section> 


<section class="connection-between-foleja">
    <div class="container">
        <div class="row">
            <div class="leftside col-lg-4">
            <div class="title">
                <h1><?php the_field('title_conn'); ?></strong></h1>
                <h2><?php the_field('subtitle_conn'); ?></h2>
            </div>
            </div>
            <div class="rightside col-lg-8">
                <div class="animation-container">
                <lottie-player src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/json-animation/solution-connections.json" background="transparent"  speed="1"  loop autoplay></lottie-player>
                </div>
            </div>
        </div>
    </div>
</section>
     



<section class="three-img-explain">
<div class="container">
    <div class="title">
            <h1><?php the_field('title-threeimg'); ?></h1>
            <h2><?php the_field('subtitle-threeimg'); ?></h2>
    </div>
    <div class="image-container">
        <div class="img1 img"><img alt="Image 1" class="scroll-image" id="image1" src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/demo1.webp" alt="foleja-img"></div>
        <div class="img2 img"><img alt="Image 2" class="scroll-image" id="image2" src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/demo1.webp" alt="foleja-img"></div>
        <div class="img3 img"><img alt="Image 3" class="scroll-image" id="image3" src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/demo1.webp" alt="foleja-img"></div>
    </div>
</div>
</section>

<div class="foleja-direct-contact-us">
<div class="banner-wrapper-bb">
        <div class="container">
            <div class="bb">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/bb-profil.webp" alt="solution partner" loading= “lazy”>
                </div>
            <div class="content-shopw">
                
                <div class="header-logo-text offset-lg-5 col-lg-8">
                    <!--<div class="circle"></div>-->
                        <h1><?php the_field('title-bb-contact');?></h1>
                        <h2><?php the_field('subtitle-bb-contact');?></h2>
                        <div class="banner-btn banner-btn-desktop">
                        <div class="whatsapp-btn">
                        <?php if(is_active_sidebar('widget-10') ) { ?>
                                <?php dynamic_sidebar('widget-10');?> 
                        <?php } ?>
                        </div>
                </div>
        </div>
        <div class="banner-btn banner-btn-mobile">
        <div class="whatsapp-btn">
        <?php if(is_active_sidebar('widget-10') ) { ?>
                <?php dynamic_sidebar('widget-10');?> 
        <?php } ?>
        </div>
    </div>
    </div>
    </div>
    </div>
</div>

       
<script>AOS.init();</script>
<script>// its used on FOLEJA landingpage so images float on side when scroll the page.
jQuery(document).ready(function() {
  var observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5
  };
  var observer = new IntersectionObserver(function(entries, observer) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        setTimeout(function() {
          $('.img1').css('transform', 'translateX(50%)');
          $('.img3').css('transform', 'translateX(-50%)');
        }, 600);
      } else {
        $('.img1').css('transform', 'translateX(100%)');
        $('.img3').css('transform', 'translateX(-100%)');
      }
    });
  }, observerOptions);

  observer.observe($('.three-img-explain').get(0));
});
</script>
</div>
<?php get_footer(); ?>