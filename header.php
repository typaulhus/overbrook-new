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
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/MyFontsWebfontsKit.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/main.css" media="screen" />
  <!-- font awesome -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!-- GOOGLE FONTS -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,700,600' rel='stylesheet' type='text/css'>
<?php wp_enqueue_script("jquery"); ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site wrapper">
	<?php do_action( 'before' ); ?>
	<header role="banner" class="theHeader">
		<!-- custom header -->

		<h2 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>


		<nav role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

		<div class="wwd_box">
			<section>
				<a class="osiwhite" href="<?php echo get_permalink(233); ?>">Overbrook Scientific</a>
				<?php wp_nav_menu( array('menu' => 'Scientific_WWD', 'menu_class' => 'wwd_menu' )); ?>
				<a href="<?php echo get_permalink(233); ?>" class="learnMore_link">Learn more</a>
			</section>
			<section>
				<a class="oaswhite" href="<?php echo get_permalink(240); ?>">Overbrook Advisory</a>
				<?php wp_nav_menu( array('menu' => 'Advisory_WWD', 'menu_class' => 'wwd_menu' )); ?>
				<a href="<?php echo get_permalink(240); ?>" class="learnMore_link">Learn more</a>
			</section>
			<section>
				<a class="osswhite" href="<?php echo get_permalink(238); ?>">Overbrook Support</a>
				<?php wp_nav_menu( array('menu' => 'Support_WWD', 'menu_class' => 'wwd_menu' )); ?>
				<a href="<?php echo get_permalink(238); ?>" class="learnMore_link">Learn more</a>
			</section>
		</div>

	</header><!-- #masthead -->

	<div id="main" class="site-main">