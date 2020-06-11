<?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
  BLOGCONTENT
  <?php the_content(); ?>
<?php endwhile; else: endif; ?>
