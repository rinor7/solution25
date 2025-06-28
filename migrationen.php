<?php 
/*
* Template Name: Migrationen
*/
get_header(); 
?>
        
        <div class="page-migrationen">
        <section class="banner__section-new banner__section-migrationen">
            <div class="container">
                <div class="content">
                    <div class="upside">
                        <?php the_content(); ?>
                    </div>

                    <div class="center">
                        <div class="bottom-line">
                            <div class="lefts">
                                <img src="<?php echo ( get_field('group_banner', 11171)['trusted-icon'] );?>" alt="" loading= “lazy”>
                            </div>
                            <div class="rights">
                                <?php
                                $page_id = 11171; 
                                
                                if ( pll_current_language() == 'en' ) {
                                    $page_id = 12205; 
                                }
                                ?>
                                
                                <h3><?php echo ( get_field('group_banner', $page_id)['trusted-txt'] );?></h3>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="downside">
                        <div class="boxs">
                            <div class="row">
                            <div class="box col-lg-3 col-md-6">
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
                                    $button_text = 'Mehr erfahren'; // Default to German text
                                    
                                    if ( pll_current_language() == 'en' ) {
                                        $page_id = 12205; 
                                        $button_text = 'Learn More'; 
                                        $field_id = 12202; 
                                    }
                                    ?>
                                    <h3><?php echo get_the_title( $page_id ); ?></h3>
                                    <p><?php the_field('shopw5to6', $field_id); ?></p>
                                     </div>
                                    <div class="btn-pagelink">
    <a href="<?php echo get_permalink( $page_id ); ?>"><?php echo $button_text; ?></a>
</div>
                                </div>
                            </div>
                            <div class="box col-lg-3 col-md-6">
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
                                    $button_text = 'Mehr erfahren'; // Default to German text
                                    
                                    if ( pll_current_language() == 'en' ) {
                                        $page_id = 12208; 
                                        $field_id = 12202; 
                                        $button_text = 'Learn More'; 
                                    }
                                    ?>
                                    <h3><?php echo get_the_title( $page_id ); ?></h3>
                                    <p><?php the_field('shopifytoshopw', $field_id); ?></p>
                                    </div>
                                <div class="btn-pagelink">
    <a href="<?php echo get_permalink( $page_id ); ?>"><?php echo $button_text; ?></a>
</div>
                                </div>
                            </div>
                            <div class="box col-lg-3 col-md-6">
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
                                    $button_text = 'Mehr erfahren'; // Default to German text
                                    
                                    if ( pll_current_language() == 'en' ) {
                                        $page_id = 12210; 
                                        $button_text = 'Learn More'; 
                                        $field_id = 12202; 
                                    }
                                    ?>
                                    <h3><?php echo get_the_title( $page_id ); ?></h3>
                                    <p><?php the_field('magentotoshopw', $field_id); ?></p>
                                </div>
                                <div class="btn-pagelink">
    <a href="<?php echo get_permalink( $page_id ); ?>"><?php echo $button_text; ?></a>
</div>
                                </div>
                            </div>
                            <div class="box col-lg-3 col-md-6">
                                <div class="inner">
                                    <div class="content-up">
                                    <div class="img">
                                       <img class="icon oxid" src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/oxid-wh.png" alt="migrate">
                                       <img class="arrow"src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/arro2-right-fouroxid.png" alt="migrate">
                                       <img class="icon shopware" src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/shopw66.png" alt="migrate">
                                    </div>
                                     <?php
                                    $page_id = 11190; 
                                    $field_id = 11642; 
                                    $button_text = 'Mehr erfahren'; // Default to German text
                                    
                                    if ( pll_current_language() == 'en' ) {
                                        $page_id = 12212; 
                                        $field_id = 12202; 
                                        $button_text = 'Learn More'; 
                                    }
                                    ?>
                                    <h3><?php echo get_the_title( $page_id ); ?></h3>
                                    <p><?php the_field('oxidtoshopw', $field_id); ?></p>

                                </div>
                                <div class="btn-pagelink">
    <a href="<?php echo get_permalink( $page_id ); ?>"><?php echo $button_text; ?></a>
</div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>    
        

               
			
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
			
			
			
      
        
        
        <div class="banner-wrapper-new-pg">
            <div class="container">
                <div class="content-shopw">
                    <?php $page_id = get_the_ID(); ?>
                    <h3>
                        <?php 
                        $bronze_text = get_field('group_bronzepartner_silver', $page_id)['bronze-txt'];
                        echo $bronze_text ? esc_html($bronze_text) : 'Silver Partner'; 
                        ?>
                    </h3>
        
                    <img 
                        src="<?php echo esc_url(get_field('group_bronzepartner_silver', $page_id)['bronze-partner-desk']); ?>" 
                        class="desk-v" 
                        alt="shopware-bronz" 
                        loading="lazy">
        
                    <img 
                        src="<?php echo esc_url(get_field('group_bronzepartner_silver', $page_id)['bronze-partner-mob']); ?>" 
                        class="mob-v" 
                        alt="shopware-bronz" 
                        loading="lazy">
                </div>
            </div>
        </div>


        
        
    </div>

<?php include("includes/footer2.php");  ?>
