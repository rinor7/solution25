<?php
/*
* Template Name: Online Marketing
*/
get_header();
?>


<div class="ecommerce-banner" >
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="ecommerce-banner-content">
                    <h2><span><?php echo ( get_field('banner')['banner_text_bold'] );?></span><?php echo ( get_field('banner')['banner_title'] );?></h2>
                    <p><?php echo ( get_field('banner')['banner_description'] );?></p>
                    <div class="ecommerce-banner-info">
                        <?php
                        if( have_rows('banner') ):
                            while ( have_rows('banner') ) : the_row();
                                $i = 1;
                                if( have_rows('banner_info') ):
                                    ?>
                                    <ul>
                                        <?php
                                        while( have_rows('banner_info') ): the_row();
                                            ?>
                                            <li><span><?php the_sub_field('text_info'); ?></span></li>
                                            <?php
                                            $i++;
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
            
            <div class="col-lg-6">
                <div class="banner-home-contact">
                <?php dynamic_sidebar('widget-4'); ?>
                </div>
            </div>

        </div>
        <div class="slider-partners online-mark-page">
            <div class="swiper mySwiper mySwiperone">
                <?php
                if( have_rows('partners' , 1660) ): 
                while ( have_rows('partners' , 1660) ) : the_row(); 
                if( have_rows('partners_repeater' , 1660) ): 
                ?>
                <div class="swiper-wrapper">
                    <?php 
                        while( have_rows('partners_repeater' , 1660) ): the_row(); 
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


        
<div class="marketing-service-wrapper">
    <div class="container">
        <?php
        if( have_rows('marketing_wrapper') ):
            while ( have_rows('marketing_wrapper') ) : the_row();
                $i = 1;
                if( have_rows('marketing_box') ):
                    ?>
                    <div class="row">
                        <h2><?php echo ( get_field('marketing_wrapper')['title'] );?></h2>
                        <p><?php echo ( get_field('marketing_wrapper')['description'] );?></p>
                        <?php
                        while( have_rows('marketing_box') ): the_row();
                            ?>
                            <div class="col-lg-4">
                                <div class="marketing-service-box">
                                    <img src="<?php the_sub_field('icon'); ?>" />
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <p><?php the_sub_field('description'); ?></p>
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

<div class="freeconsulation-wrapper">
    <?php
    $currentlang = get_bloginfo('language');
    if($currentlang=="en-GB") :
        include("includes/appointment-en.php");
    elseif($currentlang=="de-DE") :
        include("includes/appointment-de.php");
    endif;
    ?>
</div>

<div class="client-wrapper client-wrapper-onlinem">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h2><?php echo ( get_field('client_wrapper')['title'] );?></h2>
                <p><?php echo ( get_field('client_wrapper')['text'] );?></p>
                <?php
                if( have_rows('client_wrapper') ):
                    while ( have_rows('client_wrapper') ) : the_row();
                        $i = 1;
                        if( have_rows('info_box') ):
                            ?>
                            <ul>
                                <?php
                                while( have_rows('info_box') ): the_row();
                                    ?>
                                    <li><span><?php the_sub_field('text'); ?></span></li>
                                    <?php
                                    $i++;
                                endwhile;
                                ?>
                            </ul>
                        <?php
                        endif;
                    endwhile;
                endif;
                ?>

                <?php
                if( have_rows('client_wrapper') ):
                    while ( have_rows('client_wrapper') ) : the_row();
                        $i = 1;
                        if( have_rows('experience') ):
                            ?>
                            <div class="client-info-wrapper">
                                <?php
                                while( have_rows('experience') ): the_row();
                                    ?>
                                    <div class="client-info-box">
                                        <!--<h2><?php the_sub_field('title'); ?><span><?php the_sub_field('punctuation'); ?></span></h2>-->
                                         <div class="title"><h2 class="counter"><?php the_sub_field('title'); ?></h2><span><?php the_sub_field('punctuation'); ?></span></div>
                                        <p><?php the_sub_field('description'); ?></p>
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
           <div class="offset-lg-2  col-lg-5">
                <div class="image-text-box">
                    <img src="<?php echo ( get_field('client_wrapper')['image_text'] );?>">
                    <div class="image-box-content">
                        <p><?php echo ( get_field('client_wrapper_box_content')['title'] );?></p>
    <div class="title"><h2><?php echo ( get_field('client_wrapper_box_content')['info_description-title'] );?></h2><h2 class="counter"><?php echo ( get_field('client_wrapper_box_content')['info_description'] );?></h2><span><?php echo ( get_field('client_wrapper_box_content')['punctuation']);?></span></div>
                        <!-- <h2><?php echo ( get_field('client_wrapper_box_content')['info_description'] );?><span><?php echo ( get_field('client_wrapper_box_content')['punctuation'] );?></span></h2> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ecommerce-testimonials-wrapper">
    <div class="container">

        <h2><?php echo ( get_field('testimonials')['title'] );?></h2>
        <p><?php echo ( get_field('testimonials')['description'] );?></p>

        <div class="ecommerce-testimonials">
            <div class="swiper mySwiper mySwiperfour">
                
            <?php
            if( have_rows('testimonials') ):
                while ( have_rows('testimonials') ) : the_row();
                    $i = 1;
                    if( have_rows('testimonial_box') ):
                        ?> 
                        <div class="swiper-wrapper">
                            <?php
                            while( have_rows('testimonial_box') ): the_row();
                                ?>
                                <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <p><?php the_sub_field('slider_content'); ?></p>

                                    <div class="client-name-position">
                                        <img src="<?php the_sub_field('review_image'); ?>">
                                        <p><?php the_sub_field('client_name'); ?></p>
                                        <!-- <span><?php the_sub_field('client_info'); ?></span> -->
                                    </div>
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
            <div class="testimonials-arrow">
            <div class="swiper-button-prevv"><i class="feather-chevron-left"></i></div>
            <div class="swiper-button-nextt"><i class="feather-chevron-right"></i></div>
            </div>
            
            </div>
            </div>

    </div>
</div>


<div class="work-with-us-wrapper">
    <div class="container">
        <h2><?php echo ( get_field('why_us')['title'] );?></h2>
        <p><?php echo ( get_field('why_us')['description'] );?></p>
        <?php
        if( have_rows('why_us') ):
            while ( have_rows('why_us') ) : the_row();
                $i = 1;
                if( have_rows('why_us_box') ):
                    ?>
                    <div class="row">
                        <?php
                        while( have_rows('why_us_box') ): the_row();
                            ?>
                            <div class="col-lg-3">
                                <div class="work-with-us-box">
                                    <img src="<?php the_sub_field('image'); ?>">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <p><?php the_sub_field('description'); ?></p>
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

        <?php
        $currentlang = get_bloginfo('language');
        if($currentlang=="en-GB") :
            include("includes/contactform-en.php");
        elseif($currentlang=="de-DE") :
            include("includes/contactform-de.php");
        endif;
        ?>

<?php get_footer(); ?>
