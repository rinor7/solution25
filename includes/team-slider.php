<div class="team-slider">
    <div class="container">
            <h1 class="teamslider-title"><?php echo ( get_field('slider_section')['title'] );?></h1>
                <div class="swiper mySwiper mySwiperteam">
                    <?php
                        if( have_rows('slider_section', 10825) ):
                            while ( have_rows('slider_section', 10825) ) : the_row();
                                $i = 1;
                                if( have_rows('slider', 10825) ):
                                    ?>
                                    <div class="swiper-wrapper">
                                        <?php
                                        while( have_rows('slider', 10825) ): the_row();
                                        ?>
                                                <div class="swiper-slide">
                                                    <div class="slide">
                                                    <img src="<?php the_sub_field('image'); ?>" />
                                                    </div>
                                                </div>
                                        <?php
                                        $i++;
                                    endwhile;
                                    ?>
                                    </div>
                                    <div class="teamslider-arrow">
                                    <div class="swiper-button-prevv"><i class="chevron-left"></i></div>
                                    <div class="swiper-button-nextt"><i class="chevron-right"></i></div>
                                    </div>
                            <?php
                            endif;
                        endwhile;
                    endif;
                ?>

        </div>
    </div>
</div>