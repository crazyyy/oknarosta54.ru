<?php /* Template Name: Products Page */ get_header(); ?>
  <div class="container_16 clearfix">
    <div id="content" class="grid_12 push_4 " role="main">

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </header>
          <div class="entry-content clearfix">

          <?php
            $posts = get_field('producters');
            if( $posts ): ?>
              <ul class="products-listers">
              <?php foreach( $posts as $post ): // variable must NOT be called $post (IMPORTANT) ?>
                <li>
                  <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php if ( has_post_thumbnail()) :
                      the_post_thumbnail('medium');
                    else: ?>
                      <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                    <?php endif; ?>
                  </a><!-- /post thumbnail -->
                </li>
              <?php endforeach; ?>
              </ul><!-- products-listers -->
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <?php the_content(); ?>
          </div>

          <footer class="entry-footer clearfix">
            <?php edit_post_link(); ?>
          </footer>

        </article>
      <?php endwhile; else: ?>
        <article>
          <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
        </article>
      <?php endif; ?>

    </div>
  <?php get_sidebar('products-cat'); ?>
  </div><!-- #container -->
<?php get_footer(); ?>
