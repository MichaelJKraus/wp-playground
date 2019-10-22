<?php
/**
 * Default Template For Content
 */
?>

    <h2>
        <a href="<?php the_permalink(); ?>">
        <!-- <h1> Add Featured Image Here </h1> -->
        <p><?php the_post_thumbnail( 'thumbnail'); ?></p>
        <?php the_title(); ?>
        </a>
    </h2>

    <div class="content">
        <?php the_content(); ?>
    </div>