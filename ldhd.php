<?php
/*
Template Name: LDTD
*/

get_header(); ?>

		<div id="primary" class="content-area">

			<div id="content" class="site-content" role="main">
				<!-- start the regular page content -->

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

				<!-- end of regular page content -->

				<!-- start the Kittens CPT Query and loop -->

				<!-- The kittens Wp_Query and array  -->
				<?php $ldhdloop = new WP_Query(array (
					'post_type' => 'cpt_ldhd',
					'orderby' => 'title',
					'order' => 'ASC' ) ); ?>

					<!-- Stuff before the loop  -->
					<ul id="ldhd-list" class="thumbnails clearfix">

					<!-- Loop starts! -->
					<?php while ($ldhdloop->have_posts()) : $ldhdloop->the_post(); ?>

						<li class="ldhdList">
							<div class="thumbnail">
								<!-- Displays the custom thumbnail size "kittens-thumb" -->
								<a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail($page->ID, 'ldhd-note-thumb'); ?></a>
								<!-- Displays the Note name -->
								<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'overbrook' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
								<!-- <h3><?php the_title(); ?></h3> -->
								<div class="">
									<!-- Displays The Excerpt -->
									<?php the_excerpt(); ?>
								</div>
								<!-- "View Note" button that links to the single Kitten post -->
								<!-- <a href="<?php the_permalink() ?>" rel="bookmark" class="btn btn-block btn-info" title="<?php the_title_attribute(); ?>">View Note</a> -->
							</div>
						</li>

					<?php endwhile;  ?>
					<!-- Loop ends -->

					<!-- Stuff after the loop  -->
					</ul>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
<?php get_template_part( 'sidebar', 'ldhd' ); ?>
<?php get_footer(); ?>
