<?php
include("inc/acf.php");
$version = wp_get_theme()->get("Version");

function theme_support(){
    add_theme_support("title-tag");
}

function theme_register_style(){
    wp_enqueue_style("main-css", get_template_directory_uri()."/style.css",array(), $GLOBALS["version"], "all");
    wp_enqueue_style("Bootstrap", get_template_directory_uri()."/bin/bootstrap-5.1.0/css/bootstrap.min.css", array(), "5.1.0");
    wp_enqueue_style("Font Awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css", array());

}

function theme_register_scripts(){
    wp_enqueue_script("jQuery", get_template_directory_uri()."/bin/jQuery/jquery-3.6.0.min.js", array(), "3.6.0", true);
    wp_enqueue_script("main", get_template_directory_uri()."/assets/js/main.js",array(), $GLOBALS["version"], true);  
    wp_enqueue_script("Bootstrap", get_template_directory_uri()."/bin/bootstrap-5.1.0/js/bootstrap.min.js", array(), "5.1.0", true); 
}

add_action("wp_enqueue_scripts", "theme_register_style");
add_action("wp_enqueue_scripts", "theme_register_scripts");
add_action("after_setup_theme", "theme_support");
add_theme_support( 'post-thumbnails' );


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu'),
) );

function theme_register_cpt(){
    $destinos = array(

        "labels" => array(
            "name" => "Destinos",
            "singular_name" => "Destino",
        ),

        "hierarchical" => true,
        "public" => true,
        "has_archive" => true,
        "menu_icon" => "dashicons-airplane",
        "supports" => array("title", "editor", "author", "thumbnail", "custom-fields"),
    );

    $tours = array(

        "labels" => array(
            "name" => "Tours",
            "singular_name" => "Tour",
        ),

        "hierarchical" => true,
        "public" => true,
        "has_archive" => true,
        "menu_icon" => "dashicons-palmtree",
        "supports" => array("title", "editor", "author", "thumbnail", "custom-fields"),
    );

    register_post_type("destino", $destinos);
    register_post_type("tour", $tours);
}

add_action("init", "theme_register_cpt");