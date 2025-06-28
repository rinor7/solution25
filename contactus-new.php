<?php
/*
* Template Name: Contact Us
*/
get_header();
?>


<div class="ecommerce-banner banner-contact-us" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ecommerce-banner-content">
                    <h2><?php echo ( get_field('baner-contacus')['contact_text_bold'] );?></h2>
                    <p><?php echo ( get_field('baner-contacus')['contact_text_description'] );?></p>
                </div>
               <div class="contact-banner-info">
                    <div class="row">
                        <div class="col-lg-6 leftside">
                            <h1><?php echo get_field('baner-contacus')['title-deutsch']; ?></h1>
                            <?php dynamic_sidebar('widget-14'); ?>
                        </div>
                        
                        <?php
                        $titleOther = get_field('baner-contacus')['title-other'];

                        if (!empty($titleOther)) {
                            ?>
                            <div class="col-lg-6 rightside">
                                <h1><?php echo $titleOther; ?></h1>
                                <?php dynamic_sidebar('widget-15'); ?>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                </div>

                <div class="socials-banner-info">
                    <div class="row">
                       <div class="col-lg-4 col-sm-12 lefts">
                       <h1><?php echo get_field('baner-contacus')['title-phone']; ?></h1>
                        <?php dynamic_sidebar('widget-12'); ?>
                       </div>
                       <div class="col-lg-4 col-sm-12 center">
                       <h1><?php echo get_field('baner-contacus')['title-email']; ?></h1>
                       <?php dynamic_sidebar('widget-13'); ?>
                       </div>
                       <!-- <div class="col-lg-4 col-sm-12 rightside">
                       <h1><?php echo get_field('baner-contacus')['title-social']; ?></h1>
                        <li>
                        <div class="flex">
                        <a href="https://de.linkedin.com/company/solution25" aria-label="Linkedin"><span></span></a><br>
                        <a href="https://www.instagram.com/solution25com/?hl=en" aria-label="Instagram"><span></span></a><br>
                        <a href="https://www.facebook.com/solutiontwentyfive/" aria-label="Facebook"><span></span></a>
                        </div>
                        </li>
                       </div> -->
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="banner-home-contact">
                    <li>
                    <?php
                    $currentlang = get_bloginfo('language');
                    if ($currentlang == "en-GB") :
                        echo do_shortcode('[contact-form-7 id="12116" title="CF EN only contact-page"]');
                    elseif ($currentlang == "de-DE") :
                        echo do_shortcode('[contact-form-7 id="12115" title="CF DE only contact-page"]');
                    endif;
                    ?>
                    </li>
                </div>
            </div>
        </div>

        <div class="slider-partners online-mark-page contactus-page">
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



<?php get_footer(); ?>
