<?php 
/*
* Template Name: 404
*/
get_header(); 
?>

    <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    
    <div class="banner-wrapper" style="padding: 20vh 0;text-align: center">
        <div class="container">
            <div class="row">
                <div class="offset-3 col-md-6">
                    <h1>404</h1>
                    <pre>Go back to <a href="<?php echo home_url(); ?>">homepage</a></pre>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>