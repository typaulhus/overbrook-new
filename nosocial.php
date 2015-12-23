<?php
/*
Template Name: No Social
*/

get_header(); ?>
<style  type="text/css">
  div.mr_social_sharing_wrapper {
    display: none;
  }
</style>

<div class="pageHeadBreak"></div>

<div class="content contentOnly" role="main">

  <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', 'page' ); ?>


  <?php endwhile; // end of the loop. ?>

</div><!-- #content -->

<?php get_footer(); ?>

