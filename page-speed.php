<?php 
/*
* Template Name: Page Speed
*/
get_header(); 
?>
<div class="page-page-speed">
            
            <section class="banner-wrapper-page-speed">
                <div class="container">
            
                    <div class="row">
                        <div class="upside-content col-lg-6">
                            <div class="content-left">
            
                                    <?php the_field('banner-content'); ?>
            
                                    <div class="banner-btn">
                                        <div class="directto-btn">
                                            <!-- <?php if(is_active_sidebar('widget-11') ) { ?>
                                                    <?php dynamic_sidebar('widget-11');?> 
                                            <?php } ?>      -->
                                            <a href="<?php the_field('button-web-linkk'); ?>"><?php the_field('button-web-namee'); ?></a>   
                                        </div>
            
                                        <div class="whatsapp-btn">
                                            <?php if(is_active_sidebar('widget-10') ) { ?>
                                                    <?php dynamic_sidebar('widget-10');?> 
                                            <?php } ?>
                                        </div>
                                        
                                    </div>
            
                            </div>
                        </div>
                        <div class="rightside col-lg-6">
                                <img src="<?php the_field('banner-img-folejaa'); ?>" alt="speed-banner">
                        </div>
                    </div>
            
                </div>
            </section>


            <section class="three-steps-speed">
                <div class="container">
                        <?php
                        if( have_rows('sec-section-gr') ): 
                        while ( have_rows('sec-section-gr') ) : the_row(); 
                        if( have_rows('sec-section-gr-rep') ): 
                        ?>
                        <div class="row">
                        <?php 
                            while( have_rows('sec-section-gr-rep') ): the_row(); 
                        ?>
                        <div class="col-lg-4">

                        <div class="inner">
                            <!--<div class="uptitle">-->
                            <!--<p><?php the_sub_field('uptitle'); ?></p>-->
                            <!--</div>-->
                            <div class="title">
                            <h3><?php the_sub_field('title'); ?></h3>
                            </div>
                            <div class="subtitle">
                            <h4><?php the_sub_field('subtitle'); ?></h4>
                            </div>
                        </div>


                        </div>
                        <?php 
                        endwhile;
                        ?>
                        </div>
                        <?php 
                        endif; 
                        endwhile; 
                        endif;
                        ?>
                    
                </div>
            </section>


                    
            <section class="user-exxperience">
                <div class="container">
                    <div class="row">
                        <div class="upside-content col-lg-6">
                            <div class="content-left">
                            
                            <h2><?php echo ( get_field('project_second')['title'] );?></h2>
                            <h3><?php echo ( get_field('project_second')['subtitle'] );?></h3>
            
                                    <div class="info-project">
                                    <?php
                                    if( have_rows('project_second') ): 
                                    while ( have_rows('project_second') ) : the_row(); 
                                    if( have_rows('project_repeater') ): 
                                    ?>
                                        <ul>
                                        <?php 
                                            while( have_rows('project_repeater') ): the_row(); 
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
                            <div class="banner-btn">
                                <div class="directto-btn">
                                    <!-- <?php if(is_active_sidebar('widget-11') ) { ?>
                                            <?php dynamic_sidebar('widget-11');?> 
                                    <?php } ?>      -->
                                    <a href="<?php the_field('button-web-linkk'); ?>"><?php the_field('button-web-namee'); ?></a>   
                                </div>
    
                                <div class="whatsapp-btn">
                                    <?php if(is_active_sidebar('widget-10') ) { ?>
                                            <?php dynamic_sidebar('widget-10');?> 
                                    <?php } ?>
                                </div>
                                
                            </div>
                        </div>
            
                        <div class="rightside col-lg-6">
                            <div class="img-portf">
                                <img src="<?php echo ( get_field('project_second')['rightside-img'] );?>" alt="speed-img">
                            </div>
                        </div>
                    </div>
            
                </div>
            </section> 
            
            <section class="four-steps-garantie four-steps-garantie-foleja">
                <div class="container">
                    <div class="title">
                        <h2><?php the_field('title-garantie-foleja'); ?></h2>
                        <h3><?php the_field('subtitle-garantie-foleja'); ?></h3>
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
            
            <section class="step-garantie-speed">
                <div class="container">
                    <div class="title">
                        <?php the_field('content-garantiesection'); ?>
                    </div>
                    <div class="media-media" data-aos="fade-up" data-aos-duration="500">
                    <lottie-player src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/json-animation/home-slider.json" background="transparent"  speed="1"  loop autoplay></lottie-player>
                    </div>
            
                </div>
            </section>
            
            
            
            
            <section class="user-exxperience user-exxperience-second">
                <div class="container">
            
                    <div class="row">
                        <div class="upside-content col-lg-5">
                            <div class="content-left">
                            
                                <h2><?php echo ( get_field('big-project_second')['title'] );?></h2>
                                <h3><?php echo ( get_field('big-project_second')['subtitle'] );?></h3>
            
                                    <div class="info-project">
                                    <?php
                                    if( have_rows('big-project_second') ): 
                                    while ( have_rows('big-project_second') ) : the_row(); 
                                    if( have_rows('big-project_second_repeater') ): 
                                    ?>
                                        <ul>
                                        <?php 
                                            while( have_rows('big-project_second_repeater') ): the_row(); 
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
                                <img src="<?php echo ( get_field('big-project_second')['rightside-img'] );?>" alt="speed-img">
                            </div>
                        </div>
                    </div>
            
                </div>
            </section> 
            
            
            <?php include("includes/pagespeed-portfolio.php"); ?>
            
            
            <div class="testimonial-wrapper testimonial-wrapper-pagespeed">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <h2 class="title-testimonials"><?php echo ( get_field('testimonialss')['title'] );?></h2>
                                    <h3 class="subtitle-testimonials"><?php echo ( get_field('testimonialss')['subtitle'] );?></h3>
                                </div>
                                <div class="col-lg-7">
                                <div class="swiper mySwiper mySwiperfour">
                                    <?php
                                    if( have_rows('testimonialss') ): 
                                    while ( have_rows('testimonialss') ) : the_row(); 
                                    ?>
                                    <div class="swiper-wrapper">
                                        <?php
                                        if( have_rows('testimonials_repeater') ): 
                                        ?>
                                        <?php 
                                        while( have_rows('testimonials_repeater') ): the_row(); 
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="slide-box">
                                            <h3>
                                                <span>"</span>
                                                <?php the_sub_field('text'); ?>
                                                <span>"</span>
                                            </h3>
                                            <div class="author">
                                                <div class="leftside">
                                                <pre class="author-name"><?php the_sub_field('author_name'); ?></pre>
                                                <pre class="author-company"><?php the_sub_field('author_company'); ?></pre>    
                                                </div>
                                                <div class="rightside">
                                                <?php the_sub_field('title'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <?php 
                                        endwhile;
                                        ?>
                                        <?php 
                                        endif;
                                        ?>
                                        </div>
                                        <?php 
                                        endwhile; 
                                        endif;
                                        ?>
                                        <div class="testimonials-arrow">
                                        <div class="swiper-button-prevv"><i class="feather-chevron-left"></i></div>
                                        <div class="swiper-button-nextt"><i class="feather-chevron-right"></i></div>
                                        </div>
                                        </div>
                            </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="banner-wrapper-bb-custom">
                    <div class="banner-wrapper-bb">
                        <div class="container">
                            <div class="bb">
                                <img src="<?php the_field('img-bb', 11171);?>" alt="bronze partner" loading= “lazy”>
                                </div>
                            <div class="content-shopw">
                                
                                <div class="header-logo-text offset-lg-5 col-lg-8">
                                    <!--<div class="circle"></div>-->
                                        <h1><?php the_field('title-bb-onlypagespeed'); ?></h1>
                                        <h2><?php the_field('sub-bb-onlypagespeed'); ?></h2>
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
</div>
<?php get_footer(); ?>