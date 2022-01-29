<?php
 
function resume_scripts() {
  
    wp_enqueue_style( 'resume-style',get_stylesheet_uri() );
     wp_enqueue_style( 'redsilverita-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i&display=swap&subset=latin-ext' );
}    
 
add_action( 'wp_enqueue_scripts', 'resume_scripts' );

define( 'DISALLOW_FILE_EDIT', true );//block theme editor



function resume_menus() {
  register_nav_menus( array(
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )  );
}
add_action( 'after_setup_theme', 'resume_menus' );

    add_theme_support( 'post-thumbnails' );
    add_image_size( 'special-thumbnail', 900, 300 );

function resume_widgets(){
    register_sidebar(array(
    'name' => 'New Widget Area',
    'id' => 'new_widget_area',
    'befor_widget' =>'<aside>',
    'after_widget' => '</aside>',
    'befor_title' => '<h3 class="widget_title">',
    'after_title' => '</h3>'

));
} 
  add_action ('widgets_init','resume_widgets');

    
 




?>