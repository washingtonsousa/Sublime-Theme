<?php


// Classes needed in order to make some special functions to work

 require("inc/mainClass.php");
 
 // Some few customizers in order to implement theme customization

 require("inc/special_customizers.php");

// Variables for default customizers

$custom_logo_defaults = array(

    'height'      => 60,
    'width'       => 330,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => false,

);


$bgdefaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => '',
	'default-position-x'     => '',
	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);

// It defines the amount of posts per page for which page, it is free to change or implement

function posts_on_homepage( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', '5' );
    }
	if ( $query->is_category() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', '5' );
    }
	if ( $query->is_archive() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', '5' );
    }
	
	if ( $query->is_search() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', '5' );
    }
}


function registerMenus() {

register_nav_menu('primary', __('mainMenu', 'wsxdevstudio'));

//register_nav_menu('secondary', __('secondMenu', 'wsxdevstudio'));

// register_nav_menu('third', __('thirdMenu', 'wsxdevstudio'));   

} 

function extScripts() {


wp_register_script('jquery1', get_template_directory_uri() .'/js/jquery.js', array(), '3', false);
wp_enqueue_script('jquery1');
wp_register_script('bootstrapjs', get_template_directory_uri() .'/js/bootstrap.js', array ( 'jquery1' ), '1.0',  false);
wp_enqueue_script('bootstrapjs');
// wp_register_script('less', get_template_directory_uri() .'/js/less.js', array(), '',  false);
// wp_enqueue_script('less');
wp_register_script('main', get_template_directory_uri() .'/js/main.js', array ( 'jquery1' ), '1.0',  false);
wp_enqueue_script('main');

// wp_register_style('styleless', get_template_directory_uri() .'/css/style.less', array(), false, 'all', false);
// wp_enqueue_style('styleless');
wp_register_style('font-awesome', get_template_directory_uri() .'/font-awesome/css/font-awesome.css', array(), '3', 'all', false);
wp_enqueue_style('font-awesome');
wp_register_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.css', array(), '3', 'all', false);
wp_enqueue_style('bootstrap');
wp_register_style('font-awesome', get_template_directory_uri() .'/font-awesome/css/font-awesome.css', array(), '3', 'all', false);
wp_enqueue_style('font-awesome');
wp_register_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.css', array(), '3', 'all', false);
wp_enqueue_style('bootstrap');


}


function sidebarCustom() {


$entity = new WP_SideBarFunctions();

$params = $entity::getSideBar(array("name" => __("WSX Main Side Bar", "wsxdevstudio"),
"id" => "right-side-bar-custom", 
"description" => __("WSX Main Bar", "wsxdevstudio")

));

register_sidebar($params);

$params = $entity::getSideBar(array("name" => __("Footer Bar", "wsxdevstudio"),
"id" => "footer_side_bar_1", 
"description" => __("Footer_Bar", "wsxdevstudio")

));

register_sidebar($params);


$params = $entity::getSideBar(array("name" => __("Footer Bar 2", "wsxdevstudio"),
"id" => "footer_side_bar_2", 
"description" => __("Footer Bar 2", "wsxdevstudio")

));

register_sidebar($params);

$params = $entity::getSideBar(array("name" => __("Footer Bar 3", "wsxdevstudio"),
"id" => "footer_side_bar_3", 
"description" => __("Footer Bar 3", "wsxdevstudio")

));

register_sidebar($params);


}


function themeListComments($comment, $args, $depth) {

require("inc/views/comments.php");
    

}

function make_stylesheet_less( $tag ) {
    return preg_replace( "/='stylesheet' id='styleless-css'/", "='stylesheet/less' id='styleless-css'", $tag );
}


function theme_setup(){
    load_theme_textdomain( 'wsxdevstudio', get_template_directory()."/languages/" );
}

function sliderTemplate() {

$slidesamount = get_theme_mod("banner_WSX_qtt");
if($slidesamount) { 
for ($i=1; $i<=$slidesamount; $i++) {
$slides[$i-1] = array(
"url" => wp_get_attachment_url(get_theme_mod("banner_WSX_option_".$i)),
"caption" => get_theme_mod("text_WSX_option_".$i),
"title" => get_theme_mod("title_WSX_option_".$i),
"link" => get_theme_mod("link_WSX_option_".$i));
}

require_once("inc/views/slider.php");
} 

}

// The breadcrumb template
function breadcrumb() {

require("inc/views/breadcrumb.php");
 
}

// Social Networks top header template

function SocialNetworkTopHeader() {

require("inc/views/social.php");

}


//default theme hooks


add_theme_support( 'custom-logo', $custom_logo_defaults);


add_theme_support( 'custom-background', $bgdefaults );

add_theme_support( 'post-thumbnails' );

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

set_post_thumbnail_size( 790, 600, array('center', 'center') );

add_action( 'pre_get_posts', 'posts_on_homepage' );

add_action('init', 'registerMenus');

add_action( 'widgets_init', 'sidebarCustom' );

add_action( 'after_setup_theme', 'theme_setup' );

 add_action ('wp_enqueue_scripts' , 'extScripts', 0);


wp_enqueue_style('style', get_stylesheet_uri(), 1);

//add_filter( 'style_loader_tag', 'make_stylesheet_less' );





add_action( 'customize_register', 'customizeOptions' ); // Callback of adding customizing controls

// Actions TO DO

add_action("breadcrumb", "breadcrumb");
add_action("slider", "sliderTemplate");
add_action("socialNet", "SocialNetworkTopHeader");




?>