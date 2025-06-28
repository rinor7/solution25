<?php 
get_header(); 
?>
    
    
    <div class="banner-wrapper-shopify">
        <div class="container">
            <div class="content-shopify">
                <div class="row">
                    <div class="col-md-4">
                        <?php 
                            $url = get_field('banner', 258)['image'];
                            $imageID = attachment_url_to_postid($url);
                        ?>
                        <div class="header-image-shopify">
                            <img src="<?php echo ( get_field('banner', 258)['image'] );?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-wrapper form-wrapper-white">
                            <div class="form-text-wrapper">
                                <pre><?php echo ( get_field('banner', 258)['text'] );?></pre>
                            </div>
                            <div class="pipedriveWebForms" data-pd-webforms="https://webforms.pipedrive.com/f/6iEeilcTs5tFocaeipKpX7zM0e9sIGbzWVOChQNAFXqAnWX4I4IZCC89limWTgE9gf"> 
                                <script src="https://webforms.pipedrive.com/f/loader"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="breadcrumbs-white">
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    </div>

    <div class="shopify-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="questions">
                        <?php 
                            $args = array(  
                                'post_type' => 'dedicatedteam',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'orderby' => 'date',
                                'order'   => 'ASC',
                                'suppress_filters' => true,
                            );

                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) 
                                    : $loop->the_post(); 
                        ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        <?php
                            endwhile;
                            wp_reset_postdata(); 
                        ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content">
                        <h1><?php the_title(); ?></h1>
                        <?php
                            if( have_rows('content') ):
                                while ( have_rows('content') ) : the_row();

                                    if( get_row_layout() == 'image' ):
                        ?>
                                    <img src="<?php the_sub_field('image'); ?>" alt="">
                        <?php
                                    elseif( get_row_layout() == 'text' ): 
                        ?>
                                    <pre><?php the_sub_field('text'); ?></pre>
                        <?php
                                    elseif( get_row_layout() == 'title' ): 
                        ?>
                                    <h3><?php the_sub_field('title'); ?></h3>
                        <?php
                                    endif;
                                endwhile;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <?php include("includes/latest-post.php"); ?>

    <?php
    $currentlang = get_bloginfo('language');
    if($currentlang=="en-GB") :
        include("includes/appointment-en.php");
    elseif($currentlang=="de-DE") :
        include("includes/appointment-de.php");
    endif;
    ?>

<?php get_footer(); ?>