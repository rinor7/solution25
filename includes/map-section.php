<div class="landing__us">
    <div class="container">
        <div class="row">
            <div class="landing__us-map col-lg-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46940.162381650145!2d21.123707933390598!3d42.66643787987109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee605110927%3A0x9365bfdf385eb95a!2sPristina!5e0!3m2!1sen!2s!4v1678184219744!5m2!1sen!2s"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="landing__us-content col-lg-7">
                <div class="landing__us-content-box mobile-box">
                    <img src="<?php echo get_bloginfo('template_directory')?>/dist/img/logo-contant.svg" />
                    <p><?php echo get_field('contact_sectionn', 10825)['text']; ?></p>
                    <a class="landing__us-content-link hide-desktop" href="<?php echo ( get_field('contact_sectionn' , 10825)['buttonlink'] );?>"><?php echo ( get_field('contact_sectionn' , 10825)['buttontxt'] );?></a>
                </div>
                <div class="landing__us-content-box">
                    <h2><?php echo ( get_field('contact_sectionn' , 10825)['title'] );?></h2>
                    <!-- <p><?php echo ( get_field('contact_sectionn' , 10825)['street'] );?></p> -->
                    <?php dynamic_sidebar('widget-15'); ?>
                    <a class="landing__us-content-tel tel"><?php echo ( get_field('contact_sectionn' , 10825)['number'] );?></a>
                    <!-- <div class="landing__us-content-links">
                        <a href="https://de.linkedin.com/company/solution25" aria-label="Linkedin"><span></span></a><br>
                        <a href="https://www.facebook.com/solutiontwentyfive/" aria-label="Facebook"><span></span></a><br>
                        <a href="https://www.instagram.com/solution25com/?hl=en" aria-label="Instagram"><span></span></a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
