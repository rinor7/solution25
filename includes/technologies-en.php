<div class="techno__section-home">
            <div class="container">
                <h2 class="techno__title"><?php the_field('tech_title' , 8238); ?></h2>
                    <div class="techno__wrapper">
                        <div class="techno__nav-buttons">
                            <ul class="listbtn">
                                <li id="item-1">
                                    <a href="item-1" data-type="item-1" class="active_accordion">CMS</a>
                                </li>
                                <li id="item-2">
                                    <a href="item-2" data-type="item-2">Frontend</a>
                                </li>
                                <li id="item-3">
                                    <a href="item-3" data-type="item-3">Backend</a>
                                </li>
                                <li id="item-4">
                                    <a href="item-4" data-type="item-4">Mobile</a>
                                </li>
                                <li id="item-5">
                                    <a href="item-5" data-type="item-5">Database</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="wrapper_date">
                        <?php
                        if( have_rows('techno_section' , 8238) ):
                        while ( have_rows('techno_section' , 8238) ) : the_row();
                        $i = 1;
                        if( have_rows('cms' , 8238) ):
                        ?>
                        <?php
                        while( have_rows('cms' , 8238) ): the_row();
                        ?>
                        <div class="item item-1 active col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php the_sub_field('image' , 8238); ?>" alt="">
                                    <h2 class="techno__box-title"><?php the_sub_field('titlee' , 8238); ?></h2>
                                    </div>
                                </div>
                            </div>
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

                        <?php
                        if( have_rows('techno_section' , 8238) ):
                        while ( have_rows('techno_section' , 8238) ) : the_row();
                        $i = 1;
                        if( have_rows('frontend' , 8238) ):
                        ?>
                        <?php
                        while( have_rows('frontend' , 8238) ): the_row();
                        ?>
                        <div class="item item-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php the_sub_field('image' , 8238); ?>" alt="">
                                    <h2 class="techno__box-title"><?php the_sub_field('titlee' , 8238); ?></h2>
                                    </div>
                                </div>
                            </div>
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
                        <?php
                        if( have_rows('techno_section' , 8238) ):
                        while ( have_rows('techno_section' , 8238) ) : the_row();
                        $i = 1;
                        if( have_rows('backend' , 8238) ):
                        ?>
                        <?php
                        while( have_rows('backend' , 8238) ): the_row();
                        ?>
                        <div class="item item-3 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php the_sub_field('image' , 8238); ?>" alt="">
                                    <h2 class="techno__box-title"><?php the_sub_field('titlee' , 8238); ?></h2>
                                    </div>
                                </div>
                            </div>
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
                        <?php
                        if( have_rows('techno_section' , 8238) ):
                        while ( have_rows('techno_section' , 8238) ) : the_row();
                        $i = 1;
                        if( have_rows('mobile' , 8238) ):
                        ?>
                        <?php
                        while( have_rows('mobile' , 8238) ): the_row();
                        ?>
                        <div class="item item-4 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php the_sub_field('image' , 8238); ?>" alt="">
                                    <h2 class="techno__box-title"><?php the_sub_field('titlee' , 8238); ?></h2>
                                    </div>
                                </div>
                            </div>
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
                        <?php
                        if( have_rows('techno_section' , 8238) ):
                        while ( have_rows('techno_section' , 8238) ) : the_row();
                        $i = 1;
                        if( have_rows('database' , 8238) ):
                        ?>
                        <?php
                        while( have_rows('database' , 8238) ): the_row();
                        ?>
                        <div class="item item-5 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php the_sub_field('image' , 8238); ?>" alt="">
                                    <h2 class="techno__box-title"><?php the_sub_field('titlee' , 8238); ?></h2>
                                    </div>
                                </div>
                            </div>
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
        </div>
    </div>                   