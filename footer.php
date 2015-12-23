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


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>


<?php wp_footer(); ?>

</body>
</html>