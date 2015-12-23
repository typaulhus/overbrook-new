<?php
/*
Template Name: Landing Advisory
*/

get_header(); ?>

<div class="pageHeadBreak group_advisory"></div>

<?php get_template_part( 'sidebar' , 'advisory'); ?>

		<div class="content group_advisory" role="main">

			<h1 class="landingTitle"><span>Overbrook</span> Advisory</h1>

			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->


<?php get_template_part( 'footer' ); ?>