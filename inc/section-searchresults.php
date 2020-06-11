<?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
  <div class="card mb-3">
    <div class="card-body d-flex justify-content-center align-items-center">
      <?php if (has_post_thumbnail): // DISPLAY IMAGE ?>
        <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 mr-4 img-thumbnail">
      <?php endif; ?>
      <div class="blog-content">
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="btn">Read more</a>
      </div>
    </div>
  </div>
<?php endwhile; else: ?>
  <p>Leider keine Ergebnisse für "<?php echo(get_search_query()); ?>"</p>
<?php endif; ?>
