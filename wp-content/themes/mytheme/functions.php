<?php 
   function add_my_scripts() {
        wp_enqueue_style('my_stylesheet', get_stylesheet_uri());
        wp_enqueue_script('my_javascript', get_stylesheet_directory_uri(). '/js/index.js');
   }
   add_action('wp_enqueue_scripts', 'add_my_scripts');
   
   function register_my_menus() {
        register_nav_menus(
            array(
                'header-menu' => __( 'Header Menu '),
                'extra-menu' => __( 'Extra Menu' ),
                'footer-menu' => __( 'Footer Menu' ),
                'news-menu' => __( 'News Menu' )
            )
        );
    }
    // add_action() executes code
    //First we have to say WHEN the code will execute
    //Then we have to say WHAT function will execute
    // add_action(when, what);
    add_action( 'init', 'register_my_menus');