<?php
/*
Template Name: LDTD - Food
*/

get_header(); ?>
<?php get_template_part( 'sidebar' , 'ldtd'); ?>
<div class="col-sm-9 content">
	<h1 class="LDTDheading">Laser Diode Thermal Desorption - Application Notes</h1>
	<h2 class="pageSubTitle"><?php the_title(); ?></h2>

	<?php
		if (have_posts()) :

			while (have_posts()) : the_post();

				the_content();

			endwhile;

			else :
				//fallback content
		endif;

		// LDTD notes begin
		$ldtd = new WP_Query('post_type=note&cat=12');

		if ($ldtd->have_posts()) :

			while ($ldtd->have_posts()) : $ldtd->the_post(); ?>

			<div class="note">
				<header>
					<h3 class="note-title"><?php the_title(); ?></h3>
				</header>
				<ul class="note-info">
					<li><strong>Partnership: </strong><?php the_field('partnership'); ?></li>
					<a class="overbrookBtn" href="<?php the_field('file'); ?>">Download</a>
					<li><strong>Molecules: </strong><?php the_field('molecules'); ?></li>
					<li><strong>Matrix: </strong><?php the_field('matrix'); ?></li>
					<li><strong>Extraction Method: </strong><?php the_field('extraction_method'); ?></li>
					<li><strong>Instrumentation: </strong><?php the_field('instrumentation'); ?></li>
					<li><strong>No. Code: </strong><?php the_field('code'); ?></li>
					<li><strong>Category: </strong><?php the_field('category'); ?></li>
				</ul>
			</div>

			<?php endwhile;

			else :
				//fallback content
		endif;
		wp_reset_postdata();

		// LDTD articles begin
		$ldtd = new WP_Query('post_type=article&cat=12');

		if ($ldtd->have_posts()) :

			while ($ldtd->have_posts()) : $ldtd->the_post(); ?>

				<div class="ldtd-article">
				<header>
					<h1 class="article-title"><?php the_title(); ?></h1>
				</header>
				<div class="article-info">
					<a href="<?php the_field('file'); ?>">Download</a>
				</div>
			</div>

			<?php endwhile;

			else :
				//fallback content
		endif;
		wp_reset_postdata();

		?>
</div> <!-- end col-9>
<?php get_footer(); ?>
