<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package overbrook
 */
?>
	<div class="sidebar group_scientific" role="complementary">

		<a href="<?php echo get_permalink(233); ?>" class="groupLogoLink"><img src="<?php bloginfo('template_directory'); ?>/images/osi_logo.png" alt="Overbrook Scientific"></a>

		<?php wp_nav_menu( array('menu' => 'Newsletter Archive', 'menu_class' => 'sideNav' )); ?>


	</div><!-- Sidebar -->