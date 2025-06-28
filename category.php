<?php
get_header(); 
?>
    <?php
        $category = get_category( get_query_var( 'cat' ) );
        $currentCatID = $category->cat_ID;
        $currentCat = get_the_category_by_ID($currentCatID);
    ?>
    
    <div class="latest-post-wrapper"> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-">
                    <h1><?= the_category($currentCat); ?><span class="line green">_</span></h1>
                    <div class="latest-post-container ajax-container">
                        <?php
                            $args = array(  
                                'post_type'         => 'post',
                                'post_status'       => 'publish',
                                'posts_per_page'    => -1,
                                'category_name'     => '',
                                'cat'             => $currentCatID,
                            );

                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post(); 
                                $categorySlug = get_the_category(get_the_ID());
                                include("includes/blog-item.php"); 
                            endwhile;
                            wp_reset_postdata(); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>