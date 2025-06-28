<?php 
/*
* Template Name: About Us New
*/
get_header(); 
?>
<main id="primary" class="site-main site-main-home">
 <div class="container">
                    <div class="banner-wrapper-redesign new-banner-wrapper-redesign">
                        
                            <div class="row">
                                <div class="col-md-12 col-xl-12 content-center">
                                <h1><?php echo ( get_field('banner-rd11')['title11'] );?></h1>
                              
                                </div>
                            </div>
						
                </div>
	



	<?php 
// Define static page IDs for homepages in different languages
$home_page_en_id = 15113; // Replace with the actual English home page ID
$home_page_de_id = 12375; // Replace with the actual German home page ID

// Detect the current language and set the correct page ID
$current_lang = pll_current_language();
$home_page_id = ($current_lang === 'de') ? $home_page_de_id : $home_page_en_id;
?>

<div class="container">
    <div class="meet-our-core-team">
		<div class="action-team">
            <?php echo ( get_field('banner-rd11_copy')['title11'] );?>
        </div>

        <div class="action-black action-black-bottom">
            <?php the_field('action-black', $home_page_id); ?>
        </div>
        
    </div>
</div>
	
	
                <?php 
$home_page_en_idd = 15113; 
$home_page_de_idd = 12375;
// Detect the current language and use the correct home page ID
$current_lang = pll_current_language();
$home_page_id = ($current_lang === 'de') ? $home_page_de_idd : $home_page_en_idd;

// Get banner fields from the correct home page
$banner = get_field('banner-rd11', $home_page_id);
?>

<div class="container">
    <div class="call-to-action-line">
        <span><?php echo esc_html($banner['call-to-action']); ?></span>
        <div class="banner-btn"> 
            <?php if ($banner): ?>
                <a class="call-to-action" href="<?php echo esc_url($banner['url11']); ?>">
                    <?php echo esc_html($banner['button-name11']); ?>
                </a>
                <a class="phone-button" href="tel:<?php echo esc_html($banner['url22']); ?>">
                    <?php echo esc_html($banner['button-name22']); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>

    
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
        
        <?php include("includes/team-slider.php"); ?>



        <?php include("includes/map-section.php"); ?>


</main>
<?php include("includes/footer2.php");  ?>