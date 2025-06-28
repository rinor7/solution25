<?php 
/*
* Template Name: About Us 2025
*/
get_header(); 
?>
    
    <div class="banner-about-us-new">
        <div class="container">
            <div class="title">
                <h1><?php the_field('banner-about-us-new'); ?></h1>
            </div>

            <div class="wrapper">
                <div class="action-black">
                    <?php the_field('action-black');?> 
                </div>
                <div class="content">
                    <img src="<?php the_field('banner-img-about-us-new'); ?>" alt="banner-about-us-new">
                </div>
            </div>

            <div class="paragraph-under">
                <p><?php the_field('paragraph-under-about-us-new'); ?></p>
            </div>
        </div>





        <?php if (have_rows('four_box_count')): ?>
        <section class="six__boxes-counter" aria-label="Counter Box Number">
            <div class="container">
                <div class="row">
                    <?php while (have_rows('four_box_count')): the_row(); ?>
                        <?php 
                            $title = get_sub_field('title'); 
                            $show_plus = strpos($title, '+') !== false ? 'true' : 'false';
                            $clean_title = str_replace('+', '', $title); // Remove '+' for counting
                        ?>
                        <div class="box col-lg-4 col-sm-6">
                            <div class="box__wrap">
                                <div class="countdown" data-target="<?php echo esc_attr($clean_title); ?>" data-show-plus="<?php echo $show_plus; ?>"></div>
                                <p><?php the_sub_field('subtitle'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <script>
        document.addEventListener("DOMContentLoaded", function() {
            var countdowns = document.querySelectorAll('.countdown');

            function updateCountdown(element) {
                var target = parseInt(element.getAttribute('data-target'), 10);
                var showPlus = element.getAttribute('data-show-plus') === 'true';
                var current = 0;

                var intervalId = setInterval(function() {
                    current++;
                    element.textContent = current + (showPlus ? "+" : "");

                    if (current >= target) {
                        clearInterval(intervalId);
                    }
                }, 40);
            }

            countdowns.forEach(function(countdownElement) {
                updateCountdown(countdownElement);
            });
        });
        </script>
    </div>
    
        <div class="new-banner-wrapper-redesign new-banner-wrapper-redesign-about">
        <div class="certificates-new">
            <?php the_field('certificates-bottom');?> 
        </div>
        </div>



        <?php 
$home_page_en_idd = 15283; 
$home_page_de_idd = 12375;
// Detect the current language and use the correct home page ID
$current_lang = pll_current_language();
$home_page_id = ($current_lang === 'de') ? $home_page_de_idd : $home_page_en_idd;

// Get banner fields from the correct home page
$banner = get_field('banner-rd11', $home_page_id);
?>

<div class="container">
    <div class="call-to-action-line">
        <span><?php echo esc_html($banner['call-to-action']); ?></span>
        <div class="banner-btn"> 
            <?php if ($banner): ?>
                <a class="call-to-action" href="<?php echo esc_url($banner['url11']); ?>">
                    <?php echo esc_html($banner['button-name11']); ?>
                </a>
                <a class="phone-button" href="tel:<?php echo esc_html($banner['url22']); ?>">
                    <?php echo esc_html($banner['button-name22']); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>


<div class="container">
<div class="our-locations">
    <img class="desktop-version" src="<?php the_field('banner-img-about-us-new-bg'); ?>" alt="banner-about-us-new">
    <img class="mobile-version" src="<?php the_field('banner-img-about-us-new-bg-mobile'); ?>" alt="banner-about-us-new">
</div>
</div>             


<div class="container">
    
    
    <div class="meet-our-core-team" >
            <div class="title">
                <?php the_field('action-title');?> 
            </div>
            <div class="action-black action-black-bottom">
                <?php the_field('action-black');?> 
            </div>
            <div class="action-team"><img src="<?php the_field('action-team');?>" alt="icon"></div>
    </div>
    
</div>


<?php include("includes/footer2.php");  ?>
