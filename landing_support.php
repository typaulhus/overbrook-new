<?php
/*
Template Name: Landing Support
*/

get_header(); ?>

<div class="pageHeadBreak group_support"></div>

<?php get_template_part( 'sidebar' , 'support'); ?>

		<div class="content group_support" role="main">

			<h1 class="landingTitle"><span>Overbrook</span> Support</h1>

			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->


<?php get_template_part( 'footer' ); ?>