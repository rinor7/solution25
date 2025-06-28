<?php 
/*
* Template Name: Reference RD
*/
get_header(); 
?>

    <div class="reference-page-rd">
        <div class="container">
        <div class="title-section">
            <h2><?php the_field('title'); ?></h2>
            <pre><?php the_field('text'); ?></pre>
        </div>
        </div>
    </div>

    <div class="reference-wrapper-rd">
    <div class="container">
        <?php if (have_rows('use_cases_rdd')): ?>
            <?php 
                $row_index = 0; // Initialize a counter for the rows
                while (have_rows('use_cases_rdd')): the_row(); 
                $row_index++; // Increment the row index
            ?>
                <?php if (have_rows('layout_type')): ?>
                    <?php 
                        $col_index = 0; // Initialize a column counter for each layout type
                        while (have_rows('layout_type')): the_row(); 
                        $col_index++; // Increment the column index
                        
                        // Fetch background gradient, display type, and content color
                        $background_gradient = get_sub_field('background_gradient');
                        $content_color = get_sub_field('content_color'); // 'black' or 'white'
                        $display_type = get_sub_field('display_type'); // 'logo_type' or 'background_type'
                        $width_type = get_sub_field('width_type');
                    ?>
                        <?php if (get_row_layout() == 'one_rows'): ?>
                            <div class="layout-w-one layouts">
                                <div class="col box<?php echo esc_attr($row_index . '-' . $col_index); ?>" 
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
                                <div class="col box<?php echo esc_attr($row_index . '-1'); ?>" 
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
                                <div class="col box<?php echo esc_attr($row_index . '-2'); ?>" 
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
            <!-- No rows found -->
        <?php endif; ?>
    </div>
</div>




        <?php include("includes/footer2.php");  ?>

