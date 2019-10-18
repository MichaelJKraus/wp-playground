<?php 
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