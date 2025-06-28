<?php 

get_header(); 

$plugin_card = get_field('plugin_card'); // Fetch the entire group
?>

<div class="plugin_section-single">
    <div class="container">
        <section class="plugin_section-single-card" aria-label="Plugin Details">
            <div class="plugin-card">

                <div class="plugin-card-lefts">
                    <?php if (!empty($plugin_card['plugin_image'])): ?>
                        <div class="plugin-image">
                            <img src="<?php echo esc_url($plugin_card['plugin_image']); ?>" alt="<?php the_title(); ?>">
                        </div>
                    <?php endif; ?>
                    <div class="plugin-info">
                        <h3><?php the_title(); ?></h3> 
                        <p>
                            <?php if (!empty($plugin_card['plugin_author'])): ?>
                                <?php echo wp_kses_post($plugin_card['plugin_author']); ?>
                                <?php echo ' | '; // Only show the pipe if author is filled ?>
                            <?php endif; ?>
                            <?php echo !empty($plugin_card['plugin_compatibility_label']) ? esc_html($plugin_card['plugin_compatibility_label']) : 'Compatible'; ?>
                            <strong>
                                <?php 
                                // Fetch assigned terms for 'tabs' taxonomy
                                $terms = get_the_terms(get_the_ID(), 'custom_taxonomy_plugin'); // Make sure it's your correct taxonomy
                                if ($terms && !is_wp_error($terms)) {
                                    $term_names = wp_list_pluck($terms, 'name');
                                    echo esc_html(implode(', ', $term_names)); // Display terms as comma-separated list
                                } else {
                                    echo 'No category assigned';
                                }
                                ?>
                            </strong>
                        </p>
                    </div>
                </div>
                <div class="plugin-card-rights">
                    <div class="plugin-buttons">
                        <?php if (!empty($plugin_card['shopware_store_url']) && !empty($plugin_card['shopware_button_text'])): ?>
                            <a href="<?php echo esc_url($plugin_card['shopware_store_url']); ?>" class="btn-primary" target="_blank" rel="noopener"><?php echo esc_html($plugin_card['shopware_button_text']); ?></a>
                        <?php endif; ?>
                        <?php if (!empty($plugin_card['github_repo_url'])): ?>
                            <a href="<?php echo esc_url($plugin_card['github_repo_url']); ?>" class="btn-icon" target="_blank" rel="noopener">
                                <i class="fab-fa-github"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="plugin_section-single-sideres">
            <?php
            function have_h2_headings() {
                global $post;
                $content = $post->post_content;
                return strpos($content, '<h2>') !== false;
            }
            $rights_content = get_the_content();
            ?>
            <div class="row">
                <?php if (!empty($rights_content)) : ?>
                    <div class="lefts col-lg-3">
                        <div class="sticky-table">

                            <?php if (have_h2_headings()) : ?>
                                <div class="ups">
                                    <div class="title-box"><?php echo pll__('Include in'); ?></div>
                                </div>
                            <?php endif; ?>
                            <?php if (!wp_is_mobile()) { ?>
                                <div class="downs">
                                    <div class="plugin-image">
                                        <?php if (!empty($plugin_card['plugin_image'])): ?>
                                            <img src="<?php echo esc_url($plugin_card['plugin_image']); ?>" alt="<?php the_title(); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="plugin-title">
                                        <h3><?php the_title(); ?></h3> 
                                    </div>
                                    <div class="plugin-info">
                                        <p>
                                            <span class="span-one"><?php echo !empty($plugin_card['plugin_compatibility_label']) ? esc_html($plugin_card['plugin_compatibility_label']) : 'Compatible'; ?>
                                            <strong>
                                                <?php 
                                                // Fetch assigned terms for 'tabs' taxonomy
                                                $terms = get_the_terms(get_the_ID(), 'custom_taxonomy_plugin'); // Make sure it's your correct taxonomy
                                                if ($terms && !is_wp_error($terms)) {
                                                    $term_names = wp_list_pluck($terms, 'name');
                                                    echo esc_html(implode(', ', $term_names)); // Display terms as comma-separated list
                                                }
                                                ?>
                                            </strong>
                                            </span>
                                            <span class="span-two">
                                            <?php if (!empty($plugin_card['plugin_author'])): ?>
                                                <?php echo wp_kses_post($plugin_card['plugin_author']); ?>
                                            <?php endif; ?>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="plugin-buttons">
                                        <?php if (!empty($plugin_card['shopware_store_url']) && !empty($plugin_card['shopware_button_text'])): ?>
                                            <a href="<?php echo esc_url($plugin_card['shopware_store_url']); ?>" class="btn-primary" target="_blank" rel="noopener"><?php echo esc_html($plugin_card['shopware_button_text']); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="rights col-lg-9">

                <?php if (have_rows('plugin_images')) : ?>
                    <div class="gallery-plugin">
                        <div class="swiper mySwiper-single-gallery">
                            <div class="swiper-wrapper">
                                <?php 
                                $has_images = false; // Flag to check if there are images
                                while (have_rows('plugin_images')) : the_row(); 
                                    $image = get_sub_field('image');

                                    if (!empty($image)) : 
                                        $has_images = true; // Set flag to true if an image is found
                                ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo esc_url($image); ?>" alt="">
                                    </div>
                                <?php endif; ?>
                                <?php endwhile; ?>

                                <?php if (!$has_images) : // If no images were added, do not display the gallery ?>
                                    <p>No images available.</p>
                                <?php endif; ?>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                <?php endif; ?>

                    <?php the_content(); ?>

					<div class="custom-comments">
                    <?php
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                    ?>
                    </div>
					
                </div>
        </section>

        <section class="plugin_section-single-related">
            <h4 class="related-plugins-title"><?php echo pll__('Related Plugins'); ?></h4>
            <div class="row">
                <?php
                // Query related posts from the same post type
                $args = array(
                    'post_type' => 'plugin-landingpage',
                    'posts_per_page' => 3, // Display 3 related posts, adjust as needed
                    'order' => 'ASC',
                    'post__not_in' => array(get_the_ID()), // Exclude the current post
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post();
                ?>
                    <div class="col-lg-4 col-md-12 col-sm-12 scale-box">
                        <a href="<?php the_permalink(); ?>">
                            <div class="img">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <!--<span><?php echo get_the_date(); ?></span>-->
                            <h3><?php the_title(); ?></h3>
                        </a>

                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata(); // Reset post data after the loop
                else :
                    echo '<p>No related blogs found.</p>';
                endif;
                ?>
            </div>
        </section>

    </div>
    <?php if (wp_is_mobile()) { ?>
        <div class="plugin_section-single-sideres">
        <div class="lefts">
            <div class="sticky-table">
                <div class="downs mobile-fixed">
                    <div class="plugin-image">
                        <?php if (!empty($plugin_card['plugin_image'])): ?>
                            <img src="<?php echo esc_url($plugin_card['plugin_image']); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="title-position">
                        <div class="plugin-title">
                            <h3><?php the_title(); ?></h3> 
                        </div>
                        <div class="plugin-info">
                            <p>
                                <span class="span-one"><?php echo !empty($plugin_card['plugin_compatibility_label']) ? esc_html($plugin_card['plugin_compatibility_label']) : 'Compatible'; ?>
                                <strong>
                                    <?php 
                                    // Fetch assigned terms for 'tabs' taxonomy
                                    $terms = get_the_terms(get_the_ID(), 'custom_taxonomy_plugin'); // Make sure it's your correct taxonomy
                                    if ($terms && !is_wp_error($terms)) {
                                        $term_names = wp_list_pluck($terms, 'name');
                                        echo esc_html(implode(', ', $term_names)); // Display terms as comma-separated list
                                    }
                                    ?>
                                </strong>
                                </span>
                                <span class="span-two">
                                <?php if (!empty($plugin_card['plugin_author'])): ?>
                                    <?php echo wp_kses_post($plugin_card['plugin_author']); ?>
                                <?php endif; ?>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="plugin-buttons">
                        <?php if (!empty($plugin_card['shopware_store_url']) && !empty($plugin_card['shopware_button_text-mob'])): ?>
                            <a href="<?php echo esc_url($plugin_card['shopware_store_url']); ?>" class="btn-primary" target="_blank" rel="noopener"><?php echo esc_html($plugin_card['shopware_button_text-mob']); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
	<?php include("includes/footer2.php");  ?>

