<div id="sidebar_one" class="grid_4 pull_12 widget-area blog-widgets" role="complementary">
  <ul class="xoxo">

    <li id="widget_voyage_recent_post-4" class="widget-container voyage_recent_post">
      <div class="clear"></div>

      <?php

$term = get_field('main_cat');



        //list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)
        $taxonomy     = 'categories';
        $orderby      = 'name';
        $show_count   = 0;      // 1 for yes, 0 for no
        $pad_counts   = 0;      // 1 for yes, 0 for no
        $hierarchical = 1;      // 1 for yes, 0 for no
        $title        = '';


        $top_term_id = $term->term_id;


        $args = array(
          'taxonomy'     => $taxonomy,
          'orderby'      => $orderby,
          'show_count'   => $show_count,
          'pad_counts'   => $pad_counts,
          'hierarchical' => $hierarchical,
          'hide_empty'         => 0,
          'child_of'           => $top_term_id,
          'title_li'     => $title
        );
      ?>

      <ul class="taxcats">
        <?php wp_list_categories( $args ); ?>
      </ul><!-- taxcats -->


    </li>


    <li class="widget-container widget_text">
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
