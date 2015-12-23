<?php
/**
 * The template used for displaying page content in ldtd_notes.php
 *
 */
?>

<div class="ldtd-note">
	<header>
		<h1 class="note-title"><?php the_title(); ?></h1>
	</header>
	<div class="note-info">
		<p><span class='note-label'>Partnership: </span><?php the_field('partnership'); ?></p>
		<a href="<?php the_field('file'); ?>">Download</a>
		<p><span class='note-label'>Molecules: </span><?php the_field('molecules'); ?></p>
		<p><span class='note-label'>Matrix: </span><?php the_field('matrix'); ?></p>
		<p><span class='note-label'>Extraction Method: </span><?php the_field('extraction_method'); ?></p>
		<p><span class='note-label'>Instrumentation: </span><?php the_field('instrumentation'); ?></p>
		<p><span class='note-label'>No. Code: </span><?php the_field('code'); ?></p>
		<p><span class='note-label'>Category: </span><?php the_field('category'); ?></p>
	</div>
</div>

