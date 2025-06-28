<?php 
/*
* Template Name: Shopware Page
*/
get_header(); 
?>
    <div class="banner-wrapper-up-shopify">
        <div class="container">
            <div class="opside-content">
                <div class="content-left">
                        <h1><?php the_content(); ?></h1>
                    <?php if(is_active_sidebar('widget-3') ) { ?>
						<div class="banner-btn">
							<?php dynamic_sidebar('widget-3');?>
						</div>
					<?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-wrapper-new-shopify">
        <div class="container">
            <div class="content-shopify">
                <div class="row">
                    <div class="header-logo-text">
                        <?php 
                            $url = get_field('banner')['image'];
                            $imageID = attachment_url_to_postid($url);
                        ?>
                        <h1><?php echo(get_field('banner')['title']); ?></h1>
                        <img src="<?php echo(get_field('banner')['image']); ?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="breadcrumbs-white">
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    </div> -->

    <div class="shopify-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <?php 
                        global $wp;
                        preg_match("/[^\/]+$/", home_url( $wp->request ), $matches);
                        $page_title = $matches[0];

                        $args = array(  
                            'post_type' => 'shopware',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                        );

                        $loop = new WP_Query( $args );
                        if ( $loop->have_posts() ) :
                        ?>
                        <div class="questions">
                            <?php
                                while ( $loop->have_posts() ) 
                                        : $loop->the_post(); 
                            ?>
                                <a class="ahrefshop" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            <?php
                                endwhile; 
                            ?>
                        </div>
                    <?php
                        endif;
                            wp_reset_postdata();
                    ?>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="content-shopware-content">
                        <!-- <div class="container"> -->
                            <h2><?php echo (get_field('why_shopware')['title']); ?></h2>
                            <pre><?php echo (get_field('why_shopware')['description']); ?></div>
                        <!-- </div> -->
                    </div> 
                </div>

        </div>
    </div>
</div>








                <?php
                $currentlang = get_bloginfo('language');
                if($currentlang=="en-GB") :
                    include("includes/appointment-en.php");
                elseif($currentlang=="de-DE") :
                    include("includes/appointment-de.php");
                endif;
                ?>
                
                <!-- <div class="set-up">
                    <div class="container">
                        <div class="row">
                            <div class="box boxone col-lg-4">
                            <img src="<?php echo (get_field('setup')['image']); ?>" alt="">
                            <h2><?php echo (get_field('setup')['title']); ?></h2>
                            <pre><?php echo (get_field('setup')['description']); ?></pre>
                            </div>
                            <div class="box two col-lg-4">
                            <img src="<?php echo (get_field('setup')['imagetwo']); ?>" alt="">
                            <h2><?php echo (get_field('setup')['titletwo']); ?></h2>
                            <pre><?php echo (get_field('setup')['descriptiontwo']); ?></pre>
                            </div>
                            <div class="box three col-lg-4">
                            <img src="<?php echo (get_field('setup')['imagethree']); ?>" alt="">
                            <h2><?php echo (get_field('setup')['titlethree']); ?></h2>
                            <pre><?php echo (get_field('setup')['descriptionthree']); ?></pre>
                            </div>
                        </div>
                    </div>
                </div> -->
                
                

<div class="box-shop">
    <div class="container">
        <div class="shopware-content-box">
            <div class="title">
                <h2><?php echo(get_field('why_chose_us')['title']); ?></h2>
                    </div>
                            <?php
				                if( have_rows('why_chose_us') ): 
					            while ( have_rows('why_chose_us') ) : the_row(); 

						        if( have_rows('why_chose_box') ): 
			                ?>
                            <div class="row">
                            <?php 
					        while ( have_rows('why_chose_box') ) : the_row(); 
				            ?>
                            <div class="col-md-3">
                                <div class="shopware-box">
                
                                    <img src="<?php the_sub_field('image'); ?>" alt="">
                                    <h3><?php the_sub_field('title'); ?></h3>
                                    <pre><?php the_sub_field('description'); ?></pre>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            </div>
                        <?php endif; endwhile; endif; ?>
                        <!-- <div class="new-home-add new-shopware-add">
                        <div class="container">
                            <?php 
                                $url = get_field('contact_us')['image'];
                                $imageID = attachment_url_to_postid($url);
                            ?>
                            <img class="img-possition" src="<?php echo(get_field('contact_us')['image']); ?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
                                <div class="row">
                                    <div class="offset-xl-4 col-xl-4">
                                        <div class="new-add-text">
                                            <h2><?php echo(get_field('contact_us')['description']); ?></h2>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="new-add-text">
                                            <a href="<?php echo(get_field('contact_us')['button_link']); ?>"><?php echo(get_field('contact_us')['button_text']); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

        </div>
    </div>
</div>



<!-- <div class="project-step">
    <div class="container">
        <div class="number-box-wrapper">
            <div class="title">                          
                <h2><?php echo (get_field('project_steps')['title']); ?></h2>
                <pre><?php echo (get_field('project_steps')['description']); ?></pre>
            </div>
            <div class="box-inside">
            <?php
                if( have_rows('project_steps') ): 
                while ( have_rows('project_steps') ) : the_row(); 
                if( have_rows('box_content') ):  
            ?>
            <div class="row">
                <?php 
                 while ( have_rows('box_content') ) : the_row(); 
                ?>
                <div class="box-wrapper col-lg-4">
                    <?php 
                        $url = get_sub_field("image");
                        $imageID = attachment_url_to_postid($url);
                    ?>
                    <div class="content">
                        <img src="<?php the_sub_field("image"); ?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
                        <h3><?php the_sub_field("title"); ?></h3>
                        <pre><?php the_sub_field("description"); ?></pre>                               
                    </div>
                </div> 
                <?php endwhile; ?>    
            </div>
            <?php endif; endwhile; endif; ?>
            </div>
        </div>
    </div>
</div> -->


    <?php include("includes/portfolioshopware.php"); ?>
    


    <?php
    $currentlang = get_bloginfo('language');
    if($currentlang=="en-GB") :
        include("includes/contactform-en.php");
    elseif($currentlang=="de-DE") :
        include("includes/contactform-de.php");
    endif;
    ?>


    
    <div class="shopware-content-boxc">
        <div class="container">
                        <!-- <div class="contact-us" style="padding: 0">
                            <div class="row">
                            <div class="col-xl-6">
                                <div class="form-wrapper form-dedicated">
					            <?php 
						            $siteurl = get_permalink();
						            if($siteurl == "https://solution25.com/en/shopware/"):
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
                                <img src="https://solution25.com/wp-content/uploads/2022/02/Contact-image-1.png" alt="Tringa & Eriona" style="float:right;">
                            </div>
                        </div>
                </div> -->


                <!-- <div class="content-shopify-bottom">
                    <div class="container">
                        <h2><?php echo (get_field('shopware_content')['title']); ?></h2>
                        <pre><?php echo (get_field('shopware_content')['description']); ?></pre>
                    </div>
                </div> -->

                </div>
    </div>
</div>

<?php get_footer(); ?>