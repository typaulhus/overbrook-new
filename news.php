<?php
/*
Template Name: News
*/

get_header(); ?>

<div class="pageHeadBreak"></div>


<?php get_template_part( 'sidebar' ); ?>

		<div class="content" role="main">

			<h1>News</h1>

			<?php get_template_part( 'loop', 'index' ); ?>
		</div><!-- #content -->


<?php get_template_part( 'footer' ); ?>