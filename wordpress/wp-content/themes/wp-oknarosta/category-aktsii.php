<?php get_header(); ?>
  <div class="container_16 clearfix">
    <div id="content" class="grid_12 push_4 " role="main">
      <header class="page-header">
        <h1 class="page-title "><?php the_category(', '); ?></h1>
      </header>

      <?php get_template_part('loop'); ?>

    </div>
    <?php get_sidebar('category'); ?>

  </div><!-- #container -->

<?php get_footer(); ?>
