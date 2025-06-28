<?php 
/*
* Template Name: Apps
*/
get_header(); 
?>

<div class="new-apps-banner">
        <video autoplay="" loop="" muted="" playsinline="">
            <source src="<?php echo ( get_field('apps_banner')['video'] );?>" type="video/mp4">
        </video>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="new-apps-banner-text">
                        <h1><?php echo ( get_field('apps_banner')['title'] );?></h1> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="new-parners-container">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/Adobe.svg" alt="Adobe">
                </div>
                <div class="col-md-2">
                    <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/Shopify 1.svg" alt="Shopify">
                </div>
                <div class="col-md-2">
                    <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/Shopware1.svg" alt="Shopware">
                </div>
                <div class="col-md-2">
                    <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/Handlerbund Partner1.svg" alt="Handlerbund">
                </div>
                <div class="col-md-2">
                    <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/Maxcluster1.svg" alt="Maxcluster">
                </div>
                <div class="col-md-2">
                    <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/DigitalOcean1.svg" alt="Digital Ocean">
                </div>
            </div>
        </div>
    </div>

    <div class="technology-aps">
        <div class="container">
            <h2><?php echo ( get_field('tech_banner')['title'] );?></h2>
            <pre><?php echo ( get_field('tech_banner')['description'] );?></pre>
			<?
				if( have_rows('tech_banner') ): 
					while ( have_rows('tech_banner') ) : the_row(); 

						if( have_rows('programming_languages') ): 
			?>
            <div class="row">
				<?php 
					while ( have_rows('programming_languages') ) : the_row(); 
				?>
                <div class="col-lg-6">
                    <div class="aps-box">
                        <?php 
                            $url = get_sub_field("image");
                            $imageID = attachment_url_to_postid($url);
                        ?>
                        <img src="<?php the_sub_field("image"); ?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
                        <h3><?php the_sub_field("title"); ?></h3>
                        <pre><?php the_sub_field("description"); ?></pre>
                        <a href="<?php the_sub_field("button_link"); ?>"><?php the_sub_field("button_name"); ?></a>
                    </div>
                </div>
				<?php endwhile; ?>
            </div>
			<?php endif; endwhile; endif; ?>
        </div>
    </div>
    <div class="contact-us" style="padding: 0">
        <div class="row">
            <div class="col-xl-6">
                <div class="form-wrapper form-dedicated">
					<?php 
						$siteurl = get_permalink();
						if($siteurl == "https://solution25.com/en/apps-2/"):
					?>
						<div class="pipedriveWebForms" data-pd-webforms="https://webforms.pipedrive.com/f/cB5bsPeXLd7vPxBSlBa1HMRTXftyn1bR7elsV7ZKjHpEhdVBYY8yrHM08LBKPWe7ez"><script src="https://webforms.pipedrive.com/f/loader"></script></div>
					<?php 
						else :
					?>
						<div class="pipedriveWebForms" data-pd-webforms="https://webforms.pipedrive.com/f/ccPg5sPn1ddFl8jucmXFNMLKVVAXuOLFX48DFDcXSomuGilppryMzJLQVjdM9kNe4H"><script src="https://webforms.pipedrive.com/f/loader"></script></div>
					<?php endif; ?>
                </div>
            </div>
            <div class="col-xl-6 dedicated-contact-us-img">
                <img src="https://solution25.com/wp-content/uploads/2022/02/Contact-image.png" alt="Tringa & Eriona">
            </div>
        </div>
    </div>
<?php get_footer(); ?>