<?php 
/*
* Template Name: Apps Single
*/
get_header(); 
?>
    <div class="banner-wrapper-shopify">
        <div class="container">
            <div class="content-shopify">
                <div class="row">
                    <div class="col-md-4 mob-d-none">
                        <?php 
                            $url = get_field('banner')['image'];
                            $imageID = attachment_url_to_postid($url);
                        ?>
                        <div class="header-image-shopify">
                            <img src="<?php echo ( get_field('banner')['image'] );?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
                        </div>
                    </div>
                    <div class="col-md-8 desk-w100">
                        <div class="form-wrapper form-wrapper-white">
                            <div class="form-text-wrapper">
                                <pre><?php echo ( get_field('banner')['text'] );?></pre>
                            </div>
                            
                            <div class="singlecontactform">
                            <?php dynamic_sidebar('widget-4'); ?>
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
                <!-- <div class="col-md-4">
                    <?php 
                        global $wp;
                        preg_match("/[^\/]+$/", home_url( $wp->request ), $matches);
                        $page_title = $matches[0];

                        $args = array(  
                            'post_type' => $page_title,
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                        );

                        $loop = new WP_Query( $args );
                        if ( $loop->have_posts() ) :
                    ?>
                        <div class="questions">
                            <?
                                while ( $loop->have_posts() ) 
                                        : $loop->the_post(); 
                            ?>
                                <a class="ahref" href="<?php the_permalink(); ?>">
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
                </div> -->
                <div class="col-md-12">
                    <div class="content">
                        <?php
                            if( have_rows('content') ):
                                while ( have_rows('content') ) : the_row();
                                    $i == 1;

                                    if( get_row_layout() == 'image' ):
                        ?>
                                    <img src="<?php the_sub_field('image'); ?>" alt="">
                        <?php
                                    elseif( get_row_layout() == 'text' ): 
                        ?>
                                    <pre><?php the_sub_field('text'); ?></pre>
                        <?php
                                    elseif( get_row_layout() == 'consultant_banner' ): 
                        ?>
                                        <?php 
                                            //if( the_sub_field('banner_select') == 'Default' ):
                                        ?>
                                        <?php 
                                            //elseif( the_sub_field('banner_select') == 'Image' ):
                                        ?>
                                        <?php 
                                            //elseif( the_sub_field('banner_select') == 'Statistic' ):
                                        ?>
                                        <?php 
                                            //elseif( the_sub_field('banner_select') == 'Growth' ):
                                        ?>
                                        <?php 
                                            //elseif( the_sub_field('banner_select') == 'Potential' ):
                                        ?>
                                        <?php 
                                            //endif;
                                        ?>
                        <?php
                                    elseif( get_row_layout() == 'title' ): 
                                        $i++;
                                        if( $i > 3 ): 
                        ?>
                                                <h3><?php the_sub_field('title'); ?></h3>
                        <?php
                                        else:
                        ?>
                                                <h<?= $i; ?>><?php the_sub_field('title'); ?></h<?= $i; ?>>
                        <?php
                                        endif;
                        
                                    endif;
                                endwhile;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
        

<?php get_footer(); ?>