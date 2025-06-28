<div class="banner-wrapper-bb">
        <div class="container">
            <div class="bb">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/bb-profil.webp" alt="solution partner" loading= “lazy”>
                </div>
            <div class="content-shopw">
                
                <div class="header-logo-text offset-lg-5 col-lg-8">
                    <div class="circle"></div>
                        <h2><?php the_field('title-bb'); ?></h2>
                        <p><?php the_field('sub-bb'); ?></p>
                        <div class="banner-btn banner-btn-desktop">
                        <div class="whatsapp-btn">
                        <?php if(is_active_sidebar('widget-10') ) { ?>
                                <?php dynamic_sidebar('widget-10');?> 
                        <?php } ?>                        
                        </div>
                </div>
        </div>
        <div class="banner-btn banner-btn-mobile">
        <div class="whatsapp-btn">
        <?php if(is_active_sidebar('widget-10') ) { ?>
                <?php dynamic_sidebar('widget-10');?> 
        <?php } ?>
        </div>
    </div>
    </div>
    </div>
    </div>