<?php get_header(); ?>
    <main>
      <section class="page-wrap">
        <div class="container">
          <h1><?php the_title(); ?></h1>
          <?php get_template_part('inc/section','content'); ?>
        </div>
      </section>
    </main>
<?php get_footer(); ?>
