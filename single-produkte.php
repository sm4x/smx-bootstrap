<?php get_header();
/*
Display Custom Post Type 'Produkte'
*/
?>
  <main>
    <section class="page-wrap">
      <h1><?php the_title(); ?></h1>
      <div class="row">
        <div class="col-lg-3">
          <?php if( is_active_sidebar('page-sidebar'))
            {
              dynamic_sidebar('page-sidebar');
            }
          ?>
        </div>
        <div class="col-lg-9">
          <h1><?php the_title(); ?></h1>
          <?php if (has_post_thumbnail): // DISPLAY IMAGE ?>
            <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">
          <?php endif; ?>
          <?php get_template_part('inc/section','produkte'); ?>
          <?php wp_link_pages(); // Link Pages that are separated with nextpage tag?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
