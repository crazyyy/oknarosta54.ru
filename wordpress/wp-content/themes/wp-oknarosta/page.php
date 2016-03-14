<?php get_header(); ?>
  <div id="title" class="titlebar clearfix">
    <div class="container_16">
      <div class="grid_16">
        <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
      </div>
    </div>
  </div>
  <div class="container_16 clearfix">
    <div id="content" class="grid_16 fullwidth " role="main">
      <article id="post-150" class="post-150 page type-page status-publish hentry">
        <header class="entry-header clearfix">
          <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <span class="entry-meta entry-meta-middle"></span>
        <div class="entry-content clearfix">
          <?php the_content(); ?>
        </div><!-- entry-content -->
      </article>
    </div>
  </div><!-- #container -->
<?php get_footer(); ?>
