<?php 
/*
* Template Name: Book Us Page
*/
get_header(); 
?>


    <main id="primary" class="site-main site-main-book">
        <?php
        $url = get_field('banner_url'); // Button link
        $button_name = get_field('banner_button_name'); // Button text
        $background_desktop = get_field('banner_background_image'); // Desktop background image
        $background_mobile = get_field('banner_background_image_mobile'); // Mobile background image
        $background_color = get_field('banner_background_color'); // Background color
        ?>
        
        <div class="banner-wrapper-book" style="<?php if( $background_color ): ?>background: <?php echo esc_attr($background_color); ?>;<?php endif; ?>">
            <a href="<?php echo esc_attr($url); ?>" class="clickable-box"> </a>
            <div class="container">
                <div class="content-center single-banner_book">
        
                    <!-- Background Image Overlay for Desktop -->
                    <?php if( $background_desktop ): ?>
                        <div class="background-image-overlay desktop-image" 
                             style="background-image: url('<?php echo esc_url($background_desktop); ?>');">
                        </div>
                    <?php endif; ?>
        
                    <!-- Background Image Overlay for Mobile -->
                    <?php if( $background_mobile ): ?>
                        <div class="background-image-overlay mobile-image" 
                             style="background-image: url('<?php echo esc_url($background_mobile); ?>');">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="partnership-certifications">
            <div class="container">
                <div class="partnership-certifications-wrapper">
                    <div class="partnership">
                        <?php if( !empty(get_field('our-certif-rd')['title']) ): ?>
                            <div class="title">
                                <h4><?php echo esc_html(get_field('our-certif-rd')['title']); ?></h4>
                            </div>
                        <?php endif; ?>
        
                        <div class="imgs">
                            <?php if( !empty(get_field('our-certif-rd')['icon1']) ): ?>
                                <img src="<?php echo esc_url(get_field('our-certif-rd')['icon1']); ?>" alt="icon">
                            <?php endif; ?>
        
                            <?php if( !empty(get_field('our-certif-rd')['icon2']) ): ?>
                                <img src="<?php echo esc_url(get_field('our-certif-rd')['icon2']); ?>" alt="icon">
                            <?php endif; ?>
                        </div>
                    </div>
        
                    <div class="certifications">
                        <?php if( !empty(get_field('our-certif-rd')['title2']) ): ?>
                            <div class="title">
                                <h4><?php echo esc_html(get_field('our-certif-rd')['title2']); ?></h4>
                            </div>
                        <?php endif; ?>
        
                        <div class="imgs">
                            <?php if( !empty(get_field('our-certif-rd')['icon3']) ): ?>
                                <img src="<?php echo esc_url(get_field('our-certif-rd')['icon3']); ?>" alt="icon">
                            <?php endif; ?>
        
                            <?php if( !empty(get_field('our-certif-rd')['icon4']) ): ?>
                                <img src="<?php echo esc_url(get_field('our-certif-rd')['icon4']); ?>" alt="icon">
                            <?php endif; ?>
        
                            <?php if( !empty(get_field('our-certif-rd')['icon5']) ): ?>
                                <img src="<?php echo esc_url(get_field('our-certif-rd')['icon5']); ?>" alt="icon">
                            <?php endif; ?>
                            
                            <?php if( !empty(get_field('our-certif-rd')['icon6']) ): ?>
                                <img src="<?php echo esc_url(get_field('our-certif-rd')['icon6']); ?>" alt="icon">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blogs-wrapper-redesign">
            <div class="container">

               <h3 class="blogstitle"><?php echo ( get_field('news-rd')['title-section'] );?></h3>

                <div class="blogs-new">
                
                <div class="swiper mySwiper blogs-wrapper-news">
                    <div class="swiper-wrapper">
                        <?php 
                            $args = array(  
                                'post_type'      => 'post',
                                'post_status'    => 'publish',
                                'posts_per_page' =>  -1,
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'category',
                                        'field'    => 'slug',
                                        'terms'    => 'news', // Replace 'news' with your category slug
                                    ),
                                ),
                            );
                            
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ): $loop->the_post(); 
                                // Display post title and excerpt
                            ?>
                            <div class="col-12 col-md-6 unique swiper-slide">
                                    <div class="blog-item">
                                        <?php the_post_thumbnail(); ?>
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                            </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="blogs-news-arrow d-none-mobile">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    </div>
                </div>

                <div class="services-new">
                    <h3 class="servicestitle"><?php the_field('title_section_services');?></h3>
                    <div class="our-services">
                        <div class="boxes box-one">
                            <img src="<?php echo ( get_field('our-services-rd')['services-icon1'] );?>" alt="icon" width="30" height="30">
                            <h3><?php echo ( get_field('our-services-rd')['title-services1'] );?></h3>
                            <p><?php echo ( get_field('our-services-rd')['subtitle-services1'] );?></p>
                        </div>
                        <div class="boxes box-two">
                            <img src="<?php echo ( get_field('our-services-rd')['services-icon2'] );?>" alt="icon" width="30" height="30">
                            <h3><?php echo ( get_field('our-services-rd')['title-services2'] );?></h3>
                            <p><?php echo ( get_field('our-services-rd')['subtitle-services2'] );?></p>
                        </div>
                        <div class="boxes box-three">
                            <img src="<?php echo ( get_field('our-services-rd')['services-icon3'] );?>" alt="icon" width="30" height="30">
                            <h3><?php echo ( get_field('our-services-rd')['title-services3'] );?></h3>
                            <p><?php echo ( get_field('our-services-rd')['subtitle-services3'] );?></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

     
        <div class="book-section">
            <h3 class="section-stitle"><?php echo esc_html( get_field('book-rd')['title-section'] ); ?></h3>
            <?php 
            $button_url = get_field('book-rd')['button_url']; 
            $button_name = get_field('book-rd')['button_name']; 
            ?>
            <?php if ( !empty($button_url) && !empty($button_name) ): ?>
                <div class="banner-btn"> 
                    <a href="<?php echo esc_url($button_url); ?>" class="button-link"><?php echo esc_html($button_name); ?></a>
                </div>
            <?php endif; ?>
            <div class="image-bg">
                <a href="<?php echo esc_url($button_url); ?>">
                    <img src="<?php echo esc_url( get_field('book-rd')['bg-book'] ); ?>" alt="book-bg" width="1200" height="500">
                </a>
            </div>
        </div>
    </main>


<?php get_footer(); ?>