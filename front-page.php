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
          <h1><?php the_title(); ?></h1>
          <?php get_template_part('inc/section','content'); ?>
        </div>
      </div>
      <?php get_search_form(); ?>
    </section>
  </main>
<?php get_footer(); ?>
