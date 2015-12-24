<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package overbrook
 */
?>

	</div><!-- #main -->

	<footer>

		<ul class="footerLinks">
			<li><a href="<?php echo get_permalink(462); ?>">Terms of Use</a></li>
			<li><a href="<?php echo get_permalink(464); ?>">Privacy Policy</a></li>
			<li><a href="<?php echo get_permalink(1189); ?>">Careers</a></li>
			<!-- <li><a href="http://theoverbrookgroup.com/newsletter/">Newsletter Archive</a></li> -->
			<li>&copy;<?php echo date('Y'); ?> Overbrook. All rights reserved.</li>
		</ul>

	</footer>
</div><!-- #page -->


<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>

<!-- Put this right before the </body> closing tag -->
<script>
	var nav = responsiveNav(".nav-collapse", { // Selector
	animate: true, // Boolean: Use CSS3 transitions, true or false
	transition: 284, // Integer: Speed of the transition, in milliseconds
	label: "Menu", // String: Label for the navigation toggle
	insert: "before", // String: Insert the toggle before or after the navigation
	customToggle: "", // Selector: Specify the ID of a custom toggle
	closeOnNavClick: false, // Boolean: Close the navigation when one of the links are clicked
	openPos: "relative", // String: Position of the opened nav, relative or static
	navClass: "nav-collapse", // String: Default CSS class. If changed, you need to edit the CSS too!
	navActiveClass: "js-nav-active", // String: Class that is added to  element when nav is active
	jsClass: "js", // String: 'JS enabled' class which is added to  element
	init: function(){}, // Function: Init callback
	open: function(){}, // Function: Open callback
	close: function(){} // Function: Close callback
	});
</script>

<?php wp_footer(); ?>

</body>
</html>
