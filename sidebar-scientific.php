<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package overbrook
 */
?>
	<div class="sidebar group_scientific" role="complementary">

		<a href="<?php echo get_permalink(233); ?>" class="groupLogoLink"><img src="<?php bloginfo('template_directory'); ?>/images/osi_logo.png" alt="Overbrook Scientific"></a>

		<p class="navSection">INSTRUMENTATION</p>
		<?php wp_nav_menu( array('menu' => 'Scientific_Products', 'menu_class' => 'sideNav' )); ?>

		<p class="navSection">SOFTWARE</p>
		<?php wp_nav_menu( array('menu' => 'Scientific_Software', 'menu_class' => 'sideNav' )); ?>

		<div class="atAGlance">
			<h4>At-a-Glance</h4>
			<a href="<?php bloginfo('template_directory'); ?>/docs/Overbrook_At-a-Glance_Final.pdf">Download</a>
		</div>	


	</div><!-- Sidebar -->