<?php
/**
 * Template Name: Feature-Page
 *
 * A custom page template for the feature page template.
 *
 * @package Starter_Theme
 */

get_header(); ?>
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
				<p class = "post feature-post"> <?php the_content(); ?> </p>
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

<?php get_footer(); ?>