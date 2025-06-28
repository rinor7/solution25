<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="robots" content="index follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=6.0" />
        <meta name="ahrefs-site-verification" content="c2b9f4b1723c4f2370129de7a2b6f755a67bbcaa96b27583ea42a748933f192f">
		<meta name="google-site-verification" content="GpesJcGG0kmaqOO2b6YtIpkTSkkvdpeXBzX7tFMy_K0" />

        <link rel="icon" type="image/png" href="/wp-content/uploads/2021/12/favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <?php wp_head(); ?>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-W6JWHKV');</script>
	<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f991ee64-c5db-46c0-b1d9-7da64a602334";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
	<!-- Hotjar Tracking Code for solution25 --> 
    <script> (function(h,o,t,j,a,r){ h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)}; h._hjSettings={hjid:3501658,hjsv:6}; a=o.getElementsByTagName('head')[0]; r=o.createElement('script');r.async=1; r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv; a.appendChild(r); })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv='); </script>
	<meta name="facebook-domain-verification" content="dsxysmyxxugsq9f5zs2sj3r9zgv2dr" />
	<script src="https://analytics.ahrefs.com/analytics.js" data-key="JEyhp+BtZLlRW3dyUqIolw" async></script>
 
    </head>
    <body <?php body_class(); ?>>
        <header id="masthead" class="diff-header header-rd">
                <div class="topbar">
                    <div class="container">
                        <div class="swiper mySwiper announcmentbar-rd">
                            <div class="swiper-wrapper">
                                <?php
                                $args = array('post_type' => 'announcements', 'posts_per_page' => 4, 'orderby' => 'menu_order', 'order' => 'ASC');
                                $announcements = new WP_Query($args);
                                if ($announcements->have_posts()) :
                                    while ($announcements->have_posts()) : $announcements->the_post(); ?>
                                        <div class="swiper-slide slide-<?php echo get_the_ID(); ?>">
                                            <span class="<?php the_field('css_class'); ?>"><?php the_content(); ?></span>
                                        </div>
                                    <?php endwhile;
                                endif;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                        <div class="language-switcher">
                            <?php if(is_active_sidebar('language-switcher') ) { ?>
                            <ul>
                                <?php dynamic_sidebar('language-switcher');?>
                            </ul>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <div class="container">
                <div class="navbar">

                    <a aria-label="logo header" class="logo" href="<?php echo home_url(); ?>">
                        <ul>
                        <?php dynamic_sidebar('widget-2')?>
                        </ul>
                    </a>

                    <nav>
                        <ul>
                            <?php
                                wp_nav_menu( array( 
                                    'theme_location' => 'primary-rd',  
                                    'container' => ''
                                )); 
                            ?>
                        </ul>
                    </nav>
                    
                    <div class="right-widget show-button">
                       <div class="support-button">
                        <a aria-label="call us" href="tel:+4942143819190">+49 421 438 1919-0</a>
                        </div>
                        <!--<div class="language-switcher">-->
                        <!--    <?php if(is_active_sidebar('language-switcher') ) { ?>-->
                        <!--    <ul>-->
                        <!--        <?php dynamic_sidebar('language-switcher');?>-->
                        <!--    </ul>-->
                        <!--    <?php } ?>-->
                        <!--</div>-->
                        <div class="get-in-touch-btn">
                            <?php if(is_active_sidebar('get-in-touch-btn') ) { ?>
                            <ul>
                                <?php dynamic_sidebar('get-in-touch-btn');?>
                            </ul>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="menubar">
                        <div class="menubar-menu">
                            <span></span>
                            <span></span>
                            <!-- <span></span> -->
                        </div>
                    </div>

                </div>
            </div>
        </header>
    <div class="all-pages">
        
