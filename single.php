<?php get_header(); ?>
  <main>
    <section class="page-wrap">
      <h1><?php the_title(); ?></h1>
      <div class="row">
        <div class="col-md-9 col-md-push-3">
          <?php if (has_post_thumbnail)
            {
              echo('This has a featured image');
            }
          ?>
          <?php get_template_part('inc/section','blogcontent'); ?>
          <?php wp_link_pages(); ?>
        </div>
        <div class="col-md-3 col-md-pull-9" id="sidebar"><?php get_sidebar();?></div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
