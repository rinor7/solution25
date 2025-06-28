<?php 
/*
* Template Name: NEW Plugin Landingpage
*/
get_header(); 
?>










                <div class="container">
                    <div class="banner-wrapper-redesign new-banner-wrapper-redesign">
                        
                            <div class="row">
                                <div class="col-md-12 col-xl-12 content-center">
                                <h1><?php the_field('title-new-banner'); ?></h1>
                                <p><?php the_field('subtitle-new-banner'); ?></p>
                                <div class="banner-btn"> 
                                    <a clas="call-to-action" href="<?php the_field('btn1url'); ?>">
                                        <?php the_field('btn1name'); ?>
                                    </a>
                                    <a class="phone-button" href="tel:<?php the_field('btn2url'); ?>">
                                        <?php the_field('btn2name'); ?>
                                    </a>
                                </div>
                                </div>

                                <div class="certificates-new">
                                    <?php echo ( get_field('banner-rd112')['certificates'] );?>
                                </div>
                            </div>





<div class="partners-plugin">
                <div class="wrapper">
                <?php
                if (have_rows('partners_plugin')): 
                    while (have_rows('partners_plugin')): the_row();
                        if (have_rows('partners_repeater')): 
                ?>
                        <div class="plugin-wrapper">
                            <?php 
                            $count = 0;
                            while (have_rows('partners_repeater')): the_row(); 
                                if ($count >= 6) break; // Stop after 6 items
                                $url = get_sub_field('image');
                                $imageID = attachment_url_to_postid($url);
                            ?>
                                <div class="plugin-box">
                                    <img src="<?php the_sub_field('image'); ?>" alt="<?= esc_attr(get_post_meta($imageID, '_wp_attachment_image_alt', true)); ?>">
                                </div>
                            <?php 
                                $count++;
                            endwhile; 
                            ?>
                        </div>
                <?php 
                        endif; 
                    endwhile; 
                endif;
                ?>

                </div>
            </div>


                    </div>
                </div>
   


<div class="container">
    <?php 
// Get custom fields
$section_title = get_field('section_title_plugin');
$section_text = get_field('section_text_plugin');

// Only display the section if the title is filled
if ($section_title): ?>
    <div class="custom-section_plugin">
        <h4><?php echo esc_html($section_title); ?></h4>
        <?php if ($section_text): ?>
            <p><?php echo esc_html($section_text); ?></p>
        <?php endif; ?>
    </div>
<?php endif; ?>
</div>





<section class="plugin_section-new" aria-label="Plugin Landingpage">
    <div class="container">
        <div class="title">
            <h3><?php the_field('title-main-section'); ?></h3>
        </div>
        <div class="row">
        <?php
        $args = array(
            'post_type'      => 'plugin-landingpage',
            'posts_per_page' => -1,
            'order'          => 'ASC',
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()):
            $loop->the_post();

            // Get the ACF image field
            $image = get_field('image-new-feat');

            // Set default image URL if the field is empty
            $default_image = get_template_directory_uri() . '/dist/img/Logo.png'; // Change to your media URL

            // Use the default image if the custom field is empty
            $image_url = !empty($image) ? $image : $default_image;
        ?>
            <div class="col-lg-3 col-md-6 col-sm-6 scale-box-new">
                <a href="<?php the_permalink(); ?>">
                    <div class="inner">
                        <div class="img-new">
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                        </div>
                        <h4><?php the_title(); ?></h4>
                        <span class="paragraph"><?php the_field('short-description'); ?></span>
                        <p class="learn-more"><?php echo pll__('Learn More'); ?></p>
                    </div>
                </a>
            </div>
        <?php endwhile;
        wp_reset_postdata();
        ?>
        </div>          
    </div>                          
</section>



<?php if (get_field('show_content_with_tables')) : ?>
        <section class="content-with-table">
            <div class="container">
                <div class="row">
                    <?php 
                    $raw_content = get_field('content_with_table_text');
                    $headings = extract_h2_headings($raw_content);
                    $content_with_ids = add_anchor_to_headings($raw_content);
                    ?>
                    <div class="rights content-rightside col-lg-8">
                        <?php echo $content_with_ids; ?>
                    </div>
                    <?php if (!empty($headings)) : ?>
                        <div class="lefts sidebar-leftside col-lg-4">
                            <div class="sticky-table">
								
								<?php
                                $title = get_field('downside_title');
                                $desc = get_field('downside_desc');
                                $btn = get_field('downside_btn');
                                $url = get_field('downside_url');
                                ?>

                                <?php if ($title || $desc || ($btn && $url)) : ?>
                                    <div class="downside">
                                        <?php if ($title): ?>
                                            <h3><?php echo esc_html($title); ?></h3>
                                        <?php endif; ?>

                                        <?php if ($desc): ?>
                                            <p><?php echo esc_html($desc); ?></p>
                                        <?php endif; ?>

                                        <?php if ($btn && $url): ?>
                                            <a href="<?php echo esc_url($url); ?>" class="btn"><?php echo esc_html($btn); ?></a>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <div class="upside">
                                    <?php if ($table_title = get_field('table_title')): ?>
                                        <div class="title-box"><?php echo esc_html($table_title); ?></div>
                                    <?php endif; ?>
									
									<ul class="toc-list">
										<?php foreach ($headings as $index => $heading) : ?>
										<li>
											<a href="#heading-<?php echo $index + 1; ?>">
												<?php echo esc_html(strip_tags($heading)); ?>
											</a>
										</li>
										<?php endforeach; ?>
									</ul>
                                </div>
                                
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>



<?php 
// Define static page IDs for homepages in different languages
$home_page_en_id = 15283; // Replace with the actual English home page ID
$home_page_de_id = 12375; // Replace with the actual German home page ID

// Detect the current language and set the correct page ID
$current_lang = pll_current_language();
$home_page_id = ($current_lang === 'de') ? $home_page_de_id : $home_page_en_id;
?>

<div class="container">
    <div class="meet-our-core-team">
        <div class="title">
            <?php the_field('action-title', $home_page_id); ?>
        </div>
        <div class="action-black action-black-bottom">
            <?php the_field('action-black', $home_page_id); ?>
        </div>
        <div class="action-team">
            <img src="<?php the_field('action-team', $home_page_id); ?>" alt="icon">
        </div>
    </div>
</div>


<?php include("includes/footer2.php");  ?>
