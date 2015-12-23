<?php
/**
 * The template used for displaying page content in ldtd_notes.php
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<!-- <div class="entry-content-thumbnail test">
			<?php the_post_thumbnail(); ?>
		</div> -->

		<div class="painting">
		<?php if( get_field('work_image') ): ?>
			<img src="<?php the_field('work_image'); ?>" />
		<?php endif; ?>

			<p><?php the_field('note_title'); ?></p>
			<p><?php the_field('partnership'); ?></p>
		</div>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
