<div class="cf-banner cf-banner-footer">
            <div class="container">
                <div class="row">
                <div class="leftside col-lg-6">
                <h1><?php echo ( get_field('contact-banner' , 5)['title'] );?></h1>
                <h2><?php echo ( get_field('contact-banner' , 5)['subtitle'] );?></h2>
                <div class="listednr">  
                    <div class="first-row">
                        <div class="first-row-title flex row-custom">
                            <h4>1</h4>
                            <div class="row-under-title">
                                <h3><?php echo ( get_field('contact-banner' , 5)['first_title'] );?></h3>
                                <p><?php echo ( get_field('contact-banner' , 5)['first_subtitle'] );?></p>
                            </div>
                        </div>
                    </div>
                    <div class="first-row">
                        <div class="second-row-title flex row-custom">
                            <h4>2</h4>
                            <div class="row-under-title">
                                <h3><?php echo ( get_field('contact-banner' , 5)['second_title'] );?></h3>
                                <p><?php echo ( get_field('contact-banner' , 5)['second_subtitle'] );?></p>
                            </div>
                        </div>
                    </div>
                    <div class="first-row">
                        <div class="third-row-title flex row-custom">
                            <h4>3</h4>
                            <div class="row-under-title">
                                <h3><?php echo ( get_field('contact-banner' , 5)['third_title'] );?></h3>
                                <p><?php echo ( get_field('contact-banner' , 5)['third_subtitle'] );?></p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="rightside col-lg-6" id="anchor-cf">
                    <ul>
                        <?php dynamic_sidebar('widget-4'); ?>
                    </ul>
                </div>
                </div>
            </div>

        </div>