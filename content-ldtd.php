<?php
/**
 * The template used for displaying page content in ldtd.php
 *
 * @package _tk
 */
?>
<div class="row">
	<?php get_template_part( 'sidebar' , 'about'); ?>
	<div class="main-content-inner col-sm-9">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<div class="entry-content-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div>
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
			<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
		</article><!-- #post-## -->
	</div>
</div>
