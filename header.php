<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic|Playfair+Display:400,700|Raleway:400,200,300|Abril+Fatface' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header class="main-header">
  <!-- <div class="container"> -->
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
    <!-- <h2>Insert Your tagline here ... ...</h2> -->
     <?php  dynamic_sidebar( 'tagline' ); ?>
    <nav class="main-nav">
      <div class="logo"><?php bloginfo( 'name' ); ?></div>
    
    <?php wp_nav_menu( array(
      'container' => 'ul',
      'theme_location' => 'primary'
      // 'container_class' => 'main-nav'
    )); ?>
    </nav>
  <!-- </div> /.container -->
</header><!--/.header-->

