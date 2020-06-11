<?php get_header(); ?>
  <main>
    <section class="page-wrap">
      <div class="row">
        <div class="col-md-9 col-md-push-3">
          <?php get_template_part('inc/section','archive'); ?>
          <?php
            global $wp_query;
            $big = 999999999; // unlikely integer
            echo paginate_links( [
              'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ))),
              'format' => '?page=%#%',
              'current' => max( 1, get_query_var('paged') ),
              'total' => $wp_query->max_num_pages,
              ]
            )
          ?>
        </div>
        <div class="col-md-3 col-md-pull-9" id="sidebar"><?php get_sidebar();?></div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
