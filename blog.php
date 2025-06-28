<?php 
/*
* Template Name: Blog
*/
get_header(); 
?>

    <div class="blog-intro">
        <div class="container">
            <div class="title">
            <h2><?php the_content(); ?></h2>
            </div>
        </div>
    </div>
    


    <div class="blog-submenu">
        <div class="container">
            <div class="flex justify-between">
                <h2><?php the_field('recentarticle'); ?></h2>
                <?php $categories = get_categories(); ?>
                <ul>
                    <!-- <li><a class="cat-list_item active" href="#!" data-slug="">All posts</a></li> -->
                    <li><a class="cat-list_item active" href="#!" data-slug="">All posts (<?= wp_count_posts()->publish; ?>)</a></li>
                    <?php foreach($categories as $category) : 
                        if($category->slug != 'post-of-the-month' && $category->slug != 'uncategorized' && $category->slug != 'news'): ?>
                        <li>
                            <a class="cat-list_item" href="#!" data-slug="<?= $category->slug; ?>" data-type="post">
                                <?= $category->name; ?> (<?= $category->category_count; ?>)
                            </a>
                        </li>
                    <?php endif; endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    

    
    <div class="latest-post-wrapper blog-item-custom">
        <div class="container">
                    <div class="latest-post-container ajax-container">
                        <?php

                            $args = array(  
                                'post_type'         => 'post',
                                'post_status'       => 'publish',
                                'category_name'     => '',
                                'posts_per_page' => 12,
                                'paged'=> $paged,
                                'category__not_in' => array(
                                    get_cat_ID('news'), 
                                    get_cat_ID('post-of-the-month')
                                ) // Exclude 'news' and 'post-of-the-month' categories
                            );

                            $loop = new WP_Query( $args );
                            if ( $loop->have_posts() ):
                                while ( $loop->have_posts() ) : $loop->the_post(); 
                                    $categorySlug = get_the_category(get_the_ID());
                                    include("includes/blog-item.php"); 
                                endwhile;
                            endif;
                            wp_reset_postdata(); 
                            wp_reset_query(); 
                            your_custom_pagination( $args );   
                        ?>
                        
                    </div>
                </div>
    </div>
        
   <?php include("includes/footer2.php");  ?>


