<?php 
//Register Custom Navigation Walker
require_once('class-wp-bootstrap-navwalker.php');

//Theme support
function cleancut_theme_support(){
	//nav Menus
	register_nav_menus(array(
		'primary' => __('Primary Menu'), 
		'footer' => __('Footer Menu') 
	));

	//Post Thumbnail
	add_theme_support('post-thumbnails');

	//Post Format Support
	add_theme_support('post-formats', array('aside', 'gallery'));




}
add_action('after_setup_theme',	'cleancut_theme_support');


//widget Location

function init_widgets($id){
	register_sidebar( array(
		'name' => 'Sidebar', 
		'id' => 'sidebar', 
		'before_widget' => '<div class="bg-light text-dark p-4 animate__animated animate__fadeInRight">', 
		'after_widget' => '</div>', 
		'before_title' => '<h3>', 
		'after_title' => '</h3>', 
	));


	register_sidebar( array(
		'name' => 'SubNavBar', 
		'id' => 'subnavbar', 
		'before_widget' => '<div class="sub-nav">', 
		'after_widget' => '</div>', 
		'before_title' => '<div class="d-none">', 
		'after_title' => '</div>', 
	));


	register_sidebar( array(
		'name' => 'Bottom', 
		'id' => 'bottom', 
		'before_widget' => '<div class="section-a animate__animated animate__fadeInUp">
	<div class="container">', 
		'after_widget' => '</div></div>', 
		'before_title' => '<div class="d-none">', 
		'after_title' => '</div>', 
	));

}add_action('widgets_init', 'init_widgets');

//Get top parent page
function get_top_parent(){
	global $post;
	if($post -> post_parent){
		$ancestors =  array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}
	return $post -> ID; 
}


//Add Customizer Functionality
require get_template_directory(). '/inc/customizer.php';
