<div class="blogs-wrapper">
    <div class="container">
        <h3 class="blogstitle"><?php pll_e( 'Latest Posts' );?></h3>
        <div class="swiper mySwiper mySwiper3">
        <div class="swiper-wrapper">
            <?php 
            $args = array(  
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 4,
            'category__not_in'  => array(13, 688, 691),
            );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ): $loop->the_post(); 
            ?>
                <div class="col-12 col-md-6 unique swiper-slide">
                    <a href="<?php the_permalink(); ?>">
                        <div class="blog-item">
                            <?php the_post_thumbnail(); ?>
                            <!-- <?php 
                                $url = get_field('author')['image'];
                                $imageID = attachment_url_to_postid($url);
                            ?> -->
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