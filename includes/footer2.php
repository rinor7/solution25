</div>
 
<footer>
    
 <div class="container">
    <div class="top-footer-rd top-footer-rd2" id="contact">
       
            <div class="side-wrapper d-none-mobile">
                <div class="leftside">
                    <div class="up">
                        <span class="h3"><?php echo get_field('subtitle', 'option'); ?></span>
                    </div>
                    <div class="down">
                        <!--<div class="locations">-->
                        <!--    <?php echo get_field('locations', 'option'); ?>-->
                        <!--</div>-->
                        <div class="contacts">
                            <div class="box box1">
                                <a aria-label="Email Us" href="mailto:<?php echo get_field('contacts1', 'option'); ?>">
                                    <p>Email</p>
                                    <span><?php echo get_field('contacts1', 'option'); ?></span>
                                </a>
                            </div>
                            <div class="box box2">
                                <a aria-label="Call Us" href="tel:<?php echo get_field('contacts2', 'option'); ?>">
                                    <p>Phone</p>
                                    <span><?php echo get_field('contacts3', 'option'); ?></span>
                                </a>
                            </div>
                            <div class="box box3">
                                <a aria-label="Chat with Us" href="https://wa.me/+4915164516301">
                                    <p>Whatsapp</p>
                                    <span><?php echo get_field('contacts5', 'option'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rightside">
                    <!--<h2><?php echo get_field('title', 'option'); ?></h2>-->
                    <?php echo get_field('cf7', 'option'); ?>
                </div>
            </div>

            <div class="side-wrapper d-none-desktop">
                <div class="leftside">
                    <div class="up">
                        <?php if ($title = get_field('title', 'option')): ?>
							<h2><?php echo $title; ?></h2>
						<?php endif; ?>

						<?php if ($subtitle = get_field('subtitle', 'option')): ?>
							<h3><?php echo $subtitle; ?></h3>
						<?php endif; ?>
                    </div>
                    <div class="rightside">
                        <?php echo get_field('cf7', 'option'); ?>
                    </div>
                    <div class="down">
                        <!--<div class="locations">-->
                        <!--    <?php echo get_field('locations', 'option'); ?>-->
                        <!--</div>-->
                        <div class="contacts">
                            <div class="box box1">
                                <a aria-label="Email Us" href="mailto:<?php echo get_field('contacts1', 'option'); ?>">
                                    <p>Email</p>
                                    <span><?php echo get_field('contacts1', 'option'); ?></span>
                                </a>
                            </div>
                            <div class="box box2">
                                <a aria-label="Call Us" href="tel:<?php echo get_field('contacts2', 'option'); ?>">
                                    <p>Phone</p>
                                    <span><?php echo get_field('contacts3', 'option'); ?></span>
                                </a>
                            </div>
                            <div class="box box3">
                                <a aria-label="Chat with Us" href="https://wa.me/+4915164516301">
                                    <p>Whatsapp</p>
                                    <span><?php echo get_field('contacts5', 'option'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-footer-rd">
        <div class="container">
            <div class="footer-wrapper">
                
                <div class="leftside">
                    <div class="logo-footer">
                        <?php if(is_active_sidebar('footer-logo') ) { ?>
                            <?php dynamic_sidebar('footer-logo');?>
                        <?php } ?>
                    </div>

                    <div class="copyrights">
                        <p>&copy;<?php echo date(' Y  ') ;?><a href="/">solution25</a> - All rights Reserved.</p>
                    </div>
                </div>

                <div class="rightside">
                    <div class="menu-footer">
                    <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'footer-rd',  
                            'container' => ''
                        )); 
                    ?>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</footer>
    </body>
    
    <?php wp_footer(); ?>
</html>