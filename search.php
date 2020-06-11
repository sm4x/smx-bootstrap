<?php get_header(); ?>
  <main>
    <section class="page-wrap">
      <div class="row">
        <div class="col-lg-3">
          <?php if( is_active_sidebar('page-sidebar'))
            {
              dynamic_sidebar('page-sidebar');
            }
          ?>
        </div>
        <div class="col-lg-9">
          <h2>Suchergebnisse</h2>
          <?php get_template_part('inc/section','archive'); ?>
          <?php previous_posts_link(); ?>
          <?php next_posts_link(); ?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
