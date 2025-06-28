<?php 
/*
* Template Name: Product Analyze
*/
get_header(); 
?>
<div class="ecommerce-banner prod-analyze-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ecommerce-banner-content">
                    <h2><?php echo ( get_field('first_banner')['banner_text_bold'] );?></h2>
                    <p><?php echo ( get_field('first_banner')['banner_description'] );?></p>
                    <div class="ecommerce-banner-info">
                        <?php
                        if( have_rows('first_banner') ):
                            while ( have_rows('first_banner') ) : the_row();
                                $i = 1;
                                if( have_rows('banner_info') ):
                                    ?>
                                    <ul>
                                        <?php
                                        while( have_rows('banner_info') ): the_row();
                                            ?>
                                            <li><span><?php the_sub_field('text_info'); ?></span></li>
                                            <?php
                                            $i++;
                                        endwhile;
                                        ?>
                                    </ul>
                                <?php
                                endif;
                            endwhile;
                        endif;
                        ?>
                    </div>
					<!-- <div class="cn">

					<div id="counter-custom-audit">
						
					<div class="circles">
							<div class="circlee"></div>
						<div class="cont">
							<div class="nnm" id="days"></div>
							<p>Tage</p>
						</div>
					</div>

					<div class="circles">
					<div class="circlee"></div>
						<div class="cont">
						<div class="nnm" id="hours"></div>
						<p>Stunden</p>
						</div>
					</div>
					<div class="circles">
					<div class="circlee"></div>
						<div class="cont"> 
						<div class="nnm" id="minutes"></div> 
						<p>Minuten</p>
						</div>
					</div>
					<div class="circles">
					<div class="circlee"></div>
						<div class="cont">
						<div class="nnm" id="seconds"></div>
						<p>Sekunden</p>
						</div>
					</div>
					</div>
                </div> -->



            	</div>
			</div>
            
            <div class="col-lg-6">
                <div class="banner-home-contact"> 
                <?php dynamic_sidebar('widget-4'); ?>
                </div>
            </div>
        </div>
    </div>
</div>


		


	<div class="container">
		<div class="slider-partners online-mark-page">
			<div class="swiper mySwiper mySwiperone">
				<?php
				if( have_rows('partners' , 1660) ): 
				while ( have_rows('partners' , 1660) ) : the_row(); 
				if( have_rows('partners_repeater' , 1660) ): 
				?>
				<div class="swiper-wrapper">
					<?php 
						while( have_rows('partners_repeater' , 1660) ): the_row(); 
					?>
						<div class="swiper-slide">
							<?php 
								$url = get_sub_field('image');
								$imageID = attachment_url_to_postid($url);
							?>
							<img src="<?php the_sub_field('image'); ?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
						</div>
					<?php 
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

<div class="seo-services-sections">
		<div class="container">
				<h3 class="seo_title">	<?= ( get_field('seo_section')['title'] ); ?></h3>
				<p class="description_pagespeed"><?= ( get_field('seo_section')['description'] ); ?></p>
	<div class="py-20 mb-5">
		<div class="row ">
			<div class="col-md-5">
				<p class="seo_subheading">	<?= ( get_field('seo_section')['subtitle'] ); ?></p>
				<div class="seo_list">
					<ul class="seo-list">
					<?= ( get_field('seo_section')['first_ul'] ); ?>	
					</ul>
					<ul class="seo-list">
					<?= ( get_field('seo_section')['second_ul'] ); ?>
					</ul>
				</div>
				<p class="seo_subheading"><?= ( get_field('seo_section')['second_subtitle'] ); ?></p>
				<div class="seo_list ">
					<ul class="seo-list">
					<?= ( get_field('seo_section')['third_ul'] ); ?>
					</ul>
					<ul class="seo-list">
					<?= ( get_field('seo_section')['fourth_ul'] ); ?>
					</ul>
				</div>
			</div>
			<div class="col-md-7">
				<img class="img_seoanalyise" src="<?= ( get_field('seo_section')['image'] ); ?>" alt="">
			</div>
		</div>
	</div>
</div>
<div class="freeconsulation-wrapper-analyse">
    <?php
    $currentlang = get_bloginfo('language');
    if($currentlang=="en-GB") :
        include("includes/appointment-en.php");
    elseif($currentlang=="de-DE") :
        include("includes/appointment-de.php");
    endif;
    ?>
</div>
<div class="analyse-ssection">
<div class="container">
	<div class="py-20">
		<div class="row">
			<div class="col-lg-6">
				<p class="title_pagespeed"><?= ( get_field('page_speed')['title'] ); ?></p>
				<p class="description_pagespeed"><?= ( get_field('page_speed')['subtitle'] ); ?></p>
				<ul class="green-tick">
				<?= ( get_field('page_speed')['first_ul'] ); ?>
				</ul>
			</div>
			<div class="col-lg-6">
				<img class="pagespeed_image" src="	<?= ( get_field('page_speed')['image'] ); ?>" alt="">
			</div>
		</div>
	</div>
	</div>
</div>
</div>
<div class="background-black">
	<div class="container">
		<div class="py-20">
			<div class="row">
				<div class="col-lg-5">
					<p class="title_codereview"><?= ( get_field('code_refactor')['title'] ); ?></p>
					<p class="description_codereview"><?= ( get_field('code_refactor')['subtitle'] ); ?></p>
					<ul class="green-tick code-review">
					<?= ( get_field('code_refactor')['first_ul'] ); ?>
					</ul>
				</div>
				<div class="col-lg-7">
					<img class="pagespeed_image" src="<?= get_template_directory_uri(); ?>/dist/img/codereview.png"
						alt="">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="ui-ux-analyse">
<div class="container">
<p class="seo_title"><?= ( get_field('ui_ux_section')['title'] ); ?></p>
	<div class="py-20">
		<div class="row ">
			<div class="col-md-5">
				<p class="seo_subheading"><?= ( get_field('ui_ux_section')['subtitle'] ); ?></p>
				<div class="seo_list">
					<ul class="seo-list">
					<?= ( get_field('ui_ux_section')['first_ul'] ); ?>
					</ul>
					<ul class="seo-list">
					<?= ( get_field('ui_ux_section')['second_ul'] ); ?>
					</ul>
				</div>
				<p class="seo_subheading"><?= ( get_field('ui_ux_section')['second_subtitle'] ); ?></p>
				<div class="seo_list ">
					<ul class="seo-list">
					<?= ( get_field('ui_ux_section')['third_ul'] ); ?>
					</ul>
					<ul class="seo-list">
					<?= ( get_field('ui_ux_section')['fourth_ul'] ); ?>
					</ul>
				</div>
			</div>
			<div class="col-md-7">
				<img src="<?= ( get_field('ui_ux_section')['image'] ); ?>" alt="">
			</div>
		</div>
	</div>
</div>
</div>

			<?php
			$currentlang = get_bloginfo('language');
			if($currentlang=="en-GB") :
				include("includes/contactform-en.php");
			elseif($currentlang=="de-DE") :
				include("includes/contactform-de.php");
			endif;
			?>

			<script>
            (function() {
            var daysElement = document.getElementById('days');
            var hoursElement = document.getElementById('hours');
            var minutesElement = document.getElementById('minutes');
            var secondsElement = document.getElementById('seconds');

            var targetDate = new Date("2023-06-30T00:00:00");
            
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
        </script>
<?php get_footer(); ?>