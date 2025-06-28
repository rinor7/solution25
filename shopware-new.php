<?php 
/*
* Template Name: Shopware New
*/
get_header(); 
?>




                <div class="container">
                    <div class="banner-wrapper-redesign new-banner-wrapper-redesign">
                        
                            <div class="row">
                                <div class="col-md-12 col-xl-12 content-center">
                                <h1><?php echo ( get_field('banner-rd112')['title11'] );?></h1>
                                <p><?php echo ( get_field('banner-rd112')['subtitle11'] );?></p>
                                <div class="banner-btn"> 
                                    <a clas="call-to-action" href="<?php echo esc_url(get_field('banner-rd112')['url11']); ?>">
                                        <?php echo esc_html(get_field('banner-rd112')['button-name11']); ?>
                                    </a>
                                    <a class="phone-button" href="tel:<?php echo esc_html(get_field('banner-rd112')['url22']); ?>">
                                        <?php echo esc_html(get_field('banner-rd112')['button-name22']); ?>
                                    </a>
                                </div>
                                </div>

                                <div class="certificates-new">
                                    <?php echo ( get_field('banner-rd112')['certificates'] );?>
                                </div>
                            </div>

                    </div>
                </div>
   


            
        
    

                
                

<div class="box-shop box-shop-new box-shop-new-rd">
    <div class="container">
        <div class="shopware-content-box">
            <div class="title">
                <span class="h2"><?php echo(get_field('why_chose_us')['title']); ?></span>
            </div>
            <?php
                if( have_rows('why_chose_us') ): 
	            while ( have_rows('why_chose_us') ) : the_row(); 

		        if( have_rows('why_chose_box') ): 
            ?>
            <div class="row">
            <?php 
	        while ( have_rows('why_chose_box') ) : the_row(); 
            ?>
            <div class="col-md-6">
                <div class="shopware-box">

                    <img src="<?php the_sub_field('image'); ?>" alt="">
                    <div class="h3"><?php the_sub_field('title'); ?></div>
                    <pre><?php the_sub_field('description'); ?></pre>
                </div>
            </div>
            <?php endwhile; ?>
            </div>
            <?php endif; endwhile; endif; ?>
        </div>
    </div>
</div>


       <div class="container">
            <?php 
        $home_page_en_id = 15283; // Replace with your actual English home page ID
        $home_page_de_id = 12375; // Replace with your actual German home page ID
        
        // Detect the current language and set the correct page ID
        $current_lang = pll_current_language();
        $home_page_id = ($current_lang === 'de') ? $home_page_de_id : $home_page_en_id;
        ?>
        
        <div class="action-black">
            <?php the_field('action-black', $home_page_id); ?>
        </div>
       </div>

        

 



<div class="banner__section-migrationen-shopware banner__section-new banner__section-migrationen-shop-rd">
    <div class="container">
        <div class="content">
                    <div class="upside">
                        <span class="h2"><?php echo(get_field('gr-fouritems')['title']); ?></span>
                        <span class="h3"><?php echo(get_field('gr-fouritems')['subtitle']); ?></span>
                    </div>

                    
                </div>
                <div class="downside">
                        <div class="boxs">
                            <div class="row">
                            <div class="box col-lg-6 col-md-6">
                                <div class="inner">
                                    <div class="content-up">
                                    <div class="img">
                                    <img class="icon shopware5" src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/shopw55.png" alt="migrate">
                                    <img class="arrow" src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/arro2-right-one.png" alt="migrate">
                                    <img class="icon shopware" src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/shopw66.png" alt="migrate">
                                    </div>
                                    <?php
                                    $page_id = 11171; 
                                    $field_id = 11642; 
                                    
                                    if ( pll_current_language() == 'en' ) {
                                        $page_id = 12205; 
                                        $field_id = 12202; 
                                    }
                                    ?>
										<span class="h3"><a href="<?php echo get_permalink($page_id); ?>"><?php echo get_the_title( $page_id ); ?></a></span>
                                    <p><?php the_field('shopw5to6', $field_id); ?></p>

                                    </div>
                                    <!--<div class="btn-pagelink"><a href="<?php the_permalink(11171); ?>">Mehr erfahren</a></div>-->
                                </div>
                            </div>
                            <div class="box col-lg-6 col-md-6">
                                <div class="inner">
                                    <div class="content-up">
                                    <div class="img">
                                       <img class="icon shopify" src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/shopifyy.png" alt="migrate">
                                       <img class="arrow" src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/arro2-right-two-shopif.png" alt="migrate">
                                       <img class="icon shopware" src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/shopw66.png" alt="migrate">
                                    </div>
                                    <?php
                                    $page_id = 11186; 
                                    $field_id = 11642; 
                                    
                                    if ( pll_current_language() == 'en' ) {
                                        $page_id = 12208; 
                                        $field_id = 12202; 
                                    }
                                    ?>
										<h3><a href="<?php echo get_permalink($page_id); ?>"><?php echo get_the_title( $page_id ); ?></a></h3>
                                    <p><?php the_field('shopifytoshopw', $field_id); ?></p>

                                </div> 
                                <!--<div class="btn-pagelink"><a href="<?php the_permalink(11186); ?>">Mehr erfahren</a></div>-->
                                </div>
                            </div>
                            <div class="box col-lg-6 col-md-6">
                                <div class="inner">
                                    <div class="content-up">
                                    <div class="img">
                                       <img class="icon magento" src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/magentoo.png" alt="migrate">
                                       <img class="arrow" src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/arro2-right-three-magen.png" alt="migrate">
                                       <img class="icon shopware" src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/shopw66.png" alt="migrate">
                                    </div>
                                    <?php
                                    $page_id = 11188; 
                                    $field_id = 11642; 
                                    
                                    if ( pll_current_language() == 'en' ) {
                                        $page_id = 12210; 
                                        $field_id = 12202; 
                                    }
                                    ?>
                                    <span class="h3"><a href="<?php echo get_permalink($page_id); ?>"><?php echo get_the_title( $page_id ); ?></a></span>
                                    <p><?php the_field('magentotoshopw', $field_id); ?></p>

                                </div>
                                <!--<div class="btn-pagelink"><a href="<?php the_permalink(11188); ?>">Mehr erfahren</a></div>-->
                                </div>
                            </div>
                            <div class="box col-lg-6 col-md-6">
                                <div class="inner">
                                    <div class="content-up">
                                    <div class="img">
                                       <img class="icon oxid" src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/oxidd.png" alt="migrate">
                                       <img class="arrow"src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/arro2-right-fouroxid.png" alt="migrate">
                                       <img class="icon shopware" src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/shopw66.png" alt="migrate">
                                    </div>
                                    <?php
                                    $page_id = 11190; 
                                    $field_id = 11642; 
                                    
                                    if ( pll_current_language() == 'en' ) {
                                        $page_id = 12212; 
                                        $field_id = 12202; 
                                    }
                                    ?>
                                    <span class="h3"><a href="<?php echo get_permalink($page_id); ?>"><?php echo get_the_title( $page_id ); ?></a></span>
                                    <p><?php the_field('oxidtoshopw', $field_id); ?></p>

                                </div>
                                <!--<div class="btn-pagelink"><a href="<?php the_permalink(11190); ?>">Mehr erfahren</a></div>-->
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>




<?php 
// Detect the current language and use the correct home page ID
$current_lang = pll_current_language();
$home_page_id = ($current_lang === 'de') ? $home_page_de_id : $home_page_en_id;

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

<!-- FAQ SECTION -->






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




<?php include("includes/footer2.php");  ?>
