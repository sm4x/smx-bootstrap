<?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
  <?php
    // print author, name, date and tags

    the_author();
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    echo ($fname . ' ' . $lname);
    echo (get_the_date('d/m/Y'));
    $tags = get_the_tags();
    echo ($tags);
  ?>
  <?php the_content(); ?>
<?php endwhile; else: endif; ?>
