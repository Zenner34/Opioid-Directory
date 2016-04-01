<?php
/*
 * Author: Dakota Zenner
 * Date: 3/28/2016
 * Project: Simple Opioid Facility Treatment Directory
 */
?>
<!DOCTYPE html>
  <html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?>  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/ico/favicon.png">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/html5shiv.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
  </head>

  <!-- NAVBAR
  ================================================== -->

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <?php wp_nav_menu( array(
                  'theme_location' => 'header-menu',
                  'depth'      => 10,
                  'container'  => '',
                  'container_class'  => '',
                  'menu_class' => 'nav navbar-nav',
                   'walker' => new twitter_bootstrap_nav_walker(),
                  )
                 );
                ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>