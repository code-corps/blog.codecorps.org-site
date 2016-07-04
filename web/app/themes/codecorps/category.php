<?php get_template_part('templates/category', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<div class="blog-posts">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile;

  the_posts_pagination ([
      'screen_reader_text' => ' ',
      'prev_text'          => '< Newer',
      'next_text'          => 'Older >'
  ]);

?>
</div>

<?php get_template_part('templates/parts/main-sidebar') ?>
