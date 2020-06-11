<?php get_header(); ?>
  <main>
    <section class="page-wrap">
        <div class="col-lg-9">
          <h1><?php echo(single_cat_title()); ?></h1>
          <?php get_template_part('inc/section','archive'); ?>
          <?php previous_posts_link(); ?>
          <?php next_posts_link(); ?>
        </div>
    </section>
  </main>
<?php get_footer(); ?>
