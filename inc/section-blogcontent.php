<?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
  <?php
    // print author, name, date
    /*
    the_author();
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    echo ($fname . ' ' . $lname);
    echo (get_the_date('d/m/Y'));
    */
  ?>
  <?php /*
    $tags = get_the_tags();
    foreach($tags as $tag):
  ?>
    <a href="<?php get_tag_link($tag->term_id); ?>">
      <?php echo($tag -> name); ?>
    </a>
  <?php endforeach; */?>

  <?php the_content(); ?>
<?php endwhile; else: endif; ?>
