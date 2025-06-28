<?php 
get_header(); 
?>
    
    <div class="job"> 
    <div class="container job__container">
        <div class="job__wrapper">
            <div class="job__content">
                <!-- <p class="job__content-posted"><?php echo ( get_field('information_section')['posted'] );?></p> -->
                <p class="job__content-posted"><?php echo get_the_date('j F Y'); ?></p>

                <h1><?php the_title(); ?></h1>
                <div class="three-undertitle">
                    <?php if (get_field('jobdepartment')) : ?>
                        <div><img src="<?php echo get_bloginfo('template_directory')?>/dist/img/categories.svg" /><pre class="position"><?php the_field('jobdepartment'); ?></pre></div> 
                    <?php endif; ?>
                    <?php if (get_field('jobtype')) : ?>
                        
                        <div><img src="<?php echo get_bloginfo('template_directory')?>/dist/img/time.svg" /><pre class="position"><?php the_field('jobtype'); ?></pre></div> 
                    <?php endif; ?>
                    <?php if (get_field('experience')) : ?>
                        
                        <div><img src="<?php echo get_bloginfo('template_directory')?>/dist/img/volume.svg" /> <pre class="position"><?php the_field('experience'); ?></pre></div>  
                    <?php endif; ?>
                </div>
                

                <div class="title__changes">
                    <h2><?php echo ( get_field('info_section')['job_detail'] );?></h2>
                    <?php if ( get_field('info_section')['job_text'] ) : ?>
                        <p><?php echo ( get_field('info_section')['job_text'] );?></p>
                    <?php endif; ?>
                </div>

                <div class="job__content-description first__description">
                    <?php
                    if( have_rows('info_section') ):
                        while ( have_rows('info_section') ) : the_row();
                            $i = 1;
                            if( have_rows('about') ):
                                ?>
                                    <?php
                                    while( have_rows('about') ): the_row();
                                    ?>
                                        <div class="cont">
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

                

                <div class="title__changes">
                    <?php if ( get_field('info_section')['requirment_title'] ) : ?>
                        <h2><?php echo ( get_field('info_section')['requirment_title'] );?></h2>
                    <?php endif; ?>
                </div>


                
                <div class="job__content-description">
                    <div class="job__content-description-dots">
                        <?php
                            if( have_rows('info_section') ):
                                while ( have_rows('info_section') ) : the_row();
                                    $i = 1;
                                    
                                    if( have_rows('requirments') ):
                                        ?>
                                            <?php
                                            while( have_rows('requirments') ): the_row();
                                            ?>  
                                                <div class="cont">
                                                <?php if ( get_sub_field("text") ) : ?>
                                                    <p><?php the_sub_field('text'); ?></p>
                                                <?php endif; ?>
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

                <div class="job__content-cv">
                    <h2><?php echo ( get_field('info_section')['attention'] );?></h2>
                    <p class="first"><?php echo ( get_field('info_section')['attention_text'] );?></p>
                    <h3><?php echo ( get_field('info_section')['more'] );?></h3> 
                    <p><?php echo ( get_field('info_section')['more_text'] );?></p>
                    <div class="job__content-cv-us">
                        <h3><?php echo ( get_field('info_section')['name'] );?></h3>
                        <p><?php echo ( get_field('info_section')['text'] );?></p>
                        <p><?php echo ( get_field('info_section')['number'] );?></p>
                        <p><?php echo ( get_field('info_section')['email'] );?></p>
                    </div>
                </div>
            </div>
            <div class="job__form">
                <div class="job__form-wrapper">
                    <?php dynamic_sidebar('widget-6');?> 
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jobs">
    <div class="jobs__more">
        <div class="container">
            <div class="developers__box-accordion">
                <?php
                    if( have_rows('accordion_section') ):
                        while ( have_rows('accordion_section') ) : the_row();
                        $i = 1;
                        
                        if( have_rows('job') ):
                            ?>
                                    <?php
                                    while( have_rows('job') ): the_row();
                                    ?>
                                    <?php if (get_sub_field('heading')) : ?>
                                        <h2><?php the_sub_field('heading'); ?></h2>
                                    <?php endif;  ?>
                                            <div class="accordion">
                                                <div class="head">
                                                    <div class="head-title">
                                                        <span><?php the_sub_field('title'); ?></span>
                                                        <pre class="position"><?php the_sub_field('text'); ?></pre>
                                                        <a class="apply-mobile" href="<?php the_sub_field('link'); ?>">Apply now!</a>
                                                    </div>
                                                    <div>
                                                        <a class="apply-desktop" href="<?php the_sub_field('link'); ?>">Apply now!</a>
                                                        <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/down-arrow-black.svg" />
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <p><?php the_sub_field('dropdown'); ?></p>
                                                </div>
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


<?php include("includes/map-section.php"); ?>
  

<?php get_footer(); ?>