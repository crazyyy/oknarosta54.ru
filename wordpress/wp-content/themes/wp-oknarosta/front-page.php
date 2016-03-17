<?php /* Template Name: Home Page */ get_header(); ?>

  <div class="container_16 clearfix">
    <div id="content" class="grid_16 fullwidth " role="main">
      <article id="post-2" class="post-2 page type-page status-publish hentry">
        <span class="entry-meta entry-meta-middle"></span>
        <div class="entry-content clearfix">
          <table style="width: 1120px; height: 254px;" align="center" border="0" cellpadding="9" cellspacing="0">
            <tbody>
              <tr>
                <td style="height: 140px; vertical-align: bottom;" align="center">
                  <?php echo do_shortcode('[contact-form-7 id="103" title="Вызвать замерщика"]'); ?>
                </td>
                <td style="width: 8px; text-align: center;"></td>
                <td style="width: 840px; text-align: center; vertical-align: top;" valign="middle">
                  <div style="width: 840px; height: 250px; box-shadow: 0 0 20px rgba(0,0,0,0.5); -moz-box-shadow: 0 0 20px rgba(0,0,0,0.5); -webkit-box-shadow: 0 0 20px rgba(0,0,0,0.5);">

                    <?php if( have_rows('top_slider') ): ?>
                      <div class="owl-carousel-top metaslider metaslider-flex ml-slider nav-hidden">

                        <?php while( have_rows('top_slider') ): the_row();
                          // vars
                          $image = get_sub_field('image');
                          $link = get_sub_field('link');
                        ?>
                          <div class="item">
                            <a href="<?php echo $link; ?>" target="_self">
                              <img draggable="false" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" height="250" width="840">
                            </a>
                          </div>
                        <?php endwhile; ?>

                      </div>
                    <?php endif; ?>

                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <?php the_field('top_nav_block'); ?>
          <table style="width: 1115px;">
            <tbody>
              <tr>
                <td colspan="2">
                  <h4 style="text-align: center;" class="test">
                    <?php the_field('content_title'); ?>
                  </h4>
                  <?php the_content(); ?>
                </td>
              </tr>
              <tr>
                <td style="width: 470px; text-align: center;">
                  <span style="color: #ff0000;"><strong>Отзывы о компании «Окна Роста»</strong></span>
                  <div style="width: 440px; height: 175px; box-shadow: 0 0 20px rgba(0,0,0,0.5); -moz-box-shadow: 0 0 20px rgba(0,0,0,0.5); -webkit-box-shadow: 0 0 20px rgba(0,0,0,0.5); overflow: hidden;">



                  <?php if( have_rows('reviews', 26) ): ?>
                    <div class="owl-carousel-bottom">
                      <?php while( have_rows('reviews', 26) ): the_row();

                        // vars
                        $name = get_sub_field('name');
                        $content = get_sub_field('content');
                        $date = DateTime::createFromFormat('Ymd', get_sub_field('date'));
                        $formateddate = $date->format('d.m.Y');

                        ?>

                          <div class="item">От:&nbsp;<?php echo $name; ?>
                            <br> Отзыв:
                            <br> <?php echo $content; ?>
                            <br>
                            <em><?php echo $formateddate; ?></em>
                          </div>


                      <?php endwhile; ?>
                    </div><!-- /.owl-carousel-bottom -->
                  <?php endif; ?>






                  </div>
                  <p class="read-all">
                    <a href="<?php echo home_url(); ?>/otzyvy.htm" class="su-button su-button-style-glass" target="_self">
                      <span> Читать все отзывы, оставить свой отзыв</span>
                    </a>
                  </p>
                </td>
                <td>
                <?php the_field('bottom_content'); ?>
                </td>
              </tr>
            </tbody>
          </table>
          <p>&nbsp;</p>
        </div>
        <footer class="entry-meta clearfix">

        </footer>
      </article>
    </div>
  </div>
  <!-- #container -->

<?php get_footer(); ?>
