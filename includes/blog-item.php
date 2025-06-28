<!-- <div class="latest-post col-lg-3 <?php foreach( $categorySlug as $category){echo $category->slug;}?>">
    <a href="<?php the_permalink(); ?>">
        <div class="row">
            <div class="col-md-4">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="col-md-8">
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <div class="blog-author-wrapper">
                    <?php 
                        $url = get_field('author')['image'];
                        $imageID = attachment_url_to_postid($url);
                    ?>
                    <img class="user-photo" src="<?php echo ( get_field('author')['image'] );?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
                    <pre><?php echo ( get_field('author')['name'] );?> <br /><span><?php echo ( get_field('author')['position'] );?></span></pre>
                </div>
            </div>
        </div>
    </a>
</div> -->
<div class="latest-post <?php foreach( $categorySlug as $category){echo $category->slug;}?>">
    <div class="inside">
    <a href="<?php the_permalink(); ?>">
        <div class="blog-item">
            <?php the_post_thumbnail(); ?>
            <?php 
                $url = get_field('author')['image'];
                $imageID = attachment_url_to_postid($url);
            ?>
            <!-- <div class="blog-author-wrapper">
                <img class="user-photo" src="<?php echo ( get_field('author')['image'] );?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
                <pre><?php echo ( get_field('author')['name'] );?><span><?php echo ( get_field('author')['position'] );?></span></pre>
            </div> -->
            <h3><?php the_title(); ?></h3>
        </div>
    </a>
    </div>
</div>