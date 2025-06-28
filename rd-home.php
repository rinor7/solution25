<?php 
/*
* Template Name: RD home page
*/
get_header(); 
?>


<main id="primary" class="site-main site-main-home">
        
                <div class="container">
                    <div class="banner-wrapper-redesign new-banner-wrapper-redesign">
                        
                            <div class="row">
                                <div class="col-md-12 col-xl-12 content-center">
                                <h1><?php echo ( get_field('banner-rd11')['title11'] );?></h1>
                                <p><?php echo ( get_field('banner-rd11')['subtitle11'] );?></p>
                                <div class="banner-btn"> 
                                    <a clas="call-to-action" href="<?php echo esc_url(get_field('banner-rd11')['url11']); ?>">
                                        <?php echo esc_html(get_field('banner-rd11')['button-name11']); ?>
                                    </a>
                                    <a class="phone-button" href="tel:<?php echo esc_html(get_field('banner-rd11')['url22']); ?>">
                                        <?php echo esc_html(get_field('banner-rd11')['button-name22']); ?>
                                    </a>
                                </div>
                                </div>

                                <div class="certificates-new">
                                    <?php echo ( get_field('banner-rd11')['certificates'] );?>
                                </div>
                            </div>

                    </div>
                </div>
                
                <?php if( have_rows('banner_rd-repeater') ): ?>
                    <div class="banner-wrapper-redesign-25" style="display:none;">
                        <div class="container">
                            <!-- Desktop Version -->
                            <div class="swiper mySwiper mySwiper-frontpage mySwiper-frontpage-desktop desk-vers">
                                <div class="swiper-wrapper">
                                    <?php while( have_rows('banner_rd-repeater') ): the_row(); ?>
                                        <?php 
                                            $title = get_sub_field('title');
                                            $subtitle = get_sub_field('subtitle');
                                            $url = get_sub_field('url'); // Anchor link
                                            $button_name = get_sub_field('button-name');
                                            $background = get_sub_field('background_image'); // Desktop background
                                        ?>
                                        <div class="content-center swiper-slide" 
                                             style="<?php if( $background ): ?>background-image: url('<?php echo esc_url($background); ?>');<?php endif; ?>">
                                            <a href="<?php echo esc_attr($url); ?>" class="clickable-box"> </a>
                                            <!-- Content -->
                                            <?php if( $title || $subtitle || ( !empty($url) && !empty($button_name) ) ): ?>
                                                <div class="content-wrapper">
                                                    <?php if( $title ): ?>
                                                        <h2><?php echo esc_html($title); ?></h2>
                                                    <?php endif; ?>
                                                    <?php if( $subtitle ): ?>
                                                        <h3><?php echo esc_html($subtitle); ?></h3>
                                                    <?php endif; ?>
                                                    <?php if( !empty($url) && !empty($button_name) ): ?>
                                                        <div class="banner-btn"> 
                                                            <a href="<?php echo esc_attr($url); ?>" class="button-link"><?php echo esc_html($button_name); ?></a>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                
                            <!-- Mobile Version -->
                            <div class="swiper mySwiper mySwiper-frontpage mySwiper-frontpage-mobile mob-vers">
                                <div class="swiper-wrapper">
                                    <?php while( have_rows('banner_rd-repeater') ): the_row(); ?>
                                        <?php 
                                            $title = get_sub_field('title');
                                            $subtitle = get_sub_field('subtitle');
                                            $url = get_sub_field('url'); // Anchor link
                                            $button_name = get_sub_field('button-name');
                                            $background_mobile = get_sub_field('background_image_mobile'); // Mobile background image
                                            $background_color_mobile = get_sub_field('background_color_mobile'); // Mobile background color
                                        ?>
                                        <div class="content-center swiper-slide" 
                                             style="<?php if( $background_color_mobile ): ?>background: <?php echo esc_attr($background_color_mobile); ?>;<?php endif; ?>">
                                             <a href="<?php echo esc_attr($url); ?>" class="clickable-box"> </a>
                                            <!-- Background Image Overlay -->
                                            <?php if( $background_mobile ): ?>
                                                <div class="background-image-overlay" 
                                                     style="background-image: url('<?php echo esc_url($background_mobile); ?>');">
                                                </div>
                                            <?php endif; ?>
                
                                            <!-- Content -->
                                            <?php if( $title || $subtitle || ( !empty($url) && !empty($button_name) ) ): ?>
                                                <div class="content-wrapper">
                                                    <?php if( $title ): ?>
                                                        <h2><?php echo esc_html($title); ?></h2>
                                                    <?php endif; ?>
                                                    <?php if( $subtitle ): ?>
                                                        <h3><?php echo esc_html($subtitle); ?></h3>
                                                    <?php endif; ?>
                                                    <?php if( !empty($url) && !empty($button_name) ): ?>
                                                        <div class="banner-btn"> 
                                                            <a href="<?php echo esc_attr($url); ?>" class="button-link"><?php echo esc_html($button_name); ?></a>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                
                <?php if (!get_field('under-banner-one')['disable_section'] ?? false): ?>
                <div class="over-banner-certifications over-banner-certifications-one">
                    <div class="container">
                        <div class="over-banner-certifications">
                            
                            <div class="icon-svg">
                            </div>
                            
                            <div class="text">
                                    <h3><?php echo wp_kses_post(get_field('under-banner-one')['bold_text']); ?></h3>
                                    <h4><?php echo wp_kses_post(get_field('under-banner-one')['normal_text']); ?></h4>
                            </div>
                
                            <div class="btn-btn-btn"> 
                                    <a href="<?php echo ( get_field('under-banner-one')['url'] );?>"><?php echo ( get_field('under-banner-one')['button_name'] );?></a>
    						</div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!get_field('shopware-sertifications')['disable_section'] ?? false): ?>
                <div class="over-banner-certifications">
                    <div class="container">
                        <div class="partnership-certifications-wrapper">
                            <div class="partnership">
                                <?php if( !empty(get_field('shopware-sertifications')['title']) ): ?>
                                    <div class="title">
                                        <h3><?php echo wp_kses_post(get_field('shopware-sertifications')['title-up']); ?></h3>
                                        <h4><?php echo wp_kses_post(get_field('shopware-sertifications')['title']); ?></h4>
                                    </div>
                                <?php endif; ?>
                            </div>
                
                            <div class="certifications">
                                <div class="imgs">
                                    <?php if( !empty(get_field('shopware-sertifications')['icon3']) ): ?>
                                        <img src="<?php echo esc_url(get_field('shopware-sertifications')['icon3']); ?>" alt="icon" width="50" height="28">
                                    <?php endif; ?>
                
                                    <?php if( !empty(get_field('shopware-sertifications')['icon4']) ): ?>
                                        <img src="<?php echo esc_url(get_field('shopware-sertifications')['icon4']); ?>" alt="icon" width="50" height="28">
                                    <?php endif; ?>
                
                                    <?php if( !empty(get_field('shopware-sertifications')['icon5']) ): ?>
                                        <img src="<?php echo esc_url(get_field('shopware-sertifications')['icon5']); ?>" alt="icon" width="50" height="28">
                                    <?php endif; ?>
                                    <?php if( !empty(get_field('shopware-sertifications')['icon6']) ): ?>
                                        <img src="<?php echo esc_url(get_field('shopware-sertifications')['icon6']); ?>" alt="icon" width="50" height="28">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
       
              <!--  <div class="banner-wrapper-redesign">-->
              <!--      <div class="container">-->
              <!--          <div class="row">-->
              <!--              <div class="col-md-12 col-xl-12 content-center">-->
              <!--              <h1><?php echo ( get_field('banner-rd')['title'] );?></h1>-->
              <!--              <h2><?php echo ( get_field('banner-rd')['subtitle'] );?></h2>-->
        						<!--<div class="banner-btn"> -->
              <!--                          <a href="<?php echo ( get_field('banner-rd')['url'] );?>"><?php echo ( get_field('banner-rd')['button-name'] );?></a>-->
        						<!--</div>-->
              <!--              </div>-->
              <!--          </div>-->
              <!--      </div>-->
              <!--  </div>-->
	
				 <div class="blogs-wrapper-redesign blogs-wrapper-top">
                    <div class="container">
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
                                <div class="boxes box-three">
                                    <img src="<?php echo ( get_field('our-services-rd')['services-icon4'] );?>" alt="icon" width="30" height="30">
                                    <h3><?php echo ( get_field('our-services-rd')['title-services4'] );?></h3>
                                    <p><?php echo ( get_field('our-services-rd')['subtitle-services4'] );?></p>
                                </div>
                            </div>
                        </div>
						
						<div class="action-black">

                         <?php the_field('action-black');?> 
                         
                    </div>
						
					 </div>
				</div>

                <div class="blogs-wrapper-redesign blogs-wrapper-top">
                    <div class="container">
                        
                       

              <div class="reference-wrapper-rd use-cases-wrapper-redesign">
                <div class="container">
                    <h3 class="use-cases-stitle"><?php the_field('title-section-use-cases'); ?></h3>
                    <?php 
                    // Polylang function to get the current language
                    $current_language = pll_current_language();
            
                    // Set the page ID based on the current language
                    if ($current_language === 'de') {
                        $reference_page_id = 12908; // German references page ID
                    } else {
                        $reference_page_id = 12967; // English references page ID
                    }
            
                    if (have_rows('use_cases_rdd', $reference_page_id)):
                        $layout_count = 0; // Counter to limit the number of layouts shown
            
                        while (have_rows('use_cases_rdd', $reference_page_id) && $layout_count < 6): the_row(); 
                            if (have_rows('layout_type')):
                                while (have_rows('layout_type')): the_row();
                                    // Increment layout count
                                    $layout_count++;
                                    if ($layout_count > 6) break;
            
                                    // Fetch background gradient, display type, and content color
                                    $background_gradient = get_sub_field('background_gradient');
                                    $content_color = get_sub_field('content_color');
                                    $display_type = get_sub_field('display_type');
                                    $width_type = get_sub_field('width_type');
                                ?>
            
                                    <?php if (get_row_layout() == 'one_rows'): ?>
                                        <div class="layout-w-one layouts">
                                            <div class="col box<?php echo esc_attr($layout_count); ?>" 
                                                 style="background: <?php echo esc_attr($background_gradient); ?>;">
                                                <div class="content <?php echo esc_attr($content_color); ?>">
                                                    <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
                                                    <h4><?php echo esc_html(get_sub_field('content')); ?></h4>
                                                    <p><?php echo esc_html(get_sub_field('content-more')); ?></p>
                                                </div>
                                                <div class="img <?php echo esc_attr($display_type); ?> <?php echo esc_attr($width_type); ?>">
                                                    <img src="<?php echo esc_url(get_sub_field('image')); ?>" alt="icon">
                                                </div>
                                            </div>
                                        </div>
                                    <?php elseif (get_row_layout() == 'two_rows'): ?>
                                        <div class="layout-w-two layouts">
                                            <div class="col box<?php echo esc_attr($layout_count . '-1'); ?>" 
                                                 style="background: <?php echo esc_attr(get_sub_field('background_gradient1')); ?>;">
                                                <div class="img <?php echo esc_attr(get_sub_field('display_type1')); ?> <?php echo esc_attr(get_sub_field('width_type1')); ?>">
                                                    <img src="<?php echo esc_url(get_sub_field('image1')); ?>" alt="icon">
                                                </div>
                                                <div class="content <?php echo esc_attr(get_sub_field('content_color1')); ?>">
                                                    <h3><?php echo esc_html(get_sub_field('title1')); ?></h3>
                                                    <h4><?php echo esc_html(get_sub_field('content1')); ?></h4>
                                                    <p><?php echo esc_html(get_sub_field('content-more1')); ?></p>
                                                </div>
                                            </div>
                                            <div class="col box<?php echo esc_attr($layout_count . '-2'); ?>" 
                                                 style="background: <?php echo esc_attr(get_sub_field('background_gradient2')); ?>;">
                                                <div class="img <?php echo esc_attr(get_sub_field('display_type2')); ?> <?php echo esc_attr(get_sub_field('width_type2')); ?>">
                                                    <img src="<?php echo esc_url(get_sub_field('image2')); ?>" alt="icon">
                                                </div>
                                                <div class="content <?php echo esc_attr(get_sub_field('content_color2')); ?>">
                                                    <h3><?php echo esc_html(get_sub_field('title2')); ?></h3>
                                                    <h4><?php echo esc_html(get_sub_field('content2')); ?></h4>
                                                    <p><?php echo esc_html(get_sub_field('content-more2')); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    
                                <?php endwhile; ?>
                            <?php endif; ?>
                            
                        <?php endwhile; ?>
                    <?php else: ?>
                        <!-- No layouts found -->
                    <?php endif; ?>
                </div>
				  
            </div>





 <div class="blogs-wrapper-redesign blogs-wrapper-redesign-bottom">
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
</div>
 </div>


<div class="container">
    
    
    <div class="meet-our-core-team" >
            <div class="title">
                <?php the_field('action-title');?> 
            </div>
            <div class="action-black action-black-bottom">
                <?php the_field('action-black');?> 
            </div>
            <div class="action-team"><img src="<?php the_field('action-team');?>" alt="icon"></div>
    </div>
    
</div>

              


</main>

<?php include("includes/footer2.php");  ?>
