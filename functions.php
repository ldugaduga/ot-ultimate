<?php

require_once('wp_bootstrap_navwalker.php');

// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));

        register_sidebar(array(
            'name' => 'Footer Widgets One',
            'id'   => 'footer-widgets-one',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="text-uppercase">',
            'after_title'   => '</h4>'
        ));

         register_sidebar(array(
            'name' => 'Footer Widgets Two',
            'id'   => 'footer-widgets-two',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="text-uppercase">',
            'after_title'   => '</h4>'
        ));

          register_sidebar(array(
            'name' => 'Footer Widgets Three',
            'id'   => 'footer-widgets-three',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="text-uppercase">',
            'after_title'   => '</h4>'
        ));

         register_sidebar(array(
            'name' => 'Footer Widgets Four',
            'id'   => 'footer-widgets-four',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="text-uppercase">',
            'after_title'   => '</h4>'
        ));
    }

    // Declare menus
    if (function_exists('register_nav_menus')){
    register_nav_menus(
        array(
            'main_nav' => 'Main Navigation Menu',
            'footer_nav' => 'Footer Menu'
            )
        );    
     }

    // Add support for Featured Images
    if (function_exists('add_theme_support')) {
    // add_theme_support('post-thumbnails', array( 'post', 'page' ) );
    add_theme_support('post-thumbnails');
    }
    
    
    function responsive_video_shortcode( $atts ) {
    extract( shortcode_atts( array (
        'identifier' => ''
    ), $atts ) );
    return '<div class="well videowell"><div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="//www.youtube.com/embed/' . $identifier . '" allowfullscreen=""></iframe></div></div>';
	}
	add_shortcode ('responsive-video', 'responsive_video_shortcode' );
