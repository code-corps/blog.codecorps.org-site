<div class="post">
   <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
   <a href="<?php the_permalink(); ?>">
      <?php if ( has_post_thumbnail() ) {
                $img_id = get_post_thumbnail_id($post->ID);
            ?><div class="featured-image">
                <img src="<?php the_post_thumbnail_url('large') ?>" alt="<?php echo get_post_meta($img_id , '_wp_attachment_image_alt', true); ?>">
                </div>
            <?php } ?>
   </a>
   <div class="post-meta">
      <div class="author">
        <div class="author-image" style="background-image: url(<?php echo get_avatar_url(get_the_author_meta('ID'), 'medium'); ?>)"></div>
        <div class="author-name"><?php echo get_the_author(); ?></div>
      </div>
      <div class="categories">
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
      </div>
   </div>
   <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
</div>
