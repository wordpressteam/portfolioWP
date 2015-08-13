<?php
/**
 * Template Name: About-Page
 *
 * A custom page template for the about page template.
 *
 * @package Starter_Theme
 */

get_header(); ?>
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
	</div> <!-- /,content -->

  <!-- </div> /.container -->
</section> <!-- /.main -->

<?php get_footer(); ?>