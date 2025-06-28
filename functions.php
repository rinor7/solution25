<?php
/**
* solution25 functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package solution25
*/

if ( ! function_exists( 'solution25_setup' ) ) :

/**
* Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which
* runs before the init hook. The init hook is too late for some features, such
* as indicating support for post thumbnails.
*/

    function solution25_setup() {

        /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
	    add_theme_support( 'title-tag' );

        /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */

	    add_theme_support( 'post-thumbnails' );

    	// This theme uses wp_nav_menu() in one location.

    	register_nav_menus( array(
    		'primary' => esc_html__( 'Primary', 'solution25' ),
            'primary-rd' => esc_html__( 'Primary Redesign', 'solution25' ),
            'footer-rd' => esc_html__( 'Footer Redesign', 'solution25' ),
    		'topbar' => esc_html__( 'Topbar', 'solution25' ),
    		'footer1' => esc_html__( 'Apps', 'solution25' ),
            'footer2' => esc_html__( 'Online Marketing', 'solution25' ),
            'footer3' => esc_html__( 'Services', 'solution25' ),
            'shopify' => esc_html__( 'Shopify', 'solution25' ),
            'shopware' => esc_html__( 'Shopware', 'solution25' )
    	));
    }

endif;

add_action( 'after_setup_theme', 'solution25_setup' );

/**
* Enqueue scripts and styles.
*/

function solution25_scripts() {
	wp_enqueue_style( 'solution25-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );

    wp_enqueue_style( 'solution25-main-style', get_template_directory_uri() . '/dist/css/style.css', array(), filemtime( get_template_directory() . '/dist/css/style.css' ) );
    
    wp_enqueue_style( 'solution25-rd-style-style', get_template_directory_uri() . '/src/scss/rd-style.css', array(), filemtime( get_template_directory() . '/src/scss/rd-style.css' ) );
    
    wp_enqueue_style( 'solution25-plugin-style', get_template_directory_uri() . '/src/scss/plugin-landingpage.css', array(), filemtime( get_template_directory() . '/src/scss/plugin-landingpage.css' ) );
    
    wp_enqueue_style( 'solution25-new-redesign-style', get_template_directory_uri() . '/src/scss/redesign2025.css', array(), filemtime( get_template_directory() . '/src/scss/redesign2025.css' ) );
    
    wp_enqueue_style( 'solution25-header2025-style', get_template_directory_uri() . '/src/scss/header-2025.css', array(), filemtime( get_template_directory() . '/src/scss/header-2025.css' ) );
    
    wp_enqueue_style( 'solution25-marketing-style', get_template_directory_uri() . '/dist/css/new-redesign.css', array(), filemtime( get_template_directory() . '/dist/css/new-redesign.css' ) );
    
    wp_enqueue_style( 'solution25-2025-style', get_template_directory_uri() . '/src/scss/2025.css', array(), filemtime( get_template_directory() . '/src/scss/2025.css' ) );

    wp_enqueue_style( 'solution25-swiper-style', get_template_directory_uri() . '/src/scss/swiper.css', array(), null );
    wp_enqueue_style( 'solution25-aos-style', get_template_directory_uri() . '/dist/css/aos.css', array(), null );


    wp_enqueue_script('solution25-bootstrap-js', get_template_directory_uri().'/src/js/bootstrap.min.js', array(), null, true );
// 	wp_enqueue_script( 'solution25-jquery-js', get_template_directory_uri() . '/src/js/jquery.js', array(), null, true );
	wp_enqueue_script( 'solution25-jquery-js', get_template_directory_uri() . '/src/js/jquery.js', array(), null, false ); // load in HEAD
	wp_enqueue_script( 'solution25-slick-js', get_template_directory_uri() . '/src/js/slick.js', array(), null, true );
    wp_enqueue_script( 'solution25-swiper-js', get_template_directory_uri() . '/src/js/swiper.js', array(), null, true );
// 	wp_enqueue_script( 'solution25-main-js', get_template_directory_uri() . '/src/js/main.js', array(), null, true );
	wp_enqueue_script( 'solution25-main-js', get_template_directory_uri() . '/src/js/main.js', array('solution25-jquery-js'), null, true );
    wp_enqueue_script( 'solution25-lottie-js', get_template_directory_uri() . '/src/js/lottieanimations.js', array(), null, true );
    wp_enqueue_script( 'solution25-aos-js', get_template_directory_uri() . '/src/js/aoss.js', array(), null, false );

}

add_action( 'wp_enqueue_scripts', 'solution25_scripts' );

// if ( function_exists('register_sidebar') )
//   register_sidebar(array(
//     'name' => 'Widgets',
//   )
// );

//Remove ul wrapper from wp menu
function remove_wp_nav_menu_ul($menu){
  return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}
add_filter( 'wp_nav_menu', 'remove_wp_nav_menu_ul' );

//Remove auto <pre> from contact form 7 plugin
add_filter( 'wpcf7_autop_or_not', '__return_false' );
//Remove auto <span> from contact form 7 plugin
add_filter('wpcf7_form_elements', function($content) {
  $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

  return $content;
});

the_field('wysiwyg_field', false, false);
remove_filter ('acf_the_content', 'wpautop');

// //Remove the comments section in the wp dashboard
// add_action( 'admin_menu', 'my_remove_admin_menus' );
// function my_remove_admin_menus() {
//     remove_menu_page( 'edit-comments.php' );
// }

// //Remove the comments section in the admin bar
// function mytheme_admin_bar_render() {
//     global $wp_admin_bar;
//     $wp_admin_bar->remove_menu('comments');
// }
// add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

//Add string translations
add_action('init', function() {
  pll_register_string('hire-us', 'Hire us');
  pll_register_string('location', 'Location');
  pll_register_string('working-time', 'Working time');
  pll_register_string('apply-now', 'Apply now');
  pll_register_string('learn-more', 'Learn more');
  pll_register_string('latest-posts', 'Latest Posts');
  pll_register_string('technology-we-use', 'Technology we used');
  pll_register_string('visit-website', 'Live website');
  pll_register_string('go-to-website', 'Go to website');
   pll_register_string('satisfied-client', 'Satisfied Client Title');
  pll_register_string('portfolio-posts-title', 'Portfolio posts title');
   pll_register_string('portfolio-posts-title-shopware', 'Portfolio posts title shopware');
  pll_register_string('portfolio-posts-title-shopify', 'Portfolio posts title shopify');
  pll_register_string('portfolio-posts-title-shopify', 'Portfolio posts title pagespeed');
   pll_register_string('share-this-article', 'Share this article');
   pll_register_string('related-plugins', 'Related Plugins');
   pll_register_string('include-in-sidebar', 'Include in');
});


// AJAX
function filter_projects() {
    $slug = $_REQUEST['category'];
    $postType = $_REQUEST['type'];
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1; // Get the current page from the AJAX request

    $posts_per_page = 6; // Limit to 6 posts per request

    // Query parameters based on category and post type
    if($postType == 'reference') :
        if($slug == ''){
            $args = array(  
                'post_type'         => 'reference',
                'post_status'       => 'publish',
                'posts_per_page'    => $posts_per_page, 
                'paged'             => $page,  // Add pagination
            );
        } else {
            $args = array(  
                'post_type'         => $postType,
                'post_status'       => 'publish',
                'posts_per_page'    => $posts_per_page,
                'paged'             => $page,  // Add pagination
                'tax_query' => [
                    [
                        'taxonomy'  => 'reference_cat',
                        'field'    => 'slug',
                        'terms'    => $slug,
                    ],
                ]
            );
        }
    else:
        $args = array(  
            'post_type'         => $postType,
            'post_status'       => 'publish',
            'posts_per_page'    => $posts_per_page,
            'paged'             => $page,  // Add pagination
            'category_name'     => $slug,
        );
    endif;

    // Execute the query
    $loop = new WP_Query( $args );
    $response = ''; // Initialize the response

    // Check if there are any posts to display
    if ($loop->have_posts()) :
        while ( $loop->have_posts() ) : $loop->the_post();
            // Include the appropriate template based on the post type
            if($postType == 'reference'):
                ob_start();
                include("includes/reference-item.php");
                $response .= ob_get_clean(); // Store the output
            else :
                ob_start();
                include("includes/blog-item.php");
                $response .= ob_get_clean(); // Store the output
            endif;
        endwhile;

        // Check if there are more posts to load
        $total_posts = $loop->found_posts;
        $has_more = ($total_posts > ($page * $posts_per_page)) ? true : false;

        // Return the response and whether there are more posts
        wp_send_json_success(array(
            'posts' => $response,
            'has_more' => $has_more,
        ));
    else:
        wp_send_json_error(array('message' => 'No more posts found.'));
    endif;

    wp_reset_postdata();
}
add_action('wp_ajax_filter_projects', 'filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');


/*=============================================
                BREADCRUMBS
=============================================*/
function the_breadcrumb()
{
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = '/'; // delimiter between crumbs
    $home = 'Home'; // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<span class="current">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb

    global $post;
    $homeLink = get_bloginfo('url');
    if (is_home() || is_front_page()) {
        if ($showOnHome == 1) {
            echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
        }
    } else {
        echo '<div id="crumbs"><div class="container"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
        if (is_category()) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                echo get_category_parents($thisCat->parent, true, ' ' . $delimiter . ' ');
            }
            echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
        } elseif (is_search()) {
            echo $before . 'Search results for "' . get_search_query() . '"' . $after;
        } elseif (is_day()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) {
			if (get_post_type() == 'shopify') {
				// Custom breadcrumbs for Shopify post type
				if ($showCurrent == 1) {
					echo $before . get_the_title() . $after;
				}
			}
            elseif (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
                if ($showCurrent == 1) {
                    echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
                }
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, true, ' ' . $delimiter . ' ');
                if ($showCurrent == 0) {
                    $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                }
                echo $cats;
                if ($showCurrent == 1) {
                    echo $before . get_the_title() . $after;
                }
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif (is_attachment()) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo get_category_parents($cat, true, ' ' . $delimiter . ' ');
            echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_page() && !$post->post_parent) {
            if ($showCurrent == 1) {
                echo $before . get_the_title() . $after;
            }
        } elseif (is_page() && $post->post_parent) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo $breadcrumbs[$i];
                if ($i != count($breadcrumbs)-1) {
                    echo ' ' . $delimiter . ' ';
                }
            }
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_tag()) {
            echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . 'Articles posted by ' . $userdata->display_name . $after;
        } elseif (is_404()) {
            echo $before . 'Error 404' . $after;
        }
        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ' (';
            }
            echo __('Page') . ' ' . get_query_var('paged');
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ')';
            }
        }
        echo '</div></div>';
    }
}
// end the_breadcrumb()

// Start Pagination
function your_custom_pagination($args) {
    $loop = new WP_Query( $args );
    $total = $loop->max_num_pages;
    if ( $total > 1 ) {
        if ( !$current_page = get_query_var('paged') ) {
            $current_page = 1;
        }
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'current' => $current_page,
            'total' => $total,
            'end_size' => 0,
            'type' => 'list',
            'prev_next' => true,
            // 'prev_text' => __('Previous', 'text-domain'),
            'next_text' => __('Next page', 'text-domain'),
        ));
    }
}
// End Pagination
            
            
         
    function standard_widgets_init() {
        register_sidebar(
            array('name'          => esc_html__( 'Logo White', 'standard' ),
                'id'            => 'widget-1',)
        );
        register_sidebar(
            array('name'          => esc_html__( 'Logo Black', 'standard' ),
                'id'            => 'widget-2',)
        );
        register_sidebar(
            array('name'          => esc_html__( 'Logo Footer', 'standard' ),
                'id'            => 'footer-logo',)
        );
        register_sidebar(
            array('name'          => esc_html__( 'Free Consulting Button widget-3', 'standard' ),
                'id'            => 'widget-3',)
        );
        register_sidebar(
            array('name'          => esc_html__( 'Contact Form Standard widget-4', 'standard' ),
                'id'            => 'widget-4',)
        );
        register_sidebar(
            array('name'          => esc_html__( 'Solcial Media Footer widget-5', 'standard' ),
                'id'            => 'widget-5',)
        );
        register_sidebar(
            array('name'          => esc_html__( 'Contact Form Drag&Drop widget-6', 'standard' ),
                'id'            => 'widget-6',)
        );
        register_sidebar(
            array('name'          => esc_html__( 'Online Marketing LI widget-8', 'standard' ),
                'id'            => 'widget-8',)
        );
        register_sidebar(
            array('name'          => esc_html__( 'Phone Number Button widget-9', 'standard' ),
                'id'            => 'widget-9',)
        );
        register_sidebar(
            array('name'          => esc_html__( 'Whatsapp Button widget-10', 'standard' ),
                'id'            => 'widget-10',)
        );
        register_sidebar(
            array('name'          => esc_html__( 'Migrate Button widget-11', 'standard' ),
                'id'            => 'widget-11',)
        );
        register_sidebar(
            array('name'          => esc_html__( 'Default Phone Number widget-12', 'standard' ),
                'id'            => 'widget-12',)
        );
        register_sidebar(
            array('name'          => esc_html__( 'Default Email widget-13', 'standard' ),
                'id'            => 'widget-13',)
        );
        register_sidebar(
            array('name'          => esc_html__( 'Default Adress DE widget-14', 'standard' ),
                'id'            => 'widget-14',)
        );
        register_sidebar(
            array('name'          => esc_html__( 'Default Adress KS widget-15', 'standard' ),
                'id'            => 'widget-15',)
        );
        register_sidebar(
            array('name'          => esc_html__( 'Language Switcher', 'standard' ),
                'id'            => 'language-switcher',)
        );
        register_sidebar(
            array('name'          => esc_html__( 'Get in touch HEADER', 'standard' ),
                'id'            => 'get-in-touch-btn',)
        );
        register_sidebar(
            array('name'          => esc_html__( 'Logo White', 'standard' ),
                'id'            => 'widget-1',)
        );
    }
    add_action( 'widgets_init', 'standard_widgets_init' );

    
        
         function add_share_buttons() {
                echo '<div class="share-buttons">';
                echo '<a href="https://www.facebook.com/sharer.php?u='.get_the_permalink().'&t='.get_the_title().'" target="_blank"><i class="fa fa-facebook"></i></a>';
                echo '<a href="https://www.linkedin.com/shareArticle?mini=true&url='.get_the_permalink().'&title='.get_the_title().'&summary=&source=" target="_blank"><i class="fa fa-linkedin"></i></a>';
                echo '</div>';
            }
        
        
         function custom_post_type() {
            register_post_type('announcements', array(
                'labels' => array('name' => 'Announcement Bar'),
                'public' => false,
				'show_ui' => true,
                'has_archive' => true,
                'publicly_queryable' => false,
                'query_var' => true,
                'rewrite' => false,
                'capability_type' => 'post',
                'hierarchical' => false,
                'supports' => array(
                  'title',
                  'editor',
                  'thumbnail',
                ),
                'menu_position' => 8,
                'exclude_from_search' => false,
                'menu_icon' => 'dashicons-location',
              ));
                register_post_type('jobposts', array(
                  'labels' => array('name' => 'Job Posts'),
                  'public' => true,
                  'has_archive' => true,
                  'publicly_queryable' => true,
                  'query_var' => true,
                  'rewrite' => true,
                  'capability_type' => 'post',
                  'hierarchical' => false,
                  'supports' => array(
                    'title',
                    'editor',
                    'excerpt',
                    'thumbnail',
                    'revisions',
                  ),
                  'menu_position' => 8,
                  'exclude_from_search' => false,
                  'menu_icon' => 'dashicons-location',
                ));
              
                $labels = array(
                  'name' => 'Categories',
                  'singular_name' => 'Posts',
                  'add_new' => 'Add item',
                  'all_items' => 'All items',
                  'add_new_item' => 'Add Item',
                  'edit_item' => 'Edit Item',
                  'new_item' => 'New Items',
                  'view_item' => 'View Item',
                  'search_item' => 'Search Dienstleistungens',
                  'not_found' => 'No items found',
                  'not_found_in_trash' => 'No items found in trash',
                  'parent_item_colon' => 'Parent Item'
                );   
                // Now register the taxonomy
                register_taxonomy('jobposts_cat', array('jobposts'), array(
                  'hierarchical' => true,
                  'labels' => $labels,
                  'show_ui' => true,
                  'show_admin_column' => true,
                  'query_var' => true,
                  'rewrite' => array( 'slug' => 'jobposts_cat' ),
                  'default_term' => array(
                    'name' => 'Uncategorized',
                    'slug' => 'uncategorized',
                  ),
                ));
                // Plugin Landing Page Post Type
                register_post_type('plugin-landingpage', array(
                    'labels' => array('name' => 'Plugin Landingpages'),
                    'public' => true,
                    'has_archive' => true,
                    'publicly_queryable' => true,
                    'query_var' => true,
                    'rewrite' => array('slug' => 'plugin'),
                    'capability_type' => 'post',
                    'hierarchical' => false,
                    'supports' => array(
                        'title',
                        'editor',
                        'thumbnail',
                        'excerpt',
						'comments',
                        'revisions',
                    ),
                    'menu_position' => 9,
                    'exclude_from_search' => false,
                    'menu_icon' => 'dashicons-admin-plugins',
                ));
            
                // Plugin Landing Page Taxonomy
                register_taxonomy('custom_taxonomy_plugin', array('plugin-landingpage'), array(
                    'hierarchical' => true,
                    'labels' => array(
                        'name' => 'Plugin Categories',
                        'singular_name' => 'Plugin Category',
                        'search_items' => 'Search Plugin Categories',
                        'all_items' => 'All Plugin Categories',
                        'parent_item' => 'Parent Plugin Category',
                        'parent_item_colon' => 'Parent Plugin Category:',
                        'edit_item' => 'Edit Plugin Category',
                        'update_item' => 'Update Plugin Category',
                        'add_new_item' => 'Add New Plugin Category',
                        'new_item_name' => 'New Plugin Category Name',
                        'menu_name' => 'Plugin Categories',
                    ),
                    'show_ui' => true,
                    'show_admin_column' => true,
                    'query_var' => true,
                    'rewrite' => array('slug' => 'plugin-category'),
                ));
              }
              add_action('init', 'custom_post_type');
        
        


//Acf pro only
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Footer Settings',
        'menu_title'    => 'Footer Settings',
        'menu_slug'     => 'footer-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}




function cta_shortcode( $atts ) {

    // Get from Options Page:
    $cta_text = get_field('cta_text1', 'options');
    $cta_subtext_options = get_field('cta_subtext1', 'options');
    $cta_link = get_field('cta_link1', 'options');
    $cta_button_text = get_field('cta_button_text1', 'options');

    // Get Categories for Current Post:
    $terms = get_the_terms(get_the_ID(), 'custom_taxonomy_plugin');
    $categories_text = '';

    if ($terms && !is_wp_error($terms)) {
        $term_names = wp_list_pluck($terms, 'name');
        $sanitized_term_names = array_map('esc_html', $term_names); // Sanitize each term
        $categories_text = implode(', ', $sanitized_term_names); // Join with commas and spaces
    }

    // Combine Subtext:
    $cta_subtext = '';
    if ($cta_subtext_options) {
        $cta_subtext .= esc_html($cta_subtext_options); // Existing subtext
    }

    if ($categories_text) {
        if ($cta_subtext) {
            $cta_subtext .= ' '; // Separator
        }
        $cta_subtext .= '<strong>' . $categories_text . '</strong>'; // Wrap category in <strong>
    }

    if (empty($cta_subtext)) {
        $cta_subtext = 'Default Subtext';
    }


    // Handle Defaults:
    $cta_text = $cta_text ? $cta_text : 'Default CTA Text';
    $cta_link = $cta_link ? $cta_link : '#';
    $cta_button_text = $cta_button_text ? $cta_button_text : 'Default Button';


    $output = '<section class="cta-section">';
    $output .= '<div class="cta-content">';
    $output .= '<p class="cta-text">' . esc_html( $cta_text ) . '</p>';
    $output .= '<p class="cta-subtext">' .  $cta_subtext . '</p>';
    $output .= '</div>';
    $output .= '<div class="cta-button">';
    $output .= '<a href="' . esc_url( $cta_link ) . '" class="cta-link">' . esc_html( $cta_button_text ) . '</a>';
    $output .= '</div>';
    $output .= '</section>';

    return $output;
}


// 2. Process Shortcode with the_content Filter (CRUCIAL):
add_filter( 'the_content', 'process_cta_shortcode', 11 );

function process_cta_shortcode( $content ) {
    $content = do_shortcode($content);
    return $content;
}

// 3. Register the Shortcode (after the filter):
add_shortcode( 'cta', 'cta_shortcode' );


































function cta_shortcode_de( $atts ) {

    // Get from Options Page:
    $cta_text = get_field('cta_text_de', 'options');
    $cta_subtext_options = get_field('cta_subtext_de', 'options');
    $cta_link = get_field('cta_link_de', 'options');
    $cta_button_text = get_field('cta_button_text_de', 'options');

    // Get Categories for Current Post:
    $terms = get_the_terms(get_the_ID(), 'custom_taxonomy_plugin');
    $categories_text = '';

    if ($terms && !is_wp_error($terms)) {
        $term_names = wp_list_pluck($terms, 'name');
        $sanitized_term_names = array_map('esc_html', $term_names); // Sanitize each term
        $categories_text = implode(', ', $sanitized_term_names); // Join with commas and spaces
    }

    // Combine Subtext:
    $cta_subtext = '';
    if ($cta_subtext_options) {
        $cta_subtext .= esc_html($cta_subtext_options); // Existing subtext
    }

    if ($categories_text) {
        if ($cta_subtext) {
            $cta_subtext .= ' '; // Separator
        }
        $cta_subtext .= '<strong>' . $categories_text . '</strong>'; // Wrap category in <strong>
    }

    if (empty($cta_subtext)) {
        $cta_subtext = 'Default Subtext';
    }


    // Handle Defaults:
    $cta_text = $cta_text ? $cta_text : 'Default CTA Text';
    $cta_link = $cta_link ? $cta_link : '#';
    $cta_button_text = $cta_button_text ? $cta_button_text : 'Default Button';


    $output = '<section class="cta-section">';
    $output .= '<div class="cta-content">';
    $output .= '<p class="cta-text">' . esc_html( $cta_text ) . '</p>';
    $output .= '<p class="cta-subtext">' .  $cta_subtext . '</p>';
    $output .= '</div>';
    $output .= '<div class="cta-button">';
    $output .= '<a href="' . esc_url( $cta_link ) . '" class="cta-link">' . esc_html( $cta_button_text ) . '</a>';
    $output .= '</div>';
    $output .= '</section>';

    return $output;
}


// 2. Process Shortcode with the_content Filter (CRUCIAL):
add_filter( 'the_content', 'process_cta_shortcode_de', 11 );

function process_cta_shortcode_de( $content ) {
    $content = do_shortcode($content);
    return $content;
}

// 3. Register the Shortcode (after the filter):
add_shortcode( 'cta_de', 'cta_shortcode_de' );





// Table Content for Shopware and Shopify Content
function extract_h2_headings($content) {
    preg_match_all('/<h2[^>]*>(.*?)<\/h2>/', $content, $matches);
    return $matches[1]; // Returns array of H2 headings
}

function add_anchor_to_headings($content) {
    $count = 1;
    return preg_replace_callback('/<h2([^>]*)>(.*?)<\/h2>/', function($matches) use (&$count) {
        $id = 'heading-' . $count++;
        return '<h2' . $matches[1] . ' id="' . $id . '">' . $matches[2] . '</h2>';
    }, $content);
}



// Custom CTAs

function cta_shopware_shortcode() {
    ob_start();

    // Directly get ACF fields for English (no variables)
    $title       = get_field("cta_title_en", 'option');
    $text        = get_field("cta_text_en", 'option');
    $button_text = get_field("cta_button_label_en", 'option');
    $button_link = get_field("cta_button_link_en", 'option'); // make sure this returns Link URL

    ?>
    <section class="cta-shopware">
        <div class="leftside">
            <?php if ($title): ?>
                <h4><?php echo esc_html($title); ?></h4>
            <?php endif; ?>

            <?php if ($text): ?>
                <p><?php echo esc_html($text); ?></p>
            <?php endif; ?>
        </div>
        <div class="rightside">
            <?php if ($button_text && $button_link): ?>
                <a href="<?php echo esc_url($button_link); ?>" class="cta-button">
                    <?php echo esc_html($button_text); ?>
                </a>
            <?php endif; ?>
        </div>
    </section>
    <?php

    return ob_get_clean();
}
add_shortcode('cta_shop2', 'cta_shopware_shortcode');


function cta_shopify_shortcode() {
    ob_start();

    // Directly get ACF fields for English (no variables)
    $title       = get_field("scta_title_en", 'option');
    $text        = get_field("scta_text_en", 'option');
    $button_text = get_field("scta_button_label_en", 'option');
    $button_link = get_field("scta_button_link_en", 'option'); // make sure this returns Link URL

    ?>
    <section class="cta-shopify">
        <div class="leftside">
            <?php if ($title): ?>
                <h4><?php echo esc_html($title); ?></h4>
            <?php endif; ?>

            <?php if ($text): ?>
                <p><?php echo esc_html($text); ?></p>
            <?php endif; ?>
        </div>
        <div class="rightside">
            <?php if ($button_text && $button_link): ?>
                <a href="<?php echo esc_url($button_link); ?>" class="cta-button">
                    <?php echo esc_html($button_text); ?>
                </a>
            <?php endif; ?>
        </div>
    </section>
    <?php

    return ob_get_clean();
}
add_shortcode('cta_shop3', 'cta_shopify_shortcode');


function cta_action_black_shortcode() {
    ob_start();

    // Get the ACF field for the content (WYSIWYG editor)
    $content = get_field('cta_action_black_content', 'option'); // Ensure you have this field set up as WYSIWYG in ACF

    if ($content):
    ?>
    <section class="cta-action-black">
        <div class="action-black">
            <?php echo wp_kses_post($content); // Allow safe HTML from WYSIWYG editor ?>
        </div>
    </section>
    <?php
    endif;

    return ob_get_clean();
}
add_shortcode('cta_shop1', 'cta_action_black_shortcode');































