<?php
/**
 * Template Name: Feature-Page
 *
 * A custom page template for the feature page template.
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
<section class="feature-header">
	<nav class="main-nav">
	  <div class="logo"><?php bloginfo( 'name' ); ?></div>
	
	<?php wp_nav_menu( array(
	  'container' => 'ul',
	  'theme_location' => 'primary'
	  // 'container_class' => 'main-nav'
	)); ?>
	</nav>
	<h2><?php the_field(feature_title_rename) ?></h2>
</section>
<section class="features">
		
	
	<?php
	$postQuery = new WP_Query(array(
		'post_type' => 'post',
		'posts_per_page' => 5,
		'category_name' => 'feature'
	));
	if($postQuery->have_posts()) {
		while($postQuery->have_posts()) {
			$postQuery->the_post();
			?>
			<div class="feature-item">
				<h3 class = "feature-post-h3"> <?php the_title(); ?> </h3>
				 <?php the_content(); ?>
				<ul class = "tast-menu">
				<?php while( has_sub_field('tast_menu_type') ): ?>
				  	<li class = "tast-menu-item">
				  		<p class = "tasting_menu"><?php the_sub_field('tast_menu_name'); ?> . <?php the_sub_field('tast_menu_price'); ?></p>
				  		
				  	</li>
				  	<?php endwhile; ?>
				  	<!-- <?php //wp_reset_postdata(); ?> -->
				</ul>
				<footer>
					<p class = "tags">
					<?php 
					if ($all_the_tags);
					$all_the_tags = get_the_tags();
					foreach($all_the_tags as $this_tag) {
						if ($this_tag->name == "menu" ) {
					?>

					<span>New Menu Item</span>

					<?php 	} else if ($this_tag->name == "special" ) { ?>

					<span>Special</span>

					<?php 	} else if ($this_tag->name == "event" ) { ?>

					<span>Feature Event</span>

					<?php 	} else if ($this_tag->name == "tasting menu" ) { ?>

					<span>Tasting Menu</span>

					<?php 	} else {	
							// it's neither, do nothing
					?>
						<span>Summer Only</span>	
							<!-- not tagged as one or the other -->
					<?
						}
					}
					
					?></p>
	        <!-- <p><?php //comments_popup_link('Leave Us Some Words &raquo;', '1 Response &raquo;', '% Responses &raquo;'); ?></p> -->
	        <!-- <p><?php //edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?></p> -->
				</footer>
			</div>

			<?php
		}
	}	
 	wp_reset_postdata(); ?>
	<!-- <button class = "feature-post-button">More Features</button> -->
    <!-- <ul class="content "> -->
    		<?php //get_template_part( 'loop', 'index' );	?>
   <!--  </ul> --> <!-- /.content  -->

  <!-- </div> /.container -->
</section> <!-- /.main -->

<?php// get_footer(); ?>
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