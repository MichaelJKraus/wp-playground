<?php

/**
 * Plugin Name: WordPress Urgent Care Plugin Sorter
 * Plugin URI: https://www.wordpressurgentcare.com
 * Description: WordPress Urgent Cares first in-house custom plugin. The plugin is
 * designed to sort and filter WordPress Plugins 
 * Version: 1.0
 * Author: Michael J. Kraus
 * Author URI: http://www.worpressurgentcare.com
 */

/**
 * Class wp-filter contains the filter for Author, Keyword and Tag
 * Class column-updated shows how long ago updated
 * Updated Options: 1 week ago, 1 month ago, 2 months ago, 3 months ago, 4 months ago,
 * 5 months ago, 6 months ago, 7 months ago, 8 months ago, 9 months ago, 10 months ago
 */



add_action('the_content', 'my_thank_you_text');

function my_thank_you_text($content)
{
    return $content .= '<p>Thank you for reading!</p>';
};


 function register_custom_post_type() {
        $args = [
            'labels' => [
                'name' => 'Directory', 
                'singular_name' => 'Directory Listing', 
                'add_new_item' => 'Add Directory Listing'
            ],
            'public' => true, 
            'publicly_queryable' => true,
            'query_var' => true,
            'supports' => [
                'title', 'thumbnail', 'editor'
            ],
            'taxonomies' => [],
        ];
        // Register our custom directory usimg the Args above
        register_post_type( 'my_directory', $args );
     }
    // Finding the Template file\directory
    function custom_include_template_function ( $template_path ) {
        if ( get_post_type() == 'my_directory' ) {
            if ( is_single() ) {
                if ( locate_template( 'single-my_directory.php' ) ) {
                    $template_path = locate_template( 'single-my_directory.php' );
                } else {
                    $template_path = plugin_dir_path( __FILE__ ) . '/single-my_directory.php';
                }
            }
        }
        return $template_path;
    }
    /**
     * Registering Custom Meta Boxes
     */
    function register_custom_meta_boxes() {
        add_meta_box( 'my_custom_meta_box', 'Business Information', 'custom_meta_box_display', 'my_directory', 'normal', 'high' );
    }
    /**
     * Displaying Custom Meta Boxes
     */
    function custom_meta_box_display( $custom_post ) {
        // Set Hidden Validation
        echo '<input type="hidden" name="custom_noncename" id="custom_noncename" value="' . wp_create_nonce( plugin_basename(__FILE__) ) . '" />'; 
        echo '<p> <label for="website_url"> Website URL </label> <br/>';
        echo '<input type="text" name="website_url" value="' . wp_kses(get_post_meta($custom_post->ID, 'website_url', true) ) . '" /> </p>';
        echo '<p> <label for="company_address"> Company Address </label> <br/>';
        echo '<input type="text" name="company_address" value="' . wp_kses(get_post_meta($custom_post->ID, 'company_address', true) ) . '" /> </p>';
    }
    add_action( 'add_meta_boxes', 'register_custom_meta_boxes' );
    /**
     * Saving Custom Post Data
     */
    function custom_save_postdata( $custom_post_id, $custom_post ) {
        $nonce = isset( $_POST['custom_noncename'] ) ? $_POST['custom_noncename'] : 'add a random string here';
        if ( !wp_verify_nonce ($nonce, plugin_basename( __FILE__))) {
            return $custom_post->ID;
        }
        /* Can edit the post */
        if( !current_user_can( 'edit_post', $custom_post_id) )
            return $custom_post_id;
        $meta_keys = [
            'website_url' => 'url',
            'company_address' => 'text',
        ];
        foreach ( $meta_keys as $meta_key => $type ) {
            if (isset($_POST[$meta_key])) {
                if ( $type == 'url' ) {
                $value = htmlspecialchars($_POST[$meta_key]);
            } 
            if( $type == 'text' ) {
                $value = $_POST[$meta_key];
            }
            update_post_meta($custom_post_id, $meta_key, $value );
           }
        }
    }
    add_action( 'save_post', 'custom_save_postdata' );
     //add Actions
     //first when then what
     add_action( 'init', 'register_custom_post_type', 0 );
     // Add Filter
     // Filters change information
     add_filter( 'template_include', 'custom_include_template_function', 99 );