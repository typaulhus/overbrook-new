<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package overbrook
 */
?>
	<div class="sidebar group_advisory" role="complementary">

		<a href="<?php echo get_permalink(240); ?>" class="groupLogoLink"><img src="<?php bloginfo('template_directory'); ?>/images/oas_logo.png" alt="Overbrook Advisory"></a>

		<?php wp_nav_menu( array('menu' => 'Advisory', 'menu_class' => 'sideNav' )); ?>

		<div class="atAGlance">
			<h4>At-a-Glance</h4>
			<a href="<?php bloginfo('template_directory'); ?>/docs/Overbrook_At-a-Glance_Final.pdf">Download</a>
		</div>	


	</div><!-- Sidebar -->