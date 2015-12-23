<?php
/**
 * Template Name: LDTD Notes
 *
 */

get_header(); ?>
	<?php query_posts('post_type=note&category_name=environmental'); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'note' ); ?>

	<?php endwhile; // end of the loop. ?>

<?//php get_sidebar(); ?>
<?php get_footer(); ?>
