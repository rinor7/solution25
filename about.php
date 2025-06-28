<?php 
/*
* Template Name: About
*/
get_header(); 
?>
    
        <div class="banner-wrapper about-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xl-6">
                        <h1><?php echo ( get_field('banner')['title'] );?></h1>
                        <pre><?php echo ( get_field('banner')['text'] );?></pre>
                        <a href="tel:<?php echo ( get_field('general', 5)['phone_number'] );?>" class="btn btn-white"> <?php echo ( get_field('banner')['call_us_now_button'] );?>: <?php echo ( get_field('general', 5)['phone_number'] );?></a> 
                        <a href="mailto:<?php echo ( get_field('general', 5)['email'] );?>" class="btn-text"><?php echo ( get_field('banner')['send_email_button'] );?></a>
                    </div>
                    <div class="col-md-12 col-xl-6">
                        <!-- <a href="#" class="video-container"> -->
                            <!-- <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/Play.svg" alt="" class="play-button"> -->
                            <!-- <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/Video.png" alt=""> -->
                        <!-- </a> -->
                        <video autoplay loop muted playsinline>
                            <source src="<?php echo ( get_field('banner')['banner_video'] );?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="breadcrumbs-white">
            <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?> 
        </div>

        <div id="videoPopup" class="video-container">
            <iframe src="https://www.youtube.com/embed/<?php echo ( get_field('banner')['video'] );?>?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="story-wrapper">
            <div class="container">
                <h3><?php echo ( get_field('our_story')['title'] );?></h3>
                <pre><?php echo ( get_field('our_story')['text'] );?>
                </pre>
            </div>
        </div>

        <div class="our-team-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3><?php echo ( get_field('team')['title'] );?></h3>
                    </div>
                    <?
                    if( have_rows('team') ): 
                        while ( have_rows('team') ) : the_row(); 
                        
                            if( have_rows('team_repeater') ): 
                                while( have_rows('team_repeater') ): the_row(); 
                            ?>
                                <div class="col-xl-3">
                                    <div class="team-member">
                                        <?php 
                                            $url = get_sub_field('image');
                                            $imageID = attachment_url_to_postid($url);
                                        ?>
                                        <img src="<?php the_sub_field('image'); ?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
                                        <div class="team-content">
                                            <h3><?php the_sub_field('name'); ?></h3>
                                            <pre><?php the_sub_field('position'); ?></pre>
                                        </div>
                                        <!-- <div class="text-wrapper">
                                            <span>"</span>
                                            <pre><?php the_sub_field('text'); ?></pre>
                                            <span>"</span>
                                        </div> -->
                                    </div>
                                </div>
                            <?php 
                                endwhile;
                            endif; 
                        endwhile; 
                    endif;
                ?>
                </div>
            </div>
        </div>
        
    <?php include("includes/latest-post.php"); ?>

   

<?php get_footer(); ?>