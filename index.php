<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>


<section class="feature-link">
	<h3 class = "feature-post-h3"><a href="#">Check Out Our Summer Special Events</a></h3>
	<p class = "post feature-post">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi modi doloribus veniam illo facilis dignissimos quia, voluptatem esse ipsam facere quod ipsum voluptatibus natus neque ratione quis! Hic, sit, ut.</p>
	<p class = "post feature-post">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi modi doloribus veniam illo facilis dignissimos quia, voluptatem esse ipsam facere quod ipsum voluptatibus natus neque ratione quis! Hic, sit, ut.</p>
	<button class = "feature-post-button">More Features</button>
	
</section>
<section class="about-link">
	<h3 class = "about-story-h3"><a href="#">Our Story</a></h3>
	<p class = "about-story-tag">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, voluptas! </p>
</section>

<section class="main menu-link">
	<h3> Menu </h3>
  <!-- <div class="container"> -->

    <ul class="content menu-list">
    		<?php get_template_part( 'loop', 'index' );	?>
    </ul> <!--/.content -->

<!--     <?php get_sidebar(); ?> -->

  <!-- </div> /.container -->
</section> <!-- /.main -->

<?php get_footer(); ?>