<div class="container">
    <div class="consulation-wrapper consulation-wrapper-custom-home">
        <div class="row">
            <div class="col-lg-7">
                <h3><?php echo ( get_field('appointment', 1660)['title'] );?></h3>
            </div> 
            <div class="col-lg-5">
                
                <?php
                $currentlang = get_bloginfo('language');
                if ($currentlang == "en-GB") :
                    ?>
                    <a href="#anchor-cf">Request now for free!</a>
                    <?php
                elseif ($currentlang == "de-DE") :
                    ?>
                    <a href="#anchor-cf">Jetzt unverbindlich anfragen!</a>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
