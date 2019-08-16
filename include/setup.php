<?php



function ese_theme_styles(){

	wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');
	wp_enqueue_style('main_css', get_template_directory_uri().'/assets/css/main.css');
	wp_enqueue_style('theme_mobile_css', get_template_directory_uri().'/assets/css/theme_mobile.css');
	wp_enqueue_style('fonte_awesome', 'https://use.fontawesome.com/releases/v5.4.2/css/all.css');
	wp_enqueue_style('owlcarousel_css', get_template_directory_uri().'/assets/plugins/owl/assets/owlcarousel/assets/owl.carousel.min.css');
	wp_enqueue_style('owl_theme_default_css', get_template_directory_uri().'/assets/plugins/owl/assets/owlcarousel/assets/owl.theme.default.min.css');
	
	wp_enqueue_script('main_js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '', true);
	wp_enqueue_script('owl_carousel', get_template_directory_uri().'/assets/plugins/owl/assets/owlcarousel/owl.carousel.js');
	wp_enqueue_script('mousewheel_js', get_template_directory_uri().'/assets/plugins/owl/assets/vendors/jquery.mousewheel.min.js');
	wp_enqueue_script('highlight_js', get_template_directory_uri().'/assets/plugins/owl/assets/vendors/highlight.js');
	wp_enqueue_script('app_js', get_template_directory_uri().'/assets/plugins/owl/assets/js/app.js');
	wp_enqueue_script('mask_js', get_template_directory_uri().'/assets/js/jquery.mask.js', array('jquery'), '', true);
	wp_enqueue_script('carousel_js', get_template_directory_uri().'/assets/js/carousel.js', array('jquery'), '', true);
	wp_enqueue_script('action_js', get_template_directory_uri().'/assets/js/action.js', array('jquery'), '', true);
}


function ese_after_setup(){

	add_theme_support('menus');
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-formats', array('video', 'audio'));

	register_nav_menu('primary', __('Primary Menu', 'ese'));
	register_nav_menu('secondary', __('Secondary Menu', 'ese'));
	register_nav_menu('footer-2', __('footer-2 Menu', 'ese'));
	register_nav_menu('topo', __('topo Menu', 'ese'));



}



function ese_widgets(){

	register_sidebar(array(

		'name' => __('sidebar', 'ese'),

		'id' => 'ci_sidebar',

		'description' => __('Sidebar do theme', 'ese'),

		'before_widget' => '<div id="%1$s" class="widget %2$s">',

		'after_widget' => '</div>',

		'before_title' => '<h4 class="title_widget">',

		'after_title' => '</h4>',

	));

}


function custom_excerpt_length( $length ) {
 return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length');
