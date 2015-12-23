<?php
/*
Template Name: Group Sub-Page
*/

get_header(); ?>

<?php if ( $post->post_parent == '233' ) { ?>

	<div class="pageHeadBreak group_scientific"></div>

	<?php get_template_part( 'sidebar' , 'scientific'); ?>

			<div class="content group_scientific" role="main">

<?php } else if ( $post->post_parent == '240' ) { ?>

	<div class="pageHeadBreak group_advisory"></div>

	<?php get_template_part( 'sidebar' , 'advisory'); ?>

			<div class="content group_advisory" role="main">

<?php } else if ( $post->post_parent == '238' ) { ?>

	<div class="pageHeadBreak group_support"></div>

	<?php get_template_part( 'sidebar' , 'support'); ?>

			<div class="content group_support" role="main">

<?php } else { ?>

	<div class="pageHeadBreak"></div>

			<div class="content" role="main">

<?php } ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->


<?php get_template_part( 'footer' ); ?>