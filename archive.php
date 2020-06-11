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
          <h1><?php echo(single_cat_title()); ?></h1>
          <?php get_template_part('inc/section','archive'); ?>
          <?php // advanced pagination
            /*
            global $wp_query;
            $big = 999999999; // unlikely integer
            echo paginate_links( [
              'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ))),
              'format' => '?page=%#%',
              'current' => max( 1, get_query_var('paged') ),
              'total' => $wp_query->max_num_pages,
              ]
            )*/
          ?>
          <?php previous_posts_link(); ?>
          <?php next_posts_link(); ?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
