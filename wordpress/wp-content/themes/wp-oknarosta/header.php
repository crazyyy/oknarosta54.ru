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

  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery_form.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery_infinite_scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.colorbox.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/prettify.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/voyage.js"></script>

  <script>
    jQuery(document).ready(function($) {
      $(".carousel").carousel({
        interval: 8000
      })
    });
  </script>
<!--   <script>
    var metaslider_448 = function($) {
      $('#metaslider_448').flexslider({
        slideshowSpeed: 6000,
        animation: "slide",
        controlNav: false,
        directionNav: true,
        pauseOnHover: true,
        direction: "horizontal",
        reverse: false,
        animationSpeed: 600,
        prevText: "&lt;",
        nextText: "&gt;",
        easing: "linear",
        slideshow: true
      });
    };
    var timer_metaslider_448 = function() {
      var slider = !window.jQuery ? window.setTimeout(timer_metaslider_448, 100) : !jQuery.isReady ? window.setTimeout(timer_metaslider_448, 1) : metaslider_448(window.jQuery);
    };
    timer_metaslider_448();
  </script>
  <script>
    var metaslider_2551 = function($) {
      $('#metaslider_2551').flexslider({
        slideshowSpeed: 6000,
        animation: "slide",
        controlNav: false,
        directionNav: false,
        pauseOnHover: true,
        direction: "horizontal",
        reverse: false,
        animationSpeed: 600,
        prevText: "&lt;",
        nextText: "&gt;",
        easing: "linear",
        slideshow: true
      });
    };
    var timer_metaslider_2551 = function() {
      var slider = !window.jQuery ? window.setTimeout(timer_metaslider_2551, 100) : !jQuery.isReady ? window.setTimeout(timer_metaslider_2551, 1) : metaslider_2551(window.jQuery);
    };
    timer_metaslider_2551();
  </script> -->

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
                  <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/main-img4.png" title="" border="0" height="124.79414455627" width="1100"></a>
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
