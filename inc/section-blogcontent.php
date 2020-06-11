<?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
  <?php
    // AUTHOR, NAME, DATE
    /*
    the_author();
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    echo ($fname . ' ' . $lname);
    echo (get_the_date('d/m/Y'));
    */
  ?>

  <?php
    // TAGS
    /*
    $tags = get_the_tags();
    foreach($tags as $tag):
  ?>
      <a href="<?php get_tag_link($tag->term_id); ?>" class="badge badge-success">
        <?php echo($tag -> name); ?>
      </a>
    <?php endforeach; */
  ?>

  <?php
    // CATEGORIES
    /*
    $categories = get_the_category();
    foreach ($categories as $category):
  ?>
      <a href="<?php echo(get_category_link($category->term_id)); ?>" class="badge badge-success">
        <?php echo($category->name); ?>
      </a>
    <?php endforeach; */
  ?>

  <?php
    // CONTENT SECTION
    the_content();
  ?>

  <?php
    // Comments
    comments_template();
  ?>

<?php endwhile; else: endif; ?>
