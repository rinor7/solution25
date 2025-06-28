<?php
/**
 * Template Name: Dedicated Team New
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
                                    <a href="tel:<?php echo esc_attr($banner['banner-secondbutton-link']); ?>">
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
        

    <section class="our-talents-rd">
        <div class="container">
            <div class="title"> 
                <h2><?php the_field('title-of-talents'); ?></h2>
            </div>

            <div class="row">
                <div class="leftside col-lg-7">
                    <div class="img">
                        <img src="<?php echo (get_field('talents-group')['bg']); ?>" alt="background">
                    </div>
                </div>
                <div class="rightside col-lg-5">
                    <div class="content">
                       <p><?php echo ( get_field('talents-group')['content'] );?></p> 
                    </div>
                    <div class="one-btn-rd">
                        <a href="<?php echo (get_field('talents-group')['banner-firstbutton-link']); ?>">
                            <?php echo (get_field('talents-group')['banner-firstbutton']); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

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

  
   
   


     <section class="hiring-wrapper-rd">
        <div class="container">  
        
        <div class="row">
            <div class="col-lg-6 leftside">
                <div class="title">
                    <h3><?php echo ( get_field('advantages')['title'] );?></h3>
                </div>
                <div class="buttons">
                    <?php 
                    $banner = get_field('banner'); 
                    ?>
                    
                    <?php if (!empty($banner['banner-firstbutton'])): ?>
                        <div class="one-btn-rd">
                            <a href="<?php echo esc_url($banner['banner-firstbutton-link']); ?>">
                                <?php echo esc_html($banner['banner-firstbutton']); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($banner['banner-secondbutton'])): ?>
                        <div class="two-btn-rd">
                            <a href="tel:<?php echo esc_attr($banner['banner-secondbutton-link']); ?>">
                                <?php echo esc_html($banner['banner-secondbutton']); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6 rightside">
                  <?php
                    if( have_rows('advantages') ): 
                    while ( have_rows('advantages') ) : the_row(); 
                    if( have_rows('advantages_repeater') ): 
                    ?>
                        <?php 
                            while( have_rows('advantages_repeater') ): the_row(); 
                        ?>
                            <div class="box-box">
                                <div class="box-inner-top">
                                   <div class="box-nr"><span class="nr-calc"><?php the_sub_field("box_nr"); ?></span></div> 
                                    <h3><?php the_sub_field('title'); ?></h3>
                                </div>
                                <div class="box-inner-bottom">
                                    <pre><?php the_sub_field('text'); ?></pre>
                                </div>
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
    </section>

        
 <section class="use-cases-wrapper-redesign">
         <div class="container">
            <h3 class="use-cases-stitle"><?php the_field('title-section-use-cases-ent'); ?></h3>
            <h4 class="use-cases-ssubtitle"><?php the_field('subtitle-section-use-cases-ent'); ?></h4>
        <div class="layout-w-one layouts">
            <div class="col box3">
                <div class="content">
                    <h3><?php echo esc_html(get_field('use-cases-rd')['title1']); ?></h3>
                    <h4><?php echo esc_html(get_field('use-cases-rd')['content1']); ?></h4>
                    <p><?php echo esc_html(get_field('use-cases-rd')['content-more1']); ?></p>
                </div>
                <div class="img"><img src="<?php echo esc_url(get_field('use-cases-rd')['image1']); ?>" alt="icon"></div>
            </div>
        </div>
        
       <div class="layout-w-two layouts">
            <div class="col box1">
            <div class="img"><img src="<?php echo esc_url(get_field('use-cases-rd')['image2']); ?>" alt="icon"></div>
            <div class="content">
                <h3><?php echo esc_html(get_field('use-cases-rd')['title2']); ?></h3>
                <h4><?php echo esc_html(get_field('use-cases-rd')['content2']); ?></h4>
                <p><?php echo esc_html(get_field('use-cases-rd')['content-more2']); ?></p>  
            </div>
            </div>
            <div class="col box2">
                <div class="img"><img src="<?php echo esc_url(get_field('use-cases-rd')['image3']); ?>" alt="icon"></div>
                <div class="content">
                <h3><?php echo esc_html(get_field('use-cases-rd')['title3']); ?></h3>
                <h4><?php echo esc_html(get_field('use-cases-rd')['content3']); ?></h4>
                <p><?php echo esc_html(get_field('use-cases-rd')['content-more3']); ?></p>
                </div>
            </div>
        </div>
       </div>
  </section>

<?php get_footer(); ?>