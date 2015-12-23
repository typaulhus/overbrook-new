<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package overbrook
 */
?>
	<div class="leftNav col-xs-12 col-sm-3 col-md-3 col-lg-3" role="complementary">

			<?php wp_nav_menu( array( 'theme_location' => 'ldtd-menu', 'menu_class' => 'sideNav poop' ) ); ?>

			<div class="atAGlance">
				<h4>At-a-Glance</h4>
				<a href="<?php bloginfo('template_directory'); ?>/docs/Overbrook_At-a-Glance_Final.pdf">Download</a>
			</div>

	</div><!-- Sidebar -->
