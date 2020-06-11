<?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
  <h3><?php the_title(); ?></h3>
  <?php the_excerpt(); ?>
  <a href="<?php the_permalink(); ?>">Read more</a>
<?php endwhile; else: endif; ?>
