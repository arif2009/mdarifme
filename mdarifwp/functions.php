<?php

// Add RSS links to <head> section
automatic_feed_links();

// Load jQuery and register others JS & CSS
if (!is_admin())
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://code.jquery.com/jquery-latest.min.js", false, null);
    wp_enqueue_script('jquery');
    
    wp_register_script('youtubeJS', get_template_directory_uri()."/js/youtubeJS.js", array('jquery'), null);
    wp_register_script('commonJS', get_template_directory_uri()."/js/commonJS.js", array('jquery'), null,TRUE);
    wp_register_script('jQueryValidation', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") ."://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js", array('jquery'), null);
    wp_register_script('LightBox', get_template_directory_uri()."/js/jquery.lightbox-0.5-mod.js", array('jquery'), null,TRUE);
    
    //CSS
    wp_register_style('layout', get_template_directory_uri().'/css/layout.css', '', null);
    wp_register_style('miscMenu', get_template_directory_uri().'/css/miscellaneous.css', '', null);
    wp_register_style('embedFont', get_template_directory_uri().'/css/embed_font.css', '', null);
    wp_register_style('LightBox', get_template_directory_uri().'/css/jquery.lightbox-0.5.css', '', null,'screen');
}

// Clean up the <head>
function removeHeadLinks()
{
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
}

add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

// Declare sidebar widget zone
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name' => 'Sidebar Widgets',
        'id' => 'sidebar-widgets',
        'description' => 'These are widgets for the sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}

/*if (function_exists('register_nav_menus'))
{
    register_nav_menus(array(
        'main_nav' => 'Main Navigation Menu'
    ));
}*/

//Set Except link
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('read the rest') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

// Add tag & category metabox to page
function add_tag_metabox_to_page() {  
    // Add tag metabox to page
    register_taxonomy_for_object_type('post_tag', 'page'); 
    // Add category metabox to page
    //register_taxonomy_for_object_type('category', 'page');  
} 
add_action( 'admin_init', 'add_tag_metabox_to_page' );

//Adding Featured Image Support to Theme
function make_featured_image_support() {
    add_theme_support( 'post-thumbnails' );
    //set_post_thumbnail_size( 150, 150,FALSE );
}
add_action( 'after_setup_theme', 'make_featured_image_support' );

//For disqus comments
/*function disqus_embed($disqus_shortname) {
    global $post;
    wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}*/
