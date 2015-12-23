 <?php
/**
 * The loop that displays posts.
 *
 * @package WordPress
 * @subpackage overbrook
 * @since overbrook HTML5 3.0
 */
get_header(); ?>

    <div class="pageHeadBreak group_scientific"></div>

    <?php get_template_part( 'sidebar' , 'newsletter'); ?>

    <div class="content group_scientific" role="main">
      
      <h1>Newsletter Archive</h1>
      <h2 class="pageSubTitle"><?php single_cat_title() ?></h2>
      <p><?php echo category_description(); ?></p>
      
      <?php query_posts(array('post_type' => 'newsletter', 'category_name' => single_cat_title("", false))); ?>
        <?php while ( have_posts() ) : the_post(); ?>
        
        <div class="note">
          <h3><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'overbrook' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
        </div>
      
      <?php endwhile; // end of the loop. ?>

			<?php query_posts(array('post_type' => 'article', 'category_name' => single_cat_title("", false))); ?>
      
      <ul class="articles">
      
        <?php while ( have_posts() ) : the_post(); ?>
        
          <li>
            <a href="<?php echo get_post_meta($post->ID,'wpcf-pdf',TRUE)?>"><?php the_title() ?></a>
          </li>
      
      	<?php endwhile; // end of the loop. ?>

    	</ul>
    </div><!-- #content -->


<?php get_template_part( 'footer' ); ?>