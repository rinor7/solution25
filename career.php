<?php 
/*
* Template Name: Career Page
*/
get_header(); 
?>

<div class="work">
    <div class="container">
        <div class="work__wrapper">
            <div class="work__content">
                <!-- <h1 class="work__subtitle"><?php echo ( get_field('hero_section')['subtitle'] );?></h1> -->
                <h2 class="work__title"><?php echo ( get_field('hero_section')['title'] );?></h2>
                <p class="work__text"><?php echo ( get_field('hero_section')['text'] );?></p>
                <button class="work__button"><a href="#job"><?php echo ( get_field('hero_section')['button_text'] );?></a></button>
            </div>
            <div class="work__image">
                <img src="<?php echo ( get_field('hero_section')['image'] );?>" />
                <!-- <img src="<?php echo ( get_field('hero_section')['imagemob'] );?>" /> -->
            </div>
        </div>
    </div>
</div>

<div class="more more-c">
    <div class="container">
        <div class="row">
            <div class="more__image col-lg-6">
                <img src="<?php echo ( get_field('more_section')['image'] );?>" />
            </div>
            <div class="more__content col-lg-6">
                <h2 class="more__content-title"><?php echo ( get_field('more_section')['title'] );?></h2>
                <p class="more__content-text"><?php echo ( get_field('more_section')['text'] );?></p>
                <a class="more__content-link" href="https://solution25.com/ueber-uns/"><?php echo ( get_field('more_section')['button_text'] );?></a>
            </div>
        </div>
    </div>
</div>


<div class="benefits benefits-c">
    <div class="container">
        <div class="row" >
            
            <div class="benefits__title col-lg-4">
            <h2 class="benefits__title"><?php echo ( get_field('benefit_section')['title'] );?></h2>
            <p class="benefits__text"><?php echo ( get_field('benefit_section')['text'] );?></p>
            </div>

            <div class="benefits__content col-lg-8">
            <div class="row">
            <?php
                if( have_rows('benefit_section') ):
                    while ( have_rows('benefit_section') ) : the_row();
                        $i = 1;
                        
                        if( have_rows('benefits') ):
                            ?>
                                <?php
                                while( have_rows('benefits') ): the_row();
                                ?>
                                    <div class="benefits__content-box col-lg-6">
                                        <h2><img src="<?php the_sub_field('image'); ?>" /><?php the_sub_field('title'); ?></h2>
                                        <p><?php the_sub_field('text'); ?></p>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                ?>
                        <?php
                        endif;
                    endwhile;
                endif;
            ?>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="about about-c">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
            <h2 class="about__title"><?php echo ( get_field('we_are')['title'] );?></h2>
            <p class="about__text"><?php echo ( get_field('we_are')['text'] );?></p>
            </div>
            <div class="col-lg-8">
        <div class="about__wrapper">
            <?php
                if( have_rows('we_are') ):
                    while ( have_rows('we_are') ) : the_row();
                        $i = 1;
                        
                        if( have_rows('teams') ):
                            ?>
                                <?php
                                while( have_rows('teams') ): the_row();
                                ?>
                                    <div class="about__box">
                                        <div class="about__box-img">
                                            <img src="<?php the_sub_field('image'); ?>" />
                                        </div>
                                        <h2 class="about__box-title"><?php the_sub_field('text'); ?></h2>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                ?>
                        <?php
                        endif;
                    endwhile;
                endif;
            ?>
            <button class="scrollTolink">
                <a href="#job">
                <div class="about__box about__box--color">
                    <div class="about__box-img">
                        <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/arrow-right.png" />
                    </div>
                    <h2 class="about__box-title"><?php echo ( get_field('we_are')['link-textt'] );?></h2>
                </div>
                </a>
            </button>
        </div>
        </div>
        </div>
    </div>
</div>



<?php include("includes/team-slider.php"); ?>



<section class="unsere_jobs" id="job">
    <div class="container">
        <div class="title-sub">
            <h1><?php the_field('title-job'); ?></h1>
            <h2><?php the_field('subtitle-job'); ?></h2>
        </div>
        <nav>
       <h3 id="active-category-name"></h3>

        <ul class="nav nav-tabs1" id="nav-tab" role="tablist">
            <?php $terms_args = array(
                'taxonomy' => 'jobposts_cat',
                // 'orderby' => 'name',
                // 'orderby' => 'post_date',
                // 'order' => 'DESC',
                'hide_empty' => true,
            );

            $terms = get_terms( $terms_args );

            // Find the "All Departments" term and move it to the beginning of the array
            foreach ( $terms as $key => $term ) {
                if ( $term->name == 'All Departments' ) {
                    unset( $terms[$key] );
                    array_unshift( $terms, $term );
                    break;
                }
            }

            $count = 0;
            foreach ( $terms as $term ) {
                $term_obj = get_term( $term->term_id, 'jobposts_cat' );
                $description = $term_obj->description;
                $post_count = new WP_Query( array(
                    'post_type'      => 'jobposts',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'jobposts_cat',
                            'field'    => 'term_id',
                            'terms'    => $term->term_id,
                        ),
                    ),
                    'posts_per_page' => -1,
                    
                    'fields'         => 'ids',
                ) );
                ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo $count == 0 ? 'active' : '' ?>"
                    data-toggle="tab"
                    href='#<?php echo $term->slug; ?>'
                    id="<?php echo $term->slug; ?>-tab"
                    role="tab"
                    aria-controls="<?php echo $term->slug; ?>"
                    aria-selected="true">
                        <?php echo $term->name; ?> (<?php echo $post_count->post_count; ?>)
                    </a>
                </li>
                <?php
                $count ++;
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
                                    'order' => 'DESC',
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



<?php include("includes/map-section.php"); ?>



<?php get_footer(); ?>