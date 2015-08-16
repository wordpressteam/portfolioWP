<?php
/**
 * Template Name: About-Page
 *
 * A custom page template for the about page template.
 *
 * @package Starter_Theme
 */

//get_header(); ?>
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
<section class="about-header">
	<nav class="main-nav">
	  <div class="logo"><?php bloginfo( 'name' ); ?></div>
	
	<?php wp_nav_menu( array(
	  'container' => 'ul',
	  'theme_location' => 'primary'
	  // 'container_class' => 'main-nav'
	)); ?>
	</nav>
	<h2><?php the_field(about_page_rename) ?></h2>
</section>
<section class="about">

   <!--  <ul class="content menu-list">
    		<?php //get_template_part( 'loop', 'index' );	?>
    </ul> --> <!--/.content -->

	<div class="content about-para">
	  <?php // Start the loop ?>
	  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	    <!-- <h2><?php //the_title(); ?></h2> -->
	   <div class="about-story">
	  	<?php the_content(); ?>
	   </div>  

      <?php endwhile; // end the loop?>
	</div>

	   <?php while( has_sub_field('about_page') ): ?>
	     	<div class = "about <?php the_sub_field('about_title'); ?>">
	     		<h2><?php the_sub_field('about_title'); ?></h2>
	     		<p><?php the_sub_field('about_content'); ?></p>
	     		<p>" <?php the_sub_field('about_quote'); ?> "</p>
	     		<p> -- <?php the_sub_field('about_name'); ?></p>
	     		
	     	</div>
	     	<?php endwhile; ?>
	     	<!-- <?php //wp_reset_postdata(); ?>
	   
	   	

	  <?php //endwhile; // end the loop?>
	</div> <!-- /,content -->

  <!-- </div> /.container -->
</section> <!-- /.main -->

<?php //get_footer(); ?>
  <div class="copyright"> 
  <p>Copyright &copy; <?php bloginfo( 'name' ); ?> <?php echo date('Y'); ?></p>
  <p>Template Built by Ivy Wang. Powered by WordPress</p>
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>