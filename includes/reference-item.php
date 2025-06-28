<div class="col-6 col-xl-3">
    <div class="reference-item">
        <?php 
            $url = get_field('image');
            $imageID = attachment_url_to_postid($url);
        ?>
        <pre><?php the_field('technology'); ?></pre>
        <h3><?php the_title(); ?></h3>
        <a href="<?php the_permalink(); ?>"><?php pll_e( 'Learn more' ); ?></a>
        <img src="<?php the_field('image'); ?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
    </div>
</div>