<?php 
/*
* Template Name: Apps New
*/
get_header(); 
?>

<div class="new-apps-banner apps-banner-new">
        <div class="vid">
        <div class="overfl"></div>
        <video autoplay="" loop="" muted="" playsinline="">
            <source src="<?php echo ( get_field('apps_banner')['video'] );?>" type="video/mp4">
        </video>
        </div>
        
                <div class="leftside">
                <div class="container">
                    <div class="new-apps-banner-text">
                        <h1><?php echo ( get_field('apps_banner')['title'] );?></h1> 
                        <div class="call-us-btn">
                        <?php if(is_active_sidebar('widget-9') ) { ?>
                            <?php dynamic_sidebar('widget-9');?>
                        <?php } ?>
                        </div>
                    </div>
                    

                </div>
        </div>
    </div>

    <div class="banner-wrapper-new-shopify banner-wrapper-app-new">
        <div class="container">

            <div class="content-shopify"> 

                    <div class="header-text col-lg-3 col-md-6">
                        <h1><?php echo(get_field('banner-apps-gr')['title']); ?></h1>
                    </div>
                    <div class="header-logo col-lg-9 col-md-6">
                    <div class="swiper mySwiper mySwiper-app">
                    <?php
                        if( have_rows('banner-apps-gr') ): 
                        while ( have_rows('banner-apps-gr') ) : the_row(); 
                        if( have_rows('banner-apps-rep') ): 
                    ?>
                    <div class="swiper-wrapper">
                    <?php 
                        while ( have_rows('banner-apps-rep') ) : the_row(); 
                    ?>
                    <div class="swiper-slide">

                    <img src="<?php the_sub_field('image'); ?>" alt="">   

                    </div>
                    <?php endwhile; ?>
                        </div>
                    <?php endif; endwhile; endif; ?>
                    </div>
                    </div>
            </div>

        </div>
    </div>






    <div class="technology-aps technology-aps-new">
        <div class="container">
            <h2><?php echo ( get_field('tech_banner')['title'] );?></h2>
            <pre><?php echo ( get_field('tech_banner')['description'] );?></pre>
			<?php
				if( have_rows('tech_banner') ): 
					while ( have_rows('tech_banner') ) : the_row(); 

						if( have_rows('programming_languages') ): 
			?>
            <div class="row">
				<?php 
					while ( have_rows('programming_languages') ) : the_row(); 
				?>
                <div class="col-lg-3">
                    <div class="aps-box">
                        <?php 
                            $url = get_sub_field("image");
                            $imageID = attachment_url_to_postid($url);
                        ?>
                        <div class="upside">
                        <img src="<?php the_sub_field("image"); ?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
                        <h3><?php the_sub_field("title"); ?></h3>
                        <pre><?php the_sub_field("description"); ?></pre>
                        </div>
                        <div class="downside">
                        <a href="<?php the_sub_field("button_link"); ?>"><?php the_sub_field("button_name"); ?></a>
                        </div>
                    </div>
                </div>
				<?php endwhile; ?>
            </div>
			<?php endif; endwhile; endif; ?>
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