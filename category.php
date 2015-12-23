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

    <?php get_template_part( 'sidebar' , 'scientific'); ?>

    <div class="content group_scientific" role="main">
      
      <h1>Laser Diode Thermal Desorption - Application Notes</h1>
      <h2 class="pageSubTitle"><?php single_cat_title() ?></h2>
      <p><?php echo category_description(); ?></p>
      
      <?php query_posts(array('post_type' => 'ldtd', 'category_name' => single_cat_title("", false))); ?>
        <?php while ( have_posts() ) : the_post(); ?>
        
        <div class="note">
          <h3><?php the_title() ?></h3>
          <ul>
            <li><strong>Partnership:</strong> <?php echo get_post_meta($post->ID,'wpcf-partnership',TRUE)?></li>
            <li><strong>Molecules:</strong> <?php echo get_post_meta($post->ID,'wpcf-molecules',TRUE)?></li>
            <li><strong>Matrix:</strong> <?php echo get_post_meta($post->ID,'wpcf-matrix',TRUE)?></li>
            <li><strong>Extraction Method:</strong> <?php echo get_post_meta($post->ID,'wpcf-extraction-method',TRUE)?></li>
            <li><strong>Instrumentation:</strong> <?php echo get_post_meta($post->ID,'wpcf-instrumentation',TRUE)?></li>
            <li><strong>No. Code:</strong> <?php echo get_post_meta($post->ID,'wpcf-no-code',TRUE)?></li>
          </ul>
          <a href="<?php echo get_post_meta($post->ID,'wpcf-note-pdf',TRUE)?>" target="_blank">Download</a>
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