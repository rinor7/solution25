<?php 
/*
* Template Name: Reference
*/
get_header(); 
?>
    <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>

    <div class="banner-wrapper reference-page">
        <h1><?php the_field('title'); ?></h1>
        <pre><?php the_field('text'); ?></pre>
    </div>

    <div class="blog-submenu bg-gray">
        <div class="container">
            <ul>
                <li><a class="cat-list_item active" href="#!" data-slug="" data-type="reference">All</a></li>

                <?php 
                    $terms = get_terms( array(
                        'taxonomy' => 'reference_cat',
                    ) );
                    foreach ($terms as $term):
                        $excluded_categories = array('pagespeed', 'online-marketing');
                        if (in_array($term->slug, $excluded_categories)) {
                            continue; // Skip the excluded categories
                        }
                ?>
                        <li>
                            <a class="cat-list_item" href="#!" data-slug="<?= $term->slug; ?>" data-type="reference">
                                <?= $term->name; ?>
                            </a>
                        </li>
                <?php 
                    endforeach; 
                ?>
            </ul>
        </div>
    </div>

    <div class="reference-wrapper">
        <div class="container">
            <div class="row ajax-container">
                <?php
                    $args = array(  
                        'post_type'         => 'reference',
                        'post_status'       => 'publish',
                        'posts_per_page'    => -1, 
                    );

                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                        include("includes/reference-item.php"); 
                    endwhile;
                    wp_reset_postdata(); 
                ?>
            </div>
        </div>
    </div>
        

<?php get_footer(); ?>