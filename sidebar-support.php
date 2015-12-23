<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package overbrook
 */
?>
	<div class="sidebar group_support" role="complementary">

		<a href="<?php echo get_permalink(238); ?>" class="groupLogoLink"><img src="<?php bloginfo('template_directory'); ?>/images/oss_logo.png" alt="Overbrook Support"></a>

		<?php wp_nav_menu( array('menu' => 'Support', 'menu_class' => 'sideNav' )); ?>

		<div class="atAGlance">
			<h4>At-a-Glance</h4>
			<a href="<?php bloginfo('template_directory'); ?>/docs/Overbrook_At-a-Glance_Final.pdf">Download</a>
		</div>	

	</div><!-- Sidebar -->