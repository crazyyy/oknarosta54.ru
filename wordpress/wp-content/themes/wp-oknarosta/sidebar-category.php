        <div id="sidebar_one" class="grid_4 pull_12 widget-area blog-widgets" role="complementary">
          <ul style="height: 603px;" class="xoxo">
            <li style="" id="widget_voyage_recent_post-5" class="widget-container voyage_recent_post">
              <div class="clear"></div>
              <h4 class="widget-title">Все текущие акции:</h4>
              <article id="post-7183" class="post-7183 post type-post status-publish format-standard hentry category-aktsii">
                <header class="entry-header">
                  <h2 class="entry-title"><a href="http://oknarosta54.ru/rasprodazha-zhalyuzi-s-neveroyatnoj-skidkoj-50/" title="Permalink to Распродажа жалюзи с невероятной скидкой 50%." rel="bookmark">Распродажа жалюзи с невероятной скидкой 50%.</a></h2>
                </header>
                <div class="entry-summary clearfix">
                  <p>ОГРАНИЧЕННОЕ&nbsp;ПРЕДЛОЖЕНИЕ! Распродажа жалюзи с невероятной скидкой&nbsp;50%</p>
                  <p class="more-link-custom"><a class="btn btn-info" href="http://oknarosta54.ru/rasprodazha-zhalyuzi-s-neveroyatnoj-skidkoj-50/">Подробнее &gt;&gt;&gt;</a></p>
                </div>
              </article>
              <article id="post-6275" class="post-6275 post type-post status-publish format-standard hentry category-aktsii">
                <header class="entry-header">
                  <h2 class="entry-title"><a href="http://oknarosta54.ru/gotovim-okna-k-zime/" title="Permalink to Чтобы зима стала теплее!" rel="bookmark">Чтобы зима стала теплее!</a></h2>
                </header>
                <div class="entry-summary clearfix">
                  <p class="more-link-custom"><a class="btn btn-info" href="http://oknarosta54.ru/gotovim-okna-k-zime/">Подробнее &gt;&gt;&gt;</a></p>
                </div>
              </article>
            </li>
            <li style="" id="text-17" class="widget-container widget_text">
              <div class="textwidget">
                <div class="wpcf7" id="wpcf7-f7177-o1" dir="ltr" lang="ru-RU">
                  <div class="screen-reader-response"></div>
                  <form name="" action="/category/aktsii/#wpcf7-f7177-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                    <div style="display: none;">
                      <input name="_wpcf7" value="7177" type="hidden">
                      <input name="_wpcf7_version" value="4.0.3" type="hidden">
                      <input name="_wpcf7_locale" value="ru_RU" type="hidden">
                      <input name="_wpcf7_unit_tag" value="wpcf7-f7177-o1" type="hidden">
                      <input name="_wpnonce" value="c2684c9b98" type="hidden">
                    </div>
                    <div style="margin:0px 0px 0px 10px; "><strong>ОТПРАВИТЬ ЗАПРОС</strong>
                      <br>
                      <br>
                      <span class="wpcf7-form-control-wrap your-name"><input name="your-name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Ваше имя*" type="text"></span>
                      <br>
                      <span class="wpcf7-form-control-wrap text-662"><input name="text-662" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Ваш телефон*" type="text"></span>
                      <br>
                      <span class="wpcf7-form-control-wrap menu-861"><select name="menu-861" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option selected="selected" value="Правый берег">Правый берег</option><option value="Левый берег">Левый берег</option><option value="Академгородок">Академгородок</option><option value="Бердск">Бердск</option></select></span>-удобный
                      офис?
                      <br> Вы хотите заказать:
                      <br>
                      <span class="wpcf7-form-control-wrap menu-597"><select name="menu-597" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option selected="selected" value="жалюзи/ткани">жалюзи/ткани</option><option value="пластиковые окна">пластиковые окна</option><option value="роллеты/рафшторы">роллеты/рафшторы</option><option value="ворота/автоматика">ворота/автоматика</option><option value="шлагбаумы">шлагбаумы</option></select></span>-выберите
                      <br> &nbsp;&nbsp;
                      <input value="&lt;&lt;&lt; Отправить &gt;&gt;&gt;" class="wpcf7-form-control wpcf7-submit" type="submit"><img style="visibility: hidden;" alt="Отправка..." src="page-action-cat_files/ajax-loader.gif" class="ajax-loader"></div>
                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                  </form>
                </div>
              </div>
            </li>
          </ul>
        </div>

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
