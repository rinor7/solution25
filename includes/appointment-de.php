<div class="container">
    <div class="consulation-wrapper">
        <div class="row">
            <div class="col-lg-7">
                <h3><?php echo ( get_field('appointment', 1660)['title'] );?></h3>
            </div>
            <div class="col-lg-5">
            <div class="call-us-btn">
            <?php if(is_active_sidebar('widget-9') ) { ?>
                <?php dynamic_sidebar('widget-9');?>
            <?php } ?>
            </div>
            </div>
        </div>
    </div>
</div>
