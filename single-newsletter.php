<?php
/**
 * The Template for displaying all single posts.
 *
 * @package overbrook
 */

get_header(); ?>

	<div class="pageHeadBreak"></div>

	<?php get_template_part( 'sidebar' , 'newsletter'); ?>

	<div class="content" role="main">


		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>


		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->


<?php get_footer(); ?>