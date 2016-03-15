<?php /* Template Name: Reviews Page */ get_header(); ?>

      <div class="container_16 clearfix">
        <div id="content" class="grid_16 fullwidth " role="main">

          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

              <header class="entry-header clearfix">
                <h1 class="entry-title"><?php the_title(); ?></h1>
              </header>
              <span class="entry-meta entry-meta-middle"></span>
              <div class="entry-content clearfix">
                <?php the_content(); ?>
                <h4 style="text-align: center;"><strong>Отзывы о компании «Окна Роста»</strong></h4>


                <?php if( have_rows('reviews') ): ?>
                  <?php while( have_rows('reviews') ): the_row();

                    // vars
                    $name = get_sub_field('name');
                    $content = get_sub_field('content');
                    $date = DateTime::createFromFormat('Ymd', get_sub_field('date'));
                    $formateddate = $date->format('d.m.Y');


                    ?>

                      <div style="width: 1100px; height: 100%; color: #000; border: 8px #FFFFFF solid; -moz-border-radius: 10px; -webkit-border-radius: 10px; -khtml- border-radius: 10px; border-radius: 10px; padding: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.5); -moz-box-shadow: 0 0 20px rgba(0,0,0,0.5); -webkit-box-shadow: 0 0 20px rgba(0,0,0,0.5);">От:&nbsp;<?php echo $name; ?>
                        <br> Отзыв:
                        <br> <?php echo $content; ?>
                        <br>
                        <em><?php echo $formateddate; ?></em>
                      </div>
                      <hr>

                  <?php endwhile; ?>
                <?php endif; ?>

                <p><a name="forma"></a></p>
                  <h4 style="width: 1100px; height: 100%; color: #0000; border: 8px #FFFFFF solid; -moz-border-radius: 10px; -webkit-border-radius: 10px; -khtml- border-radius: 10px; border-radius: 10px; padding: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.5); -moz-box-shadow: 0 0 20px rgba(0,0,0,0.5); -webkit-box-shadow: 0 0 20px rgba(0,0,0,0.5);"><span style="color: #ff0000;">Написать отзыв:</span><br>
                    <?php echo do_shortcode('[contact-form-7 id="77" title="Добавить отзыв"]'); ?>
                  </h4>
                </div>

              </article>
            <?php endwhile; endif; ?>

        </div>
      </div>
      <!-- #container -->

<?php get_footer(); ?>
