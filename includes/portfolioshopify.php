<div class="our-portfolio our-portfolio-shopify">
        <div class="container">
            <h1 class="portfolio-title"><?php pll_e( 'Portfolio posts title shopify' );?></h1>
        </div>
        <div class="container customized-container">
            <div class="intro">
            <div class="swiper mySwiper mySwiperportfolio">
            <div class="swiper-wrapper">
                <?php
                $args = array(
                'post_type' => 'reference',
                'posts_per_page' => '-1',
                'order' => 'DESC',
                 'tax_query' => array(
                    array( 
                        'taxonomy'  => 'reference_cat',
                        'field'     => 'slug',
                        'terms'     => array('shopify'),
                    ),
                ),
                );
                $loop = new WP_Query($args); 
                while($loop->have_posts()):
                $loop->the_post();
                ?>
                <div class="swiper-slide">
                <div class="intro-boxes">
                <img class="imgbox" src="<?php the_field('image'); ?>" alt="Alt text">
                <div class="content-box">
                <div class="title-post">
                    <?php if (get_field('iconlogo')) : ?>
                        <img src="<?php the_field('iconlogo'); ?>" alt="logo-company">
                    <?php else : ?>
                        <h1><?php the_title(); ?></h1>
                    <?php endif; ?>
                </div>
                <h2><?php the_field('text');?></h2>
                <?php $direction = get_field('direct-link-post');
                if (empty($direction)) {
                    ?>
                    <div class="permalink">
                        <!-- <a href="<?php the_permalink(); ?>">Read case study</a> -->
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="specific-direction">
                        <a href="<?php the_field('direct-link-post'); ?>">Read case study</a>
                    </div>
                    <?php
                }
                ?>
                </div>
                </div>
                </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
                </div>
                <div class="swiper-button-nextt"><i class="feather-chevron-right"></i></div>
                <div class="swiper-button-prevv"><i class="feather-chevron-left"></i></div>
                </div>
                <div class="view-allbutton">
                <?php if (get_locale() === 'de_DE') : ?>
                <a href="/referenze">alle Projekte anzeigen</a>
                <?php else: ?>
                <a href="/en/references">see all projects</a>
                <?php endif; ?>
                </div>
                </div>

            </div>
        </div>
    </div>