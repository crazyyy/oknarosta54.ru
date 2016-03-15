<div id="sidebar_one" class="grid_4 pull_12 widget-area blog-widgets" role="complementary">
  <ul class="xoxo">

    <li id="widget_voyage_recent_post-4" class="widget-container voyage_recent_post">
      <div class="clear"></div>
      <h4 class="widget-title">Полезно знать!</h4>

      <?php
        $args = array(
        'cat' => '8',
        'post_type' => 'post',
        'posts_per_page' => 4
        );
        query_posts($args);
      ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix looper'); ?>>
          <!-- post thumbnail -->
          <a rel="nofollow" class="feature-img post-thumbnail wp-post-image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php if ( has_post_thumbnail()) :
              the_post_thumbnail('medium');
            else: ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
            <span class="category-hl">Отдыхаем в Украине</span>
          </a><!-- /post thumbnail -->
          <header class="entry-header">
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
          </header>
          <div class="entry-summary clearfix">
            <?php wpeExcerpt('wpeExcerpt10'); ?>
            <p class="more-link-custom"><a class="btn btn-info" href="<?php the_permalink(); ?>">Подробнее &gt;&gt;&gt;</a></p>
          </div>
        </article>
      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
    </li>


    <li id="text-17" class="widget-container widget_text">
      <div class="textwidget">
        <?php echo do_shortcode('[contact-form-7 id="72" title="Полезный виджет"]'); ?>
      </div>
    </li>

    <?php if ( is_active_sidebar('widgetarea1') ) : ?>
      <?php dynamic_sidebar( 'widgetarea1' ); ?>
    <?php else : ?>

    <?php endif; ?>

  </ul>
</div>
