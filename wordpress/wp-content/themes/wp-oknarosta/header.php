<!doctype html>

<!--[if lt IE 7 ]> <html class="no-js ie6" lang="ru-RU"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="ru-RU"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="ru-RU"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="js textshadow">
<!--<![endif]-->
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>

</head>

<body <?php body_class(); ?>>
  <div id="wrapper" class="hfeed">
    <header id="masthead" class="site-header clearfix">
      <div class="screen-reader-text"><a href="#content" title="Skip to content">Skip to content</a></div>
      <div id="access" class="navbar navbar-no-background clearfix">
        <div class="navbar-inner">
          <div class="container_16"></div>
        </div>
      </div>
      <div id="branding" class="container_16 clearfix">
        <div class="grid_16 clearfix">
          <div id="header-widget" class="pull-right widget-area">
            <ul class="xoxo">
              <li id="execphp-2" class="widget-container widget_execphp">
                <div class="execphpwidget">
                  <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/main-img5.png" title="" border="0" height="125" width="1100"></a>
                </div>
              </li>
            </ul>
          </div>

          <hgroup>
            <h3 id="site-title"><a href="<?php echo home_url(); ?>" title="" rel="home"></a></h3>
            <h3 id="site-description"></h3>
          </hgroup>

        </div>
      </div>
      <div id="mainmenu" class="navbar clearfix">
        <div class="container_16">
          <div class="navbar-inner">
            <nav id="section-menu" class="section-menu">
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
              <div class="nav-collapse">
                <div class="section-menu-container">
                  <?php wpeHeadNav(); ?>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <div id="main">

      <?php get_template_part('breadcrumbs'); ?>
