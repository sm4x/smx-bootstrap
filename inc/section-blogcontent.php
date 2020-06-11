<?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
  <?php
    // print author, name and date
    /*
    the_author();
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    echo ($fname . ' ' . $lname);
    echo (get_the_date());
    */
  ?>
  <?php the_content(); ?>
<?php endwhile; else: endif; ?>
