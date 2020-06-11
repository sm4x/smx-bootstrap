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
          <h1>404 - Not Found!</h1>
          <p>Diese Seite ist nicht vorhanden.</p>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
