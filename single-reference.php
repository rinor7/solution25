<?php 
get_header(); 
?>

    <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
  
    <div class="reference-single-wrapper">
        <div class="row">
            <div class="col-xl-4">
                <h1><?php the_title(); ?></h1>
                <pre><?php the_field('text'); ?></pre>
                <h3><?php pll_e( 'Technology we used' );?></h3>
                <pre class="technology"><?php the_field('technology'); ?></pre>
                <h3><?php pll_e( 'Live website' );?></h3>
                <a href="<?php the_field('go_to_website_link'); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-white"><?php pll_e( 'Go to website' );?></a>
            </div>
            <div class="col-xl-8">
                <?php 
                    $url = get_field('image');
                    $imageID = attachment_url_to_postid($url);
                ?>
                <img src="<?php the_field('image'); ?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
            </div>
        </div>
    </div>
        


<?php get_footer(); ?>