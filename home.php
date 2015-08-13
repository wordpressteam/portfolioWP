<?php
/**
 * Template Name: Home-Page
 *
 * A custom page template for the home page template.
 *
 * @package Starter_Theme
 */

get_header(); ?>
<section class="feature-link">
	<?php
	 global $post;
	 $myposts = get_posts('numberposts=1&categoryname=feature');
	 foreach($myposts as $post) :
	 ?>
	<h3 class = "feature-post-h3"><a href="#"> <?php echo $post->post_title; ?> </a></h3>
	<p class = "post feature-post"> <?php echo $post->post_content; ?> </p>
	<?php endforeach; ?>
	<?php wp_reset_postdata(); ?>
	<!-- <button class = "feature-post-button">More Features</button> -->
	<a href="<?php echo get_page_link(14); ?>" class = "feature-post-button">More Features</a>
	
</section>
<section class="about-link">
	<h3 class = "about-story-h3"><a href="<?php echo get_page_link(10); ?>">Our Story</a></h3>
	<p class = "about-story-tag">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, voluptas! </p>
</section>

<section class="main menu-link">
	<h3> Menu </h3>
  <!-- <div class="container"> -->
	<ul class = "menu-list">
		<?php while( has_sub_field('menu_type') ): ?>
		  	<li class = "menu-item">
		  		<h5 class = "post menu-post-h5"><?php the_sub_field('menu_heading'); ?></h5>
		  		<div class="menu-text-list">
		  			<?php while( has_sub_field('menu_items') ): ?>
		  			<p class="menu-text-item"><span class = "food"><?php the_sub_field('food_name'); ?></span>  <span class = "price"><?php the_sub_field('food_price'); ?></span></p>
		  			<p class="description"><?php the_sub_field('food_description'); ?></p>

		  			<?php endwhile; ?>
		  		</div>
		  	</li>

		<?php endwhile; ?>
	</ul>
   <!--  <ul class="content menu-list">
    		<?php //get_template_part( 'loop', 'index' );	?>
    </ul> --> <!--/.content -->

<!--     <?php get_sidebar(); ?> -->

  <!-- </div> /.container -->
</section> <!-- /.main -->

<?php get_footer(); ?>