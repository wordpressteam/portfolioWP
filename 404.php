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

<section class="page_not_found">
  <div class="page-wrapper">

    <h2>404</h2>
    <p>Sorry, We Dont Serve Food Here. <br>Looks like you're lost.</p>
    <!-- <p></p> -->
    <?php //get_search_form(); ?>
	<a href=" <?php echo home_url() ?> ">Take Me Home</a>
  </div> <!-- /.container -->
</section> <!-- /.main -->
<?php wp_footer(); ?>
</body>
</html>