<?php 
/*
* Template Name: Home Page
*/
get_header(); 
?>
        
        <div class="banner-wrapper" id="top-banner" style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xl-6 content-left">
                        <h1><?php echo ( get_field('banner')['title'] );?></h1>
                        <h2><?php echo ( get_field('banner')['subtitle'] );?></h2>
						<div class="banner-btn"> 
                            <div class="migrate-btn">
                            <?php
                            $currentlang = get_bloginfo('language');
                            if ($currentlang == "en-GB") :
                                ?>
                                <a href="#anchor-cf">Request now for free!</a>
                                <?php
                            elseif ($currentlang == "de-DE") :
                                ?>
                                <a href="#anchor-cf">Jetzt unverbindlich anfragen!</a>
                                <?php
                            endif; 
                            ?>
                            </div>
                            <div class="whatsapp-btn">
                            <?php if(is_active_sidebar('widget-10') ) { ?>
                                    <ul>
                                    <?php dynamic_sidebar('widget-10');?> 
                                    </ul>
                            <?php } ?>
                            </div>
						</div>
                    </div>
                    <div class="content-right col-lg-6">
                        <div class="flex flex-custom">
                            <div class="imgone img-patner"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/partner3.svg" alt="bronze-partner"></div>
                            <div class="imgtwo img-patner"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/partner2.svg" alt="shopify-partner"></div>
                            <div class="imgthree img-patner"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/partner1.svg" alt="xentral-partner"></div>
                        </div>
                        <div id="banner-video" class="video-container" style="display: none;">
                            <video autoplay loop muted playsinline>
                            <source src="<?php echo ( get_field('banner')['banner_video'] );?>" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        



        <div class="container" style="display: none;">
            <div class="slider-partners">
                    <div class="swiper mySwiper mySwiperone">
                        <?php
                        if( have_rows('partners') ): 
                        while ( have_rows('partners') ) : the_row(); 
                        if( have_rows('partners_repeater') ): 
                        ?>
                        <div class="swiper-wrapper">
                            <?php 
                                while( have_rows('partners_repeater') ): the_row(); 
                            ?>
                                <div class="swiper-slide">
                                    <?php 
                                        $url = get_sub_field('image');
                                        $imageID = attachment_url_to_postid($url);
                                    ?>
                                    <img src="<?php the_sub_field('image'); ?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
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
                    </div>
                </div>
       
                <div class="banner-wrapper banner-wrapper-custom" id="top-banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-xl-12 content-left">
                                <h1><?php echo ( get_field('banner')['title'] );?></h1>
                                <h2><?php echo ( get_field('banner')['subtitle'] );?></h2>
        						<div class="banner-btn"> 
                                    <div class="migrate-btn">
                                    <?php
                                    $currentlang = get_bloginfo('language');
                                    if ($currentlang == "en-GB") :
                                        ?>
                                        <a href="#anchor-cf">Request now for free!</a>
                                        <?php
                                    elseif ($currentlang == "de-DE") :
                                        ?>
                                        <a href="#anchor-cf">Jetzt unverbindlich anfragen!</a>
                                        <?php
                                    endif; 
                                    ?>
                                    </div>
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


                <!-- <div class="banner-wrapper banner-wrapper-custom" id="top-banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-xl-6 content-left">
                                <h1><?php echo ( get_field('banner')['title'] );?></h1>
                                <h2><?php echo ( get_field('banner')['subtitle'] );?></h2>
        						<div class="banner-btn"> 
                                    <div class="migrate-btn">
                                    <?php
                                    $currentlang = get_bloginfo('language');
                                    if ($currentlang == "en-GB") :
                                        ?>
                                        <a href="#anchor-cf">Request now for free!</a>
                                        <?php
                                    elseif ($currentlang == "de-DE") :
                                        ?>
                                        <a href="#anchor-cf">Jetzt unverbindlich anfragen!</a>
                                        <?php
                                    endif; 
                                    ?>
                                    </div>
                                    <div class="whatsapp-btn">
                                    <?php if(is_active_sidebar('widget-10') ) { ?>
                                            <?php dynamic_sidebar('widget-10');?> 
                                    <?php } ?>
                                    </div>
        						</div>
                            </div>
                            <div class="content-right col-lg-6">
                            <?php
                                $currentlang = get_bloginfo('language');
                                if ($currentlang == "en-GB") :
                                    ?>
                                    <video autoplay loop muted playsinline >
                                        <source src="<?php echo ( get_field('banner', 5)['banner_video'] );?>" type="video/mp4">
                                    </video>
                                    <?php
                                elseif ($currentlang == "de-DE") :
                                    ?>
                                    <video autoplay loop muted playsinline >
                                        <source src="<?php echo ( get_field('banner', 1660)['banner_video'] );?>" type="video/mp4">
                                    </video>
                                    <?php
                                endif; 
                                ?>
                            </div>
                        </div>
                    </div>
                </div> -->






                <div class="custom-wrapper-partners custom-wrapper-partners-home">
                    <div class="container">
                        <div class="wrapp-partners">
                        <div class="bronz-shopware">
                            <div class="imgone img-patner"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/shopwarebronzcustom.svg" alt="bronze-partner"></div>
                        </div>
                        <div class="certificates">
                            <div class="imgone img-patner"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/developer-cert.svg" alt="certified"></div>
                            <div class="imgone img-patner"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/advanced-developer.svg" alt="certified"></div>
                            <div class="imgone img-patner"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/template-certif.svg" alt="certified"></div>
                            <div class="imgone img-patner"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/designer-cert.svg" alt="certified"></div>
                        </div>   
                        </div>                
                    </div>
                    <div class="container">
                <div class="slider-partners">
                    <div class="swiper mySwiper mySwiperone">
                        <?php
                        if( have_rows('partners') ): 
                        while ( have_rows('partners') ) : the_row(); 
                        if( have_rows('partners_repeater') ): 
                        ?>
                        <div class="swiper-wrapper">
                            <?php 
                                while( have_rows('partners_repeater') ): the_row(); 
                            ?>
                                <div class="swiper-slide">
                                    <?php 
                                        $url = get_sub_field('image');
                                        $imageID = attachment_url_to_postid($url);
                                    ?>
                                    <img src="<?php the_sub_field('image'); ?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
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
                    </div>
                </div>
                </div>
        
        <div class="services-wrapper">
            <div class="container">
                <div class="row row-custom">
                    <div class="col-lg-4">
                        <h2><?php echo ( get_field('services')['title'] );?></h2>
                        <h3><?php echo ( get_field('services')['subtitle'] );?></h3>
                    </div>
                    <div class="col-lg-8">
                            <?php
                            if( have_rows('services') ): 
                            while ( have_rows('services') ) : the_row(); 
                            $i = 1;
                            if( have_rows('services_repeater') ): 
                            ?>
                            <div class="row">
                            <?php 
                                while( have_rows('services_repeater') ): the_row(); 
                            ?>
                                
                                <div class="col-md-6 col-xl-6 unique">
                                    <div class="services-item">
                                        <img src="<?php the_sub_field('image-small'); ?>" alt="">
                                        <h3><?php the_sub_field('title'); ?></h3>
                                        <pre><?php the_sub_field('text'); ?></pre>
                                        <a href="<?php the_sub_field('linktopage');?>">
                                        <div class="btn-link"><?php the_sub_field('buttonname');?><i class="feather-chevron-right"></i></div>
                                        </a>
                                    </div>
                                </div>
                               
                            <?php 
                            $i++;
                                endwhile;
                            ?>
                        </div>
                        <?php 
                        endif; 
                        endwhile; 
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>

        

            <?php
            $currentlang = get_bloginfo('language');
            if($currentlang=="en-GB") :
                
            elseif($currentlang=="de-DE") :
                include("includes/shopware6migrate.php");
            endif;
            ?>    



            <?php
            $currentlang = get_bloginfo('language');
            if($currentlang=="en-GB") :
                include("includes/technologies-en.php");
            elseif($currentlang=="de-DE") :
                include("includes/technologies-de.php");
            endif;
            ?>                   


            <?php
            $currentlang = get_bloginfo('language');
            if($currentlang=="en-GB") :
                include("includes/appointment-de-custom.php");
            elseif($currentlang=="de-DE") :
                include("includes/appointment-de-custom.php");
            endif;
            ?>

            <?php include("includes/portfolioall.php"); ?>
    

        <div class="team-wrapper">
            <div class="container">
                <pre><?php echo ( get_field('team')['slogan'] );?></pre>
            </div>
        </div>

        <div class="our-portfolio-satisfied">
        <div class="container">
            <h1 class="portfolio-title"><?php pll_e( 'Satisfied Client Title' );?></h1>
            <div class="intro">
                <div class="row">
                <?php
                        if( have_rows('satisf_partners') ): 
                        while ( have_rows('satisf_partners') ) : the_row(); 
                        if( have_rows('satisf_partners_repeater') ): 
                        ?>
                            <?php 
                                while( have_rows('satisf_partners_repeater') ): the_row(); 
                            ?>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <?php 
                                        $url = get_sub_field('image');
                                        $imageID = attachment_url_to_postid($url);
                                    ?>
                                    <img src="<?php the_sub_field('image'); ?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
                                </div>
                            <?php 
                                endwhile;
                            ?>
                        <?php 
                        endif; 
                        endwhile; 
                        endif;
                        ?>
                </div>
                </div>
            </div>
        </div>
    </div>


    

    <div class="testimonial-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="title-testimonials"><?php echo ( get_field('testimonials')['title'] );?></h2>
                        <h3 class="subtitle-testimonials"><?php echo ( get_field('testimonials')['subtitle'] );?></h3>
                    </div>
                    <div class="col-lg-7">
                    <div class="swiper mySwiper mySwiperfour">
                        <?php
                        if( have_rows('testimonials') ): 
                        while ( have_rows('testimonials') ) : the_row(); 
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
        
        <?php include("includes/latest-post.php"); ?>

        <div class="cf-banner cf-banner-footer">
            <div class="container">
                <div class="row">
                <div class="leftside col-lg-6">
                <h1><?php echo ( get_field('contact-banner')['title'] );?></h1>
                <h2><?php echo ( get_field('contact-banner')['subtitle'] );?></h2>
                <div class="listednr">  
                    <div class="first-row">
                        <div class="first-row-title flex row-custom">
                            <h4>1</h4>
                            <div class="row-under-title">
                                <h3><?php echo ( get_field('contact-banner')['first_title'] );?></h3>
                                <p><?php echo ( get_field('contact-banner')['first_subtitle'] );?></p>
                            </div>
                        </div>
                    </div>
                    <div class="first-row">
                        <div class="second-row-title flex row-custom">
                            <h4>2</h4>
                            <div class="row-under-title">
                                <h3><?php echo ( get_field('contact-banner')['second_title'] );?></h3>
                                <p><?php echo ( get_field('contact-banner')['second_subtitle'] );?></p>
                            </div>
                        </div>
                    </div>
                    <div class="first-row">
                        <div class="third-row-title flex row-custom">
                            <h4>3</h4>
                            <div class="row-under-title">
                                <h3><?php echo ( get_field('contact-banner')['third_title'] );?></h3>
                                <p><?php echo ( get_field('contact-banner')['third_subtitle'] );?></p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="rightside col-lg-6" id="anchor-cf">
                    <ul>
                        <?php dynamic_sidebar('widget-4'); ?>
                    </ul>
                </div>
                </div>
            </div>

        </div>

<?php get_footer(); ?>