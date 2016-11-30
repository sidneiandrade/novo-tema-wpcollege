<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php bloginfo('name'); ?><?php wp_title('-'); ?></title>
	<meta name="description" content="Site dos atletas e amigos do Morganti Ju-Jitsu do Estado da Bahia">
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title('-'); ?>"/>
	<meta property="og:description" content="Site dos atletas e amigos do Morganti Ju-Jitsu do Estado da Bahia"/>
	<meta property="og:url" content="<?php bloginfo('url')?>"/>
	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/og-image.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

  <!-- Fonts Google CSS -->
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,600,800' rel='stylesheet' type='text/css'>
  <!-- Fonts Awesome -->
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl-carousel/owl.theme.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl-carousel/owl.transitions.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-mobile.css">

</head>
<body>
  <header>
  <div class="row">
    <div class="container">
    <!-- Logo do site -->
    <div class="col-md-3">
      <div class="logo">
        <a href="<?php bloginfo('url'); ?>"><img src="<?php
          $logo = get_page_by_title('Pagina Principal');
          the_field('logo_do_site', $logo)
        ?>" /></a>
      </div>
    </div>
    <!-- Logo do site -->
    <!-- Menu do site -->
    <div class="col-md-9">
      <div class="menu-principal">
      <nav class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="bar1">
            <ul class="nav navbar-nav">
              <li>
                <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                    );
                ?>
              </li>
            </ul>
          </div>
      </nav>
      </div>
    </div>
    <!-- Menu do site -->
    </div>
  </div>

</header>
<?php wp_head(); ?>
