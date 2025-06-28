<?php 
get_header(); 
?>
    <div class="crmb">
    <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    </div>

    <div class="banner-wrapper-blog single-blog">
        <div class="container">

                <?php 
                $custom_image = get_field('custom_image'); // Get the custom field image
                
                if ($custom_image) : ?>
                    <div class="col-xl-12 img-thumb custom-img">
                        <img src="<?php echo esc_url($custom_image['url']); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                    </div>
                <?php else : ?>
                    <div class="col-xl-12 img-thumb default-thumb">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endif; ?>


                <div class="post-date">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        $post_date = get_the_date('j F Y');
                        echo $post_date;
                    endwhile;
                endif;
                ?>
                </div>

            <div class="row">
                <div class="col-xl-9">
                    <h1><?php the_title(); ?></h1>
                    <pre><?php the_excerpt(); ?></pre>
                    <div class="extra-content">
                        <?php
                        if( have_rows('content') ):
                        while ( have_rows('content') ) : the_row();
                        if( get_row_layout() == 'full_image' ):
                        ?>
                        <img src="<?php the_sub_field('image'); ?>" alt="blog-image">
                        <?php
                        elseif( get_row_layout() == 'split_image' ): 
                        ?>
                        <div class="double-imageblogs">
                            <img src="<?php the_sub_field('image_left'); ?>" alt="blog-image">
                            <img src="<?php the_sub_field('image_right'); ?>" alt="blog-image">
                        </div>
                        <?php
                        elseif( get_row_layout() == 'full_image_contain' ): 
                        ?>
                        <img src="<?php the_sub_field('image'); ?>" alt="blog-image" style="object-fit: contain;height:auto;">
                        <?php
                        elseif( get_row_layout() == 'content_semibold_text' ): 
                        ?>
                        <h2><?php the_sub_field('title'); ?></h2>
                        <pre class="semiBold"><?php the_sub_field('text'); ?></pre>
                        <?php
                        elseif( get_row_layout() == 'content_regular_text' ): 
                        ?>
                        <h2><?php the_sub_field('title'); ?></h2>
                        <?php the_sub_field('text'); ?>
                        <?php
                        endif;
                        endwhile;
                        endif;
                        ?>
                    </div>
                 </div>

                 <div class="col-xl-3">
                    <div class="rightsd">
                        <!-- <div class="sharecontent">
                            <div class="ttl"><?php pll_e( 'Share this article' );?></div>
                            <?php add_share_buttons(); ?>
                        </div> -->
                        <!-- <div class="blog-author-wrapper">
                            <div class="userph"><img class="user-photo" src="<?php echo ( get_field('author')['image'] );?>" alt="<?php echo ( get_field('author')['name'] );?>"></div>
                            <pre><?php echo ( get_field('author')['name'] );?>
                            <span><?php echo ( get_field('author')['position'] );?></span></pre>
                        </div> -->
                    </div>


                    <?php if (get_field('mytime')) : ?>
                    <div class="min-read">
                        <p><?php the_field('mytime'); ?></p>
                    </div>
                    <?php endif; ?>


                    
                 </div>

            </div>
            
        </div>
    </div>

    <div class="blogs-wrapper single-wr">
    <div class="container">
        <h3 class="blogstitle"><?php pll_e( 'Latest Posts' );?></h3>
        <div class="swiper mySwiper mySwiper3">
        <div class="swiper-wrapper">
            <?php 
            $args = array(  
            'post_type'         => 'post',
            'category_name'     => get_the_category( $id )[0]->name ,
            'post_status'       => 'publish',
            'posts_per_page'    => 4,
            'post__not_in'      => array(get_the_ID()),
            );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); 
            ?>
                <div class="col-12 col-md-6 unique swiper-slide">
                    <a href="<?php the_permalink(); ?>">
                        <div class="blog-item">
                            <?php the_post_thumbnail(); ?>
                            <?php 
                                $url = get_field('author')['image'];
                                $imageID = attachment_url_to_postid($url);
                            ?>
                            <!-- <div class="blog-author-wrapper">
                                <img class="user-photo" src="<?php echo ( get_field('author')['image'] );?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
                                <pre><?php echo ( get_field('author')['name'] );?><span><?php echo ( get_field('author')['position'] );?></span></pre>
                            </div> -->
                            <h3><?php the_title(); ?></h3>
                        </div>
                    </a>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata(); 
                    ?>
            </div>
        </div>
        <div class="pagination-blog">
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
        
  

<?php get_footer(); ?>