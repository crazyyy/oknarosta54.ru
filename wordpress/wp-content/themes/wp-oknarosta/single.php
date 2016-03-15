<?php get_header(); ?>

  <div class="container_16 clearfix">
    <div id="content" class="grid_12 push_4 " role="main">

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <header class="entry-header">
            <span class="entry-meta entry-meta-top"><i class="icon-bookmark meta-summary-icon"></i>
            <span class="entry-category"><span class="meta-cat-prep">Posted in </span><?php the_category(', '); ?></span>
            </span>
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </header>
          <div class="entry-content clearfix">
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
  <?php get_sidebar(); ?>
  </div><!-- #container -->
<?php get_footer(); ?>
