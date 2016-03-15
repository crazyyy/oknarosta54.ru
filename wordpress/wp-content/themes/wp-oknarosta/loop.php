<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class('looper'); ?>>

    <header class="entry-header">
      <span class="entry-meta entry-meta-top"><i class="icon-bookmark meta-summary-icon"></i><span class="entry-category"><span class="meta-cat-prep">Posted in </span><?php the_category(', '); ?></span>
      </span>

      <h2 class="entry-title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      </h2><!-- /post title -->

      </header>
    <div class="entry-content clearfix">
      <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php if ( has_post_thumbnail()) :
          the_post_thumbnail('medium');
        else: ?>
          <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>
      </a><!-- /post thumbnail -->
      <?php wpeExcerpt('wpeExcerpt40'); ?>
      <p><a href="<?php the_permalink(); ?>" class="more-link"><span class="more-link btn btn-small">Подробнее &gt;&gt;&gt;</span></a></p>
    </div>

    <footer class="entry-footer clearfix">
      <div class="entry-meta entry-meta-bottom"></div>
    </footer>
  </article>
<?php endwhile; else: ?>
  <article>
    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
  </article><!-- /article -->
<?php endif; ?>
