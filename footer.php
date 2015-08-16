<footer  id = "contactscroll" class = "main-footer">
  <!-- <div class="container">
    <p>&copy; HackerYou <?php echo date('Y'); ?></p>
  </div> -->
  <div class="footer-wrapper">
  	
  	<div class="footerDiv hours">
  		<h3>Hours</h3>
 		 <?php  dynamic_sidebar( 'hours' ); ?>
  		<!-- <h4>BAR</h4>
  		<p>Monday – Sunday 4pm – 1am</p>
  		<h4>DINING</h4>
  		<p>Tuesday – Sunday 5:30pm – 11pm</p> -->


  	</div>
    <div class="footerDiv social">
      <h3>Social</h3>
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'social',
          'echo'            => true,
          'before'          => '<p>',
          'after'           => '</p>',
          'link_before'     => '<p>',
          'link_after'      => '</p>'
        // 'container_class' => 'main-nav'
      )); ?>
    <!--  <p><a href=""><i class="fa fa-facebook"></i></a></p>
      <p><a href=""><i class="fa fa-twitter"></i></a></p>
      <p><a href=""><i class="fa fa-google-plus"></i></a></p>
      <p><a href=""><i class="fa fa-instagram"></i></a></p> -->
    </div>
  	<div class="footerDiv contact">
  		<h3>contact us</h3>
 		 <?php  dynamic_sidebar( 'contact' ); ?>
  		<!-- <h4>Address</h4>
  		<p class = "address"> 100 Address Ave. Toronto. On. M1M 1N1</p>
  		<h4>Email</h4>
  		<p class = "email"> viziarestaurante@restaurante.com</p>
  		<h4>Phone</h4>
  		<p class = "phone"> 416.123.4567</p> -->
  	</div>
 
  </div>
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