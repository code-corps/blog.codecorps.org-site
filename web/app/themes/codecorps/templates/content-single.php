<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <h1 class="entry-title"><?php the_title(); ?></h1>

    <?php if ( has_post_thumbnail() ) {
        $img_id = get_post_thumbnail_id($post->ID);
        $alt = get_post_meta($img_id , '_wp_attachment_image_alt', true);
    ?>
    <div class="featured-image">
      <img src="<?php the_post_thumbnail_url('large') ?>" alt="<?php echo $alt ?>">
    </div>
    <?php } ?>

    <div class="blog-post">
      <?php get_template_part('templates/parts/social-share'); ?>
      
      <div class="post-dates">
        <p class="date-display">Posted: <?php the_date(get_option('date_format')); ?></p>
          <?php if (get_the_time() != get_the_modified_time())
          { ?>
        <p class="date-display">Updated: <?php the_modified_date(get_option('date_format')); ?></p>
          } ?>
      </div>
        
      <?php the_content(); ?>

      <?php get_template_part('templates/parts/social-share'); ?>

      <?php get_template_part('templates/parts/subscription-box'); ?>
        
      <?php get_template_part('templates/parts/disqus-comments'); ?>
    </div>

    <div class="sidebar">
      <div class="author-sidebar sidebar-content">
        <h5>Author</h5>
        <div class="avatar" style="background-image: url(<?php echo get_avatar_url(get_the_author_meta('ID'), 'medium'); ?>)"></div>
        <div class="info">
          <p class="name"><?php echo get_the_author(); ?></p>
          <p class="twitter">
            <a href="https://twitter.com/<?php the_author_meta('twitter'); ?>">@<?php the_author_meta('twitter') ?></a>
          </p>
          <p class="bio"><?php the_author_meta('description'); ?></p>
        </div>
      </div>
      <div class="categories-sidebar sidebar-content">
        <h5>Posted in</h5>
        <p>
          <?php
            $categories = get_the_category();
            $separator = ', ';
            $output = '';
            if ( ! empty( $categories ) ) {
                foreach( $categories as $category ) {
                    $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                }
                echo trim( $output, $separator );
            }
          ?>
        </p>
      </div>
      <div class="content">
        <a href="https://codecorps.org">
          <div class="sidebar-image"></div>
        </a>
        <h3>Help build open software for public good.</h3>
        <a href="https://codecorps.org" class="button default">Learn how to help</a>
      </div>
    </div>
  </article>
<?php endwhile; ?>

