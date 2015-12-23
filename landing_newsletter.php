<?php
/*
Template Name: Newsletter Archive
*/

get_header(); ?>

<div class="pageHeadBreak group_scientific"></div>

<?php get_template_part( 'sidebar' , 'newsletter'); ?>

		<div class="content group_scientific" role="main">

			<h1 class="landingTitle"><span>Newsletter Archiveeee</span> </h1>

			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->


<?php get_template_part( 'footer' ); ?>