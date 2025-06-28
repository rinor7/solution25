<?php
/**
 * Template Name: Dedicated Team New*(1)
 */
get_header();
?>



<div class="banner-wrapper banner-wrapper-custom banner-wrapper-custom-shop" id="top-banner">
            <div class="container">
                <div class="row">
                    <div class="opside-content col-md-12 col-xl-12 content-left">
                        <h2><?php the_content(); ?></h2>
                        <div class="banner-btn banner-btn-rd"> 
                            <?php 
                            $banner = get_field('banner'); 
                            ?>
                            
                            <?php if (!empty($banner['banner-firstbutton'])): ?>
                                <div class="migrate-btn-rd">
                                    <a href="<?php echo esc_url($banner['banner-firstbutton-link']); ?>">
                                        <?php echo esc_html($banner['banner-firstbutton']); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <?php if (!empty($banner['banner-secondbutton'])): ?>
                                <div class="contact-btn-rd">
                                    <a href="tel:<?php echo esc_url($banner['banner-secondbutton-link']); ?>">
                                        <?php echo esc_html($banner['banner-secondbutton']); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-wrapper-partners custom-wrapper-partners-rd">
                    <div class="slider-partners slider-partners-shopware">
                        <div class="swiper mySwiper mySwiperone-rd">
                            <?php
                            if( have_rows('partners', 12731) ): 
                            while ( have_rows('partners', 12731) ) : the_row(); 
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
        

   

        <div class="marketing-service-wrapper dedicated-page-services">
            <div class="container">
                <?php
                if( have_rows('dedicated_wrapper') ):
                    while ( have_rows('dedicated_wrapper') ) : the_row();
                        $i = 1;
                        if( have_rows('dedicated_box') ):
                            ?>
                            <h2><?php echo ( get_field('dedicated_wrapper')['title'] );?></h2>
                                <p><?php echo ( get_field('dedicated_wrapper')['description'] );?></p>
                            <div class="row">
                                <?php
                                while( have_rows('dedicated_box') ): the_row();
                                    ?>
                                    <div class="col-lg-4">
                                        <div class="marketing-service-box">
                                            <img src="<?php the_sub_field('icon'); ?>" alt="icon service" />
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
                include("includes/technologies-en.php");
            elseif($currentlang=="de-DE") :
                include("includes/technologies-de.php");
            endif;
            ?>

   

   


    <div class="hiring-wrapper hiring-wrapper-new">
        <div class="container">  
            <h3><?php echo ( get_field('advantages')['title'] );?></h3>
        </div>

            <div class="container">  

                <!-- <div class="row"> -->
                    <?php
                    if( have_rows('advantages') ): 
                    while ( have_rows('advantages') ) : the_row(); 
                    if( have_rows('advantages_repeater') ): 
                    ?>
                    <div class="row hiring-box">
                        <?php 
                        while( have_rows('advantages_repeater') ): the_row(); 
                        ?>
                        <div class="col-lg-12">
                            <div class="box-box">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <pre><?php the_sub_field('text'); ?></pre>
                                <span class="nr-calc"><?php the_sub_field("box_nr"); ?></span>
                                <?php  
                                if( have_rows('content') ): 
                                    while ( have_rows('content') ) : the_row(); 
                                        if( have_rows('free_call_wrapper') ): 
                                            while ( have_rows('free_call_wrapper') ) : the_row();
                                ?>
                                <div class="new-call-now">
                                    
                                <div class="call-us-btn">
                                <?php if(is_active_sidebar('widget-9') ) { ?>
                                    <?php dynamic_sidebar('widget-9');?>
                                <?php } ?>
                                </div>
                                <span><?php the_sub_field("text"); ?></span>
                                </div>

                                <?php 
                                endwhile; endif; endwhile; endif;
                                ?>
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
                <!-- </div> -->
            </div>
        </div>  

        


<?php get_footer(); ?>