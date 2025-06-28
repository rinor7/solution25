<?php 
/*
* Template Name: Dedicated Team
*/
get_header(); 
?>
    <div class="new-home-banner">
        <video autoplay="" loop="" muted="" playsinline="">
            <source src="https://solution25.com/wp-content/uploads/2022/02/Solution-25-video-bw.mp4" type="video/mp4">
        </video>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="new-home-banner-text">
                        <h1><?php echo ( get_field('banner')['title'] );?></h1>
                        <a href="tel:0421 438 1919-0" class="btn btn-white"> <?php echo ( get_field('banner')['button_text'] );?></a>
                        <a href="mailto:info@solution25.com" class="btn-text"><?php echo ( get_field('banner')['link_text'] );?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="new-parners-container">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/Adobe.svg" alt="Adobe">
                </div>
                <div class="col-md-2">
                    <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/Shopify 1.svg" alt="Shopify">
                </div>
                <div class="col-md-2">
                    <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/Shopware1.svg" alt="Shopware">
                </div>
                <div class="col-md-2">
                    <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/Handlerbund Partner1.svg" alt="Handlerbund Partner">
                </div>
                <div class="col-md-2">
                    <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/Maxcluster1.svg" alt="Maxcluster">
                </div>
                <div class="col-md-2">
                    <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/DigitalOcean1.svg" alt="Digital Ocean">
                </div>
            </div>
        </div>
    </div>
    <div class="new-home-projects">
        <h2><?php echo ( get_field('reviews')['title'] );?></h2>
        <pre><?php echo ( get_field('reviews')['text'] );?></pre>
        <div class="container">
            <?
                if( have_rows('reviews') ): 
                    while ( have_rows('reviews') ) : the_row(); 
                    
                        if( have_rows('reviews_repeater') ): 
                ?>
                    <div class="row">
                        <?php 
                            while( have_rows('reviews_repeater') ): the_row(); 
                        ?>
                            <div class="col-lg-4">
                                <div class="new-projects-box">
                                    <pre><?php the_sub_field('text'); ?></pre>
                                    <img src="<?php the_sub_field('image'); ?>" alt="Serviceplan">
                                </div>
                            </div>
                        <?php 
                            endwhile;
                        ?>
                    </div>
			        <!-- <div class="services-arrows">
                    <div class="services-arrow-prev"><i class="feather-chevron-left"></i></div>
                    <div class="services-arrow-next"><i class="feather-chevron-right"></i></div>
                </div> -->
            <?php 
                        endif; 
                    endwhile; 
                endif;
            ?>
                <!-- <div class="col-md-4">
                    <div class="new-projects-box">
                        <pre>"Die Zusammenarbeit mit solution25 ist professionell, angenehm und vor allem bedarfsorientiert."</pre>
                        <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/Serviceplan.png" alt="Serviceplan">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="new-projects-box">
                        <pre>"Die Zusammenarbeit mit solution25 ist professionell, angenehm und vor allem bedarfsorientiert."</pre>
                        <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/Hamerle2.svg" alt="Hamerle">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="new-projects-box">
                        <pre>"Die Zusammenarbeit mit solution25 ist professionell, angenehm und vor allem bedarfsorientiert."</pre>
                        <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/BSC.png" alt="BCS">
                    </div>
                </div> 
                </div>-->
            </div>
        </div>
    </div>

    <div class="new-home-accordion">
        <h2><?php echo ( get_field('technology')['title'] );?></h2>
        <pre><?php echo ( get_field('technology')['text'] );?></pre>
        <div class="container">
            <h2></h2>
            <div class="technology-header">
                <a href="#" class="technology-accordion-wrapper active-a" data-index="accordion-1">
                    Frontend
                </a>
                <a href="#" class="technology-accordion-wrapper" data-index="accordion-2">
                    Backend
                </a>
                <a href="#" class="technology-accordion-wrapper" data-index="accordion-3">
                    Mobile
                </a>
                <a href="#" class="technology-accordion-wrapper" data-index="accordion-4">
                    Database
                </a>
                <a href="#" class="technology-accordion-wrapper" data-index="accordion-5">
                    CMS
                </a>
            </div>
            <div class="technology-body">
                <div class="accordion-1 dnone active">
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/Angularacc.png" alt="Angular">
                        <span>Angular</span>
                    </div>
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/React.png" alt="React">
                        
                        <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets6.lottiefiles.com/datafiles/fab7172a9302d416bcdb8ac7e1c71123/data.json"  background="transparent"  speed="1" ></lottie-player> -->
                        <span>React JS</span>
                    </div>
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/Vue.png" alt="Vue">
                        <span>Vue.js</span>
                    </div>
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/Javascript.png" alt="Javascript">
                        <span>JavaScript</span>
                    </div>
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/Css3.png" alt="Css3">
                        <span>CSS 3</span>
                    </div>
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/Html5.png" alt="Html5">
                        <span>HTML 5</span>
                    </div>
                </div>
                <div class="accordion-2 dnone">
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/Symfony.png" alt="Symfony">
                        <span>PHP Symfony</span>
                    </div>
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/PHPLaravel-1.png" alt="PHP Laravel">
                        <span>PHP Laravel</span>
                    </div>
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/PHP-1.png" alt="PHP">
                        <span>PHP</span>
                    </div>
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/NodeJS-1.png" alt="Node Js">
                        <span>Node JS</span>
                    </div>
                </div>
                <div class="accordion-3 dnone">
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/React.png" alt="React">
                        <span>React Native</span>
                    </div>
                </div>
                <div class="accordion-4 dnone">
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/MySQL.png" alt="MySQL">
                        <span>MySQL</span>
                    </div>
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/PostgreSQL.png" alt="PostgreSQL">
                        <span>PostgreSQL</span>
                    </div>
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/MongoDB-1.png" alt="MongoDB">
                        <span>MongoDB</span>
                    </div>
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/MariaDB-1.png" alt="MariaDB">
                        <span>MariaDB</span>
                    </div>
                </div>
                <div class="accordion-5 dnone">
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/Shopware-1.png" alt="Shopware">
                        <span>Shopware</span>
                    </div>
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/Shopify.png" alt="Shopify-partner">
                        <span>Shopify</span>
                    </div>
                    <div class="accordion-icon-text">
                        <img src="/wp-content/uploads/2022/02/Wordpress.png" alt="Wordpress">
                        <span>Wordpress</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="new-home-add">
        <div class="container">
            <img class="img-possition" src="/wp-content/uploads/2022/02/Besnik.png" alt="Besnik Bilalli CEO">
            <div class="row">
                <div class="offset-xl-3 col-xl-6">
                    <div class="new-add-text">
                        <h2><?php echo ( get_field('call_to_action')['title'] );?></h2>
                    </div>
                </div>
<!--                 <div class="col-md-3">
                    <div class="new-add-text">
                        <pre><?php echo ( get_field('call_to_action')['text'] );?></pre>
                    </div>
                </div> -->
                <div class="col-xl-3">
                    <div class="new-add-text">
                        <a href="<?php echo ( get_field('call_to_action')['button_link'] );?>"><?php echo ( get_field('call_to_action')['button_text'] );?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="why-us-wrapper">
        <div class="container">
            <div class="why-us-title">
                <h2><?php echo ( get_field('why_us')['title'] );?></h2>
                <pre><?php echo ( get_field('why_us')['text'] );?></pre>
            </div>
            
            <?
                if( have_rows('why_us') ): 
                    while ( have_rows('why_us') ) : the_row(); 
                    
                    $i = 1;
                    if( have_rows('why_repeater') ): 
                        while( have_rows('why_repeater') ): the_row(); 
                        ?>
                            <?php if($i == 1 || $i == 4):?> 
                                <div class="whyusbox">
                            <?php endif; ?>
                                <div class="content-wrapper">
                                    <span><?= $i ?></span>
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <pre><?php the_sub_field('text'); ?></pre>
                                </div>
                            <?php if($i == 3 || $i == 6):?> 
                                </div>
                            <?php endif; ?>
                        <?php 
                            $i++;
                            endwhile;
                        endif; 
                    endwhile; 
                endif;
            ?>
        </div>
    </div>

    <div class="slider-image">
        <div class="container">
            <div class="row">
                <?php 
                    $url = get_field('about_us')['image_2'];
                    $imageID = attachment_url_to_postid($url);
                ?>
                <div class="col-lg-6 slider-content">
                    <h2><?php echo ( get_field('about_us')['title'] );?></h2>
                    <pre><?php echo ( get_field('about_us')['text'] );?></pre>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo ( get_field('about_us')['image_1'] );?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>" width="100%">
                    <div class="row space-photo">
                        <div class="col-md-6"><img src="<?php echo ( get_field('about_us')['image_2'] );?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>" width="100%"></div>
                        <div class="col-md-6"><img src="<?php echo ( get_field('about_us')['image_3'] );?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>" width="100%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="hiring-wrapper">
        <div class="container">  
            <h3><?php echo ( get_field('advantages')['title'] );?></h3>
        </div>
        <div class="container position-relative">  
            
                <?
                    if( have_rows('advantages') ): 
                        while ( have_rows('advantages') ) : the_row(); 
                        
                            $i = 1;
                            if( have_rows('advantages_repeater') ): 
                    ?>
                        <div class="hiring-box">
                            <?php 
                                while( have_rows('advantages_repeater') ): the_row(); 
                            ?>

                                <?php if($i == 1): ?>
                                    <div class="hiring-rigth">
                                <?php endif;?>


                                    <?php if($i <= 5): ?>
                                        <div class="box-right">
                                            <?php 
                                                $url = get_sub_field('icon');
                                                $imageID = attachment_url_to_postid($url);
                                            ?>
                                            <img src="<?php the_sub_field('icon'); ?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>" style="object-fit: contain">
                                            <h2><?php the_sub_field('title'); ?></h2>
                                            <pre><?php the_sub_field('text'); ?></pre>
											<?php  
												if( have_rows('content') ): 
													while ( have_rows('content') ) : the_row(); 
														if( have_rows('free_call_wrapper') ): 
															while ( have_rows('free_call_wrapper') ) : the_row();
											?>
																<div class="new-call-now" style="background-color: <?php the_sub_field("box_color"); ?>">
																	<span style="color: <?php the_sub_field("text_color"); ?>"><?php the_sub_field("text"); ?></span>
																	<a href="<?php the_sub_field("button_link"); ?>" style="background-color: <?php the_sub_field("button_color"); ?>; color: <?php the_sub_field("button_text_color"); ?>"><?php the_sub_field("button_text"); ?></a>
																</div>
											<?php 
												endwhile; endif; endwhile; endif;
											?>
                                        </div>
                                    <?php endif;?>

                                
                                <?php if($i == 5): ?>
                                    </div>
                                    <div class="hiring-center">
                                    </div>
                                    <div class="hiring-left">
                                <?php endif;?>

                                        <?php if($i > 5): ?>
                                            <div class="box-left">
                                                <img src="<?php the_sub_field('icon'); ?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
                                                <h2><?php the_sub_field('title'); ?></h2>
                                                <pre><?php the_sub_field('text'); ?></pre>
												<?php  
												if( have_rows('content') ): 
													while ( have_rows('content') ) : the_row(); 
														if( have_rows('free_call_wrapper') ): 
															while ( have_rows('free_call_wrapper') ) : the_row();
											?>
																<div class="new-call-now" style="background-color: <?php the_sub_field("box_color"); ?>">
																	<span style="color: <?php the_sub_field("text_color"); ?>"><?php the_sub_field("text"); ?></span>
																	<a href="<?php the_sub_field("button_link"); ?>" style="background-color: <?php the_sub_field("button_color"); ?>; color: <?php the_sub_field("button_text_color"); ?>"><?php the_sub_field("button_text"); ?></a>
																</div>
											<?php 
												endwhile; endif; endwhile; endif;
											?>
                                            </div>
                                        <?php endif;?>
                                
                                <?php if($i == 9): ?>
                                    </div>
                                <?php endif;?>


                            <?php 
                                $i++;
                                endwhile;
                            ?>
                        </div>
                <?php 
                            endif; 
                        endwhile; 
                    endif;
                ?>

            <div class="numers-hiring">
                <div class="left-bottom">
                    <span>1</span>
                </div>
                <div class="right-bottom">
                    <span>2</span>
                </div>
                <div class="left-bottom">
                    <span>3</span>
                </div>
                <div class="right-bottom">
                    <span>4</span>
                </div>
                <div class="left-bottom">
                    <span>5</span>
                </div>
                <div class="right-bottom">
                    <span>6</span>
                </div>
                <div class="left-bottom">
                    <span>7</span>
                </div>
                <div class="right-bottom">
                    <span>8</span>
                </div>
                <div class="left-bottom">
                    <span>9</span>
                </div>
            </div>
        </div>
    </div> 

    
    <div class="contact-us contact-us-dedic" style="padding: 0">
        <div class="row">
            <div class="cf-banner col-xl-6">
                            <div class="rightside">
                                <?php dynamic_sidebar('widget-4'); ?>
                            </div>
                        </div>
            <div class="col-xl-6 dedicated-contact-us-img">
                <img src="https://solution25.com/wp-content/uploads/2022/02/Contact-image.png" alt="Tringa & Eriona">
            </div>
        </div>
    </div>

<?php get_footer(); ?>