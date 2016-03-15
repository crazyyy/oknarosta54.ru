<?php get_header(); ?>
      <div class="container_16 clearfix">
        <div id="content" class="grid_12 push_4 " role="main">
          <article id="post-432" class="post-432 page type-page status-publish hentry">
            <header class="entry-header clearfix">
              <h1 class="entry-title">Жалюзи</h1>
            </header>
            <span class="entry-meta entry-meta-middle"></span>
            <div class="entry-content clearfix">

              <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <div class="su-expand su-expand-collapsed su-expand-link-style-dotted">
                  <div class="su-expand-content" style="color:#333333;">
                    <h3><strong><?php the_title(); ?></strong></h3>
                    <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                      <?php if ( has_post_thumbnail()) :
                        the_post_thumbnail('medium');
                      else: ?>
                        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                      <?php endif; ?>
                    </a><!-- /post thumbnail -->
                    <?php wpeExcerpt('wpeExcerpt40'); ?>
                    <a href="<?php the_permalink(); ?>">Подробнее ...</a>
                  </div>
                </div>
              <?php endwhile; endif; ?>


            </div>
          </article>
        </div>

    <?php get_sidebar('products'); ?>

  </div>  <!-- #container -->
<?php get_footer(); ?>
