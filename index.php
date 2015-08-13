<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>




<section class="main menu-link">

  <!-- <div class="container"> -->

    <ul class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </ul> <!--/.content -->

<!--     <?php //get_sidebar(); ?> -->

  <!-- </div> /.container -->
</section> <!-- /.main -->

<?php get_footer(); ?>