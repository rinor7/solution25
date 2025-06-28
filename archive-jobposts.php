<?php 
get_header(); 
?>

   

<section class="unsere_jobs archive-jobposts" id="job">
    <div class="container">
        <div class="title-sub">
            <h1><?php the_field('title-job'); ?></h1>
            <h2><?php the_field('subtitle-job'); ?></h2>
        </div>
        <nav>
        <h3><?php the_field('allcategoriestab'); ?></h3>

        <ul class="nav nav-tabs1" id="nav-tab" role="tablist">
            <?php
            $terms = get_terms('jobposts_cat');
            $count = 0;
            foreach ($terms as $term) {
            $term_obj = get_term($term->term_id, 'jobposts_cat'); // Get the term object
            $description = $term_obj->description;
            $post_count = new WP_Query(array(
                'post_type' => 'jobposts',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'jobposts_cat',
                        'field' => 'term_id',
                        'terms' => $term->term_id,
                        
                    ),
                ),
                'posts_per_page' => -1, // Get all posts
                'fields' => 'ids', // Only return post IDs
                
            ));
            ?>
            <li class="nav-item">
                <a class="nav-link <?php echo $count == 0 ? 'active' : ''?>" data-toggle="tab" href='#<?php echo $term->slug;?>' id="<?php echo $term->slug;?>-tab" role="tab" aria-controls="<?php echo $term->slug;?>" aria-selected="true">
                    <?php echo $term->name; ?> (<?php echo $post_count->post_count; ?>)
                </a>
            </li>
            <?php
            $count++;
            }
            ?>  
            </ul>
        </nav>
 
        <div class="row">
            <div class="col-12"> 
                <div class="tab-content">
                        <?php $terms = get_terms('jobposts_cat'); 
                        $count = 0;
                        foreach($terms as $term): 
                        ?>
                            <div class="tab-pane fade <?php echo $count == 0 ? 'active show' : ''?>" id="<?php echo $term->slug;?>" role="tabpanel" aria-labelledby="<?php echo $term->slug;?>-tab">
                                <div class="all">
                                    <?php
                                    $args = array(
                                    'post_type' => 'jobposts',
                                    'posts_per_page' => '-1',
                                    'order' => 'ASC',
                                    'jobposts_cat' => $term->slug,
                                    );
                                    $loop = new WP_Query($args);
                                    while($loop->have_posts()):
                                    $loop->the_post();
                                    ?>
                                    <div class="accordion">
                                        <div class="head">
                                            <div class="head-title">
                                                <div class="leftside-content">
                                                <span><?php the_title(); ?></span>
                                                <div class="three-undertitle">
                                                    <?php if (get_field('jobdepartment')) : ?>
                                                        <pre class="position"><?php the_field('jobdepartment'); ?></pre>
                                                    <?php endif; ?>
                                                    <?php if (get_field('jobtype')) : ?>
                                                        <pre class="position"><?php the_field('jobtype'); ?></pre>
                                                    <?php endif; ?>
                                                    <?php if (get_field('experience')) : ?>
                                                        <pre class="position"><?php the_field('experience'); ?></pre>
                                                    <?php endif; ?>
                                                </div>

                                                </div>
                                                <a class="" href="<?php the_permalink();?>">Apply now!</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile;
                                    wp_reset_postdata();
                                    ?>
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


<?php get_footer(); ?>