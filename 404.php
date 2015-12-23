<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package overbrook
 */

get_header(); ?>


		<div id="content" class="content contentOnly" role="main">

			<article id="post-0" class="post not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'overbrook' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
          
          <a href="http://theoverbrookgroup.com">Return to the home page -&gt;</a>
					<!-- <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'overbrook' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( overbrook_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'overbrook' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div> --> <!-- .widget -->
					<!--<?php endif; ?>

					<?php
					/* translators: %1$s: smiley */
					$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'overbrook' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?> -->

				</div><!-- .entry-content -->
			</article><!-- #post-0 .post .not-found -->

		</div><!-- #content -->

<?php get_footer(); ?>