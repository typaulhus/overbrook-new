<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package overbrook
 */
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1><?php the_title(); ?></h1>

	<?php the_content(); ?>
	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'overbrook' ),
			'after'  => '</div>',
		) );
	?>
	<!-- Edit post link in WP Admin area -->
	<!--
	<?php edit_post_link( __( 'Edit', 'overbrook' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
	 -->
</section><!-- #post-## -->
