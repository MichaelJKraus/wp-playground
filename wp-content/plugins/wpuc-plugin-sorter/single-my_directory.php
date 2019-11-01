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



// add_action('the_content', 'my_thank_you_text');

// function my_thank_you_text($content)
// {
//     return $content .= '<p>Thank you for reading!</p>';
// };
    /** 
     * Default Single Post Template File
    */
    get_header();
    // IF there are posts do stuff
    if ( have_posts() ) :
    // While we have content, set content to a post
    while ( have_posts() ) : the_post(); ?>
      <div class="wrapper">
          <a href="<?php the_post_thumbnail_url();?> ">
              <?php the_post_thumbnail( 'thumbnail' ); ?>
          </a>
          
          <a href="<?php the_post_thumbnail_url();?>" class="font-family caption">
            <?php the_post_thumbnail_caption(); ?>
          </a>
        
    
      
          <h1 class="the-title font-family"> <?php the_title(); ?> </h1>
          <?php echo get_post_meta( get_the_ID(), 'website_url', true ); ?>
          <h2>
          <?php echo get_post_meta( get_the_ID(), 'company_address', true ); ?>
          </h2>
          
          <section class="content font-family post-content">
              <?php the_content(); ?>
          </section>
        </div>
      <?php  
    endwhile;
    //Else if no content, display "No posts found"
    else : 
        echo "Sorry, check back later.";
    endif;
    get_footer();
?>