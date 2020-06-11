<?php get_header(); ?>
  <main>
    <section class="page-wrap">
      <h1><?php the_title(); ?></h1>
      <div class="row">
        <div class="col-md-9 col-md-push-3">
          <?php if (has_post_thumbnail): // DISPLAY IMAGE ?>
            <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">
          <?php endif; ?>
          <?php get_template_part('inc/section','blogcontent'); ?>
          <?php wp_link_pages(); ?>
        </div>
        <div class="col-md-3 col-md-pull-9" id="sidebar"><?php get_sidebar();?></div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
