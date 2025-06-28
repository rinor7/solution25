<?php 
/*
* Template Name: Plugin Landingpage
*/
get_header(); 
?>

<section class="plugin_section" aria-label="Plugin Landingpage">
    <div class="container">
        <div class="main-plugin-heading">
            <h2><?php echo the_field('title'); ?></h2>
            <p><?php echo the_field('subtitle'); ?></p>
        </div>
        <div class="tab">
            <!-- All Tab -->
            <nav>
                <ul class="nav nav-tabs1" id="nav-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link btn-s active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
                    </li>
                    <?php 
                    $args = array(
                        'orderby' => 'ID',
                        'order' => 'DESC' 
                    );
                    $terms = get_terms('custom_taxonomy_plugin', $args);   
                    $count = 0;
                    foreach($terms as $term) { 
                    ?>
                    <li class="nav-item">
                        <a class="nav-link btn-s <?php echo $count == 0 ? '' : ''?>" data-toggle="tab" href="#<?php echo $term->slug;?>" id="<?php echo $term->slug;?>-tab" role="tab" aria-controls="<?php echo $term->slug;?>" aria-selected="true">
                            <?php echo $term->name; ?>
                        </a>
                    </li>
                    <?php
                        $count++; 
                    }  
                    ?>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="tab-content">
                    <!-- All Tab Content -->
                    <div class="tab-pane fade active show" id="all" role="tabpanel" aria-labelledby="all-tab">
                        <div class="all">
                            <div class="row">
                                <?php
                                $args = array(
                                    'post_type' => 'plugin-landingpage',
                                    'posts_per_page' => -1,
                                    'order' => 'ASC',
                                );
                                $loop = new WP_Query($args);
                                while($loop->have_posts()):
                                    $loop->the_post();
                                ?>
                                    <div class="col-lg-4 col-md-6 col-sm-6 scale-box">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="img">
                                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                                            </div>
                                            <span><?php echo get_the_date(); ?></span>
                                            <h3><?php the_title(); ?></h3>
                                        </a>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- Term Tab Content (for each term) -->
                    <?php 
                        $terms = get_terms('custom_taxonomy_plugin', $args); 
                        $count = 0;
                        foreach($terms as $term): 
                        ?>
                        <div class="tab-pane fade <?php echo $count == 0 ? '' : ''?>" id="<?php echo $term->slug;?>" role="tabpanel" aria-labelledby="<?php echo $term->slug;?>-tab">
                            <div class="all">
                                <div class="row">
                                    <?php
                                    $args = array(
                                        'post_type' => 'plugin-landingpage',
                                        'posts_per_page' => -1,
                                        'order' => 'ASC',
                                        'custom_taxonomy_plugin' => $term->slug,
                                    );
                                    $loop = new WP_Query($args);
                                    while($loop->have_posts()):
                                        $loop->the_post();
                                    ?>
                                    <div class="col-lg-4 col-md-6 col-sm-6 scale-box">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="img">
                                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                                            </div>
                                            <span><?php echo get_the_date(); ?></span>
                                            <h3><?php the_title(); ?></h3>
                                        </a>
                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php 
                        $count++;
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("includes/footer2.php");  ?>

