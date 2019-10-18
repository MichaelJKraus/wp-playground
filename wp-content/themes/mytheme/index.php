<?php
    /**
     * Main Template File
     * Title: My First Template
     */
    get_header();

    // IF there are posts do stuff
    if (have_posts() ):

        //While we have content, set the content to a post
        while ( have_posts() ) : the_post();

            /**
             * If you want to override them include a file called 
             * content-__.php (where__) is the format name
             */
            get_template_part('content', get_post_format());
        endwhile;

    // ELSE if no content, display "No posts found!"
    else :
        echo "Sorry, come back later.";

    endif;
    
    get_footer();
?>

