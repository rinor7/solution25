<?php 
/*
* Template Name: Shopware 5 zu 6
*/
get_header(); 
?>

<section class="banner__section-new">
    <div class="container">
        <div class="content">

            <div class="upside">
                <h1><?php echo ( get_field('group_banner')['banner-title'] );?></h1>
                <h2> <?php echo ( get_field('group_banner')['banner-subtitle'] );?></h2>
            </div>


            <div class="center">

                <div class="banner-btn">
                    <div class="migrate-btn">
                    <?php if(is_active_sidebar('widget-11') ) { ?>
                        <ul>
                            <?php dynamic_sidebar('widget-11');?> 
                        </ul>
                    <?php } ?>                    </div>
                    <div class="whatsapp-btn">
                        <?php if(is_active_sidebar('widget-10') ) { ?>
                                <ul>
                                    <?php dynamic_sidebar('widget-10');?> 
                                </ul>
                        <?php } ?>
                    </div>
                </div>

                <div class="bottom-line">
                    <div class="lefts">
                        <img src="<?php echo ( get_field('group_banner')['trusted-icon'] );?>" alt="" loading= “lazy”>
                    </div>
                    <div class="rights">
                        <h3><?php echo ( get_field('group_banner')['trusted-txt'] );?></h3>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
  
</section>


<div class="banner-wrapper-new-pg">
    <div class="container">
        <div class="content-shopw">
                    <span><?php echo ( get_field('group_bronzepartner')['bronze-txt'] );?></span>
                    <img src="<?php echo ( get_field('group_bronzepartner')['bronze-partner-desk'] );?>" class="desk-v" alt="shopware-bronz" loading= “lazy”>
                    <img src="<?php echo ( get_field('group_bronzepartner')['bronze-partner-mob'] );?>" class="mob-v" alt="shopware-bronz" loading= “lazy”>
                </div>
            </div>
        </div> 
    </div>


    <div class="project-step project-step-new">
    <div class="container">
        <div class="number-box-wrapper">
            <div class="title">                          
                <h2><?php the_field('title-whymigrate'); ?></h2>
                <pre><?php the_field('subtitle-whymigrate'); ?></pre>
            </div>
            <div class="box-inside">
            <div class="row">
                
                <div class="box-wrapper col-lg-4">
                    <div class="content">
                        <img src="<?php echo ( get_field('group_whymigrate')['icon-box1'] );?>" class="desk-v" alt="shopware-bronz" loading= “lazy”>
                        <h3><?php echo ( get_field('group_whymigrate')['title-txt1'] );?></h3>
                        <pre><?php echo ( get_field('group_whymigrate')['sub-txt1'] );?></pre>
                    </div>
                </div> 
                <div class="box-wrapper col-lg-4">
                    <div class="content">
                    <img src="<?php echo ( get_field('group_whymigrate')['icon-box2'] );?>" class="desk-v" alt="shopware-bronz" loading= “lazy”>
                        <h3><?php echo ( get_field('group_whymigrate')['title-txt2'] );?></h3>
                        <pre><?php echo ( get_field('group_whymigrate')['sub-txt2'] );?></pre>                               
                    </div>
                </div> 
                <div class="box-wrapper col-lg-4">
                    <div class="content">
                    <img src="<?php echo ( get_field('group_whymigrate')['icon-box3'] );?>" class="desk-v" alt="shopware-bronz" loading= “lazy”>
                        <h3><?php echo ( get_field('group_whymigrate')['title-txt3'] );?></h3>
                        <pre><?php echo ( get_field('group_whymigrate')['sub-txt3'] );?></pre>                               
                    </div>
                </div> 
                
            </div>
            </div>
        </div>
    </div>
</div>




<div class="container">
    <div class="consulation-wrapper consulation-wrapper-new">
        <div class="row">
            <div class="lefts col-lg-7">
                <h3><?php echo ( get_field('migrate')['title-migrate'] );?></h3>
            </div>
                <div class="rights col-lg-5">
                    <li class="migrate-btn">
                    <?php if(is_active_sidebar('widget-11') ) { ?>
                        <ul>
                        <?php dynamic_sidebar('widget-11');?> 
                        </ul>
                    <?php } ?>                    
                    </li>
            </div>
        </div>
    </div>
</div>



<section class="differences-shpw">
    <div class="container">
        <div class="title">
            <h2><?php the_field('title-differ'); ?></h2>
            <p><?php the_field('subtitle-differ'); ?></p>
        </div>

        <div class="upside">
            <div class="lefts ">
            <img src="<?php the_field('icon-leftside');?>" class="shopware5" alt="old-option" loading= “lazy”>
            </div>
            <div class="rights">
            <img src="<?php the_field('icon-rightside');?>" class="shopware6" alt="new-option" loading= “lazy”>
            </div>
        </div>

        <div class="diwnside">
            <?php
            if( have_rows('grup_section_diff') ):
            while ( have_rows('grup_section_diff') ) : the_row();
            $i = 1;
            if( have_rows('repeater-rep') ):
            ?>
            <?php
            while( have_rows('repeater-rep') ): the_row();
            ?>
            <div class="roww">
                <div class="box-a"><?php the_sub_field('lefts'); ?></div>
                <div class="box-b"><?php the_sub_field('centers'); ?></div>
                <div class="box-c"><?php the_sub_field('rights'); ?></div>
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
</section>



<section class="jetzt-neu client-wrapper client-wrapper-onlinem">
    <div class="container">

        <div class="roww">
            <div class="lefts col-lg-7"> 
                <h2><?php the_field('title-differ2'); ?></h2>
                <p><?php the_field('subtitle-differ2'); ?></p>
                <ul>
                    <?php
                    if( have_rows('grup_section_diff2') ):
                    while ( have_rows('grup_section_diff2') ) : the_row();
                    $i = 1;
                    if( have_rows('repeater-rep2') ):
                    ?>
                    <?php
                    while( have_rows('repeater-rep2') ): the_row();
                    ?>
                    <li><?php the_sub_field('option'); ?></li>
                    <?php
                    $i++;
                    endwhile;
                    ?>
                    <?php
                    endif;
                    endwhile;
                    endif;
                    ?>
                </ul>
            </div>
           <div class="rights">
                <img src="<?php the_field('differenceimg'); ?>" alt="migrate shopware">
            </div>
        </div>


    </div>
</section>


<section class="three-steps">
    <div class="container">
        <div class="title">
            <h2><?php the_field('title-threesteps'); ?></h2>
            <p><?php the_field('subtitle-threesteps'); ?></p>
        </div>
        <div class="boxs">
            <div class="box box-one">
                <span><?php echo ( get_field('group_threboxes')['numbber1'] );?></span>
                <h3><?php echo ( get_field('group_threboxes')['title-bx1'] );?></h3>
                <p><?php echo ( get_field('group_threboxes')['sub-bx1'] );?></p>
                </div>
                <div class="box box-one">
                <span><?php echo ( get_field('group_threboxes')['numbber2'] );?></span>
                <h3><?php echo ( get_field('group_threboxes')['title-bx2'] );?></h3>
                <p><?php echo ( get_field('group_threboxes')['sub-bx2'] );?></p>
                </div>
                <div class="box box-one">
                <span><?php echo ( get_field('group_threboxes')['numbber3'] );?></span>
                <h3><?php echo ( get_field('group_threboxes')['title-bx3'] );?></h3>
                <p><?php echo ( get_field('group_threboxes')['sub-bx3'] );?></p>
                </div>
            </div>

            <div class="migrate-button">
            <li class="migrate-btn">
            <?php if(is_active_sidebar('widget-11') ) { ?>
                <ul>
                <?php dynamic_sidebar('widget-11');?> 
                </ul>
            <?php } ?>            
            </li>
            </div>
    </div>
</section>




<section class="four-steps-garantie">
    <div class="container">
        <div class="title">
            <h2><?php the_field('title-garantie'); ?></h2>
            <p><?php the_field('subtitle-garantie'); ?></p>
        </div>
        <div class="boxs">

                <div class="box box-one">
                    <span><?php echo ( get_field('group_fourboxes')['box1-span'] );?></span>
                    <div class="">
                        <h3><?php echo ( get_field('group_fourboxes')['title-bx11'] );?></h3>
                        <p><?php echo ( get_field('group_fourboxes')['sub-bx11'] );?></p>
                    </div>
                </div>
                <div class="box box-one">
                    <span><?php echo ( get_field('group_fourboxes')['box2-span'] );?></span>
                    <div class="">
                        <h3><?php echo ( get_field('group_fourboxes')['title-bx22'] );?></h3>
                        <p><?php echo ( get_field('group_fourboxes')['sub-bx22'] );?></p>
                    </div>
                </div>
                <div class="box box-one">
                    <span><?php echo ( get_field('group_fourboxes')['box3-span'] );?></span>
                    <div class="">
                        <h3><?php echo ( get_field('group_fourboxes')['title-bx33'] );?></h3>
                        <p><?php echo ( get_field('group_fourboxes')['sub-bx33'] );?></p>
                    </div>
                </div>
                <div class="box-four">
                    <img src="<?php echo ( get_field('group_fourboxes')['bx-four-img'] );?>" alt="bronze partner" loading= “lazy”>
                </div>

        </div>

    </div>
</section>



<div class="accordion__section">
    <div class="container">
        <div class="title">
            <h2><?php the_field('accordion-sectiontitle'); ?></h2>
        </div>
        <div class="accordion">
                    <?php
                    if( have_rows('grup_section_acc') ):
                    while ( have_rows('grup_section_acc') ) : the_row();
                    $i = 1;
                    if( have_rows('repeater-acc') ):
                    ?>
                    <?php
                    while( have_rows('repeater-acc') ): the_row();
                    ?>
                     <div class="accordion-item">
                    <div class="accordion-header"><?php the_sub_field('question'); ?></div>
                    <div class="accordion-content">
                        <p><?php the_sub_field('answer'); ?></p>
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


        <?php  include("includes/besnik-whatsapp-call-de.php"); ?>




        


        <script>
            (function() {
            var daysElement = document.getElementById('days');
            var hoursElement = document.getElementById('hours');
            var minutesElement = document.getElementById('minutes');
            var secondsElement = document.getElementById('seconds');

            var targetDate = new Date("2023-12-31T00:00:00");
            
            setInterval(function() {
                var currentDate = new Date();
                var timeDifference = targetDate - currentDate;
                
                var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);
                
                daysElement.textContent = days;
                hoursElement.textContent = hours;
                minutesElement.textContent = minutes;
                secondsElement.textContent = seconds;
            }, 1000);
            })();

            jQuery(document).ready(function($) {
            // Hide all accordion items except the first one
            $('.accordion-content').not(':first').hide();

            // Add active class to the first accordion header
            $('.accordion-header:first').addClass('active');

            // Show the content of the first accordion
            $('.accordion-content:first').show();

            // Accordion click event
            $('.accordion-header').click(function() {
                // Close previously opened accordions
                $('.accordion-header.active').not(this).removeClass('active');
                $('.accordion-content').not($(this).next()).slideUp();

                // Toggle current accordion
                $(this).toggleClass('active');
                $(this).next('.accordion-content').slideToggle();
            });
            });

        </script>

<?php include("includes/footer2.php");  ?>
