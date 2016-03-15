<?php get_header(); ?>

  <div class="container_16 clearfix">
    <article class="template-intro clearfix grid_16">
      <h1 class="entry-title">Полезное</h1>
    </article>

      <div id="content" class="grid_16 voyage_recent_post portfolio column-3 masonry" role="main">


        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

          <div class="item masonry-brick">
            <article id="post-<?php the_ID(); ?>" <?php post_class('looper'); ?>>

              <a rel="nofollow" class="feature-img post-thumbnail wp-post-image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php if ( has_post_thumbnail()) :
                  the_post_thumbnail('medium');
                else: ?>
                  <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php endif; ?>
              </a><!-- /post thumbnail -->
              <header class="entry-header">
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
              </header>
              <div class="entry-summary clearfix">
                <?php wpeExcerpt('wpeExcerpt40'); ?>
                <p class="more-link-custom"><a class="btn btn-info" href="<?php the_permalink(); ?>">Подробнее &gt;&gt;&gt;</a></p>
              </div>
            </article>
          </div>

        <?php endwhile; endif; ?>

    </div>
  </div>
  <!-- #container -->

<?php get_footer(); ?>
