<?php 
/*******************************************
		Adding CSS and JS Files
*******************************************/
function mohit_style_enqueue() {
	wp_enqueue_style('bootstrapcss',get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style('fontscss',get_template_directory_uri().'/css/font-awesome.css');
	wp_enqueue_style('stylecss',get_template_directory_uri().'/css/style.css');

	// wp_enqueue_style( 'load-fa-1', '//fonts.googleapis.com/css2?family=Bree+Serif&family=Open+Sans&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'mohit_style_enqueue' );
function mohit_script_enqueue() {
	wp_enqueue_script('jqueryfile', get_template_directory_uri().'/js/jquery-3.5.1.min.js', array('jquery'), '',true);
	wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '',true);
	wp_enqueue_script('swiperjs', get_template_directory_uri().'/js/swiper.js', array('jquery'), '',true);

}
	add_action( 'wp_enqueue_scripts', 'mohit_script_enqueue' );	
	
function mohit_theme_setup(){
	add_theme_support('menus');
	register_nav_menu( 'primary', 'Primary Header Navigation');
	register_nav_menu( 'secondary', 'Footer Navigation');
}
add_action('init','mohit_theme_setup'); 
/*******************************************
		Adding Theme Support Functions to Admin Panel
*******************************************/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support ('post-formats', array('aside', 'image', 'video'));

function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Custom', 'your-theme-domain' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );

?>
 