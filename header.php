<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package overbrook
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1">
  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160" />

<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/MyFontsWebfontsKit.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/main.css" media="screen" />
  <!-- font awesome -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!-- GOOGLE FONTS -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,700,600' rel='stylesheet' type='text/css'>
<?php wp_enqueue_script("jquery"); ?>

<!-- Responsive-nav -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/responsive-nav/responsive-nav.css">
<script src="<?php bloginfo('template_directory'); ?>/js/responsive-nav/responsive-nav.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site wrapper">
	<?php do_action( 'before' ); ?>
	<header role="banner" class="theHeader">
		<!-- custom header -->

		<h2 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>


		<nav class="" role="navigation">
			<?php wp_nav_menu( array(
				'theme_location' => 'primary',
				//  'container_class' => 'nav-collapse poop',
			)
		); ?>
		</nav><!-- #site-navigation -->


	</header><!-- #masthead -->

	<div id="main" class="site-main">
