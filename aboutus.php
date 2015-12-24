<?php
/*
Template Name: AboutUs
*/

get_header(); ?>

<?php get_template_part( 'sidebar' , 'aboutus'); ?>

<div class="col-sm-9">
	<div class="content aboutUs" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->
</div>


<?php get_template_part( 'footer' ); ?>
