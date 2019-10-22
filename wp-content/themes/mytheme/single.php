<?php

/**
 * Default Single Post Template File
 * Title: My First Template
 */
get_header();

// IF there are posts do stuff
if (have_posts()) :

    //While we have content, set the content to a post
    while (have_posts()) : the_post(); ?>
        <!-- <?php echo the_post_thumbnail_url('medium'); ?> -->
        <?php echo the_post_thumbnail('thumbnail'); ?>
        <!-- <?php echo the_post_thumbnail('medium'); ?> -->
        <!-- <?php echo the_post_thumbnail('large'); ?> -->
        <!-- <?php echo the_post_thumbnail('full'); ?> -->
        <!-- <?php echo the_post_thumbnail(array(100, 300)); ?> -->

        <!-- <a href="<?php the_post_thumbnail_url(); ?>"> -->
            <!-- <?php the_post_thumbnail('thumbnail'); ?> -->
            <!-- <?php the_post_thumbnail('thumbnail'); ?> -->
        <!-- </a> -->

        <h1><?php the_title(); ?></h1>
        <p>Written By: <?php the_author(); ?> </p>

        <section class="page-content">
            <?php the_content(); ?>
        </section>


<?php
    endwhile;

// ELSE if no content, display "No posts found!"
else :
    echo "Sorry, come back later.";

endif;

get_footer();
