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

$term = get_field('main_cat');

if( $term ): ?>

  <div style="background:#<?php echo get_field('term_color', $term); ?>">

    <h2><?php echo $term->name; ?></h2>
    <p><?php echo $term->description; ?></p>

  </div>

<?php endif; ?>








          <?php

            $posts = get_field('producters');

            if( $posts ): ?>
              <ul class="products-pr">
              <?php foreach( $posts as $post ): // variable must NOT be called $post (IMPORTANT) ?>
                  <li>
                    <a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a>
                    <span>Custom field from $post: <?php the_field('author', $p->ID); ?></span>
                  </li>
              <?php endforeach; ?>
              </ul><!-- products-pr -->
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
  <?php get_sidebar('products'); ?>
  </div><!-- #container -->
<?php get_footer(); ?>
