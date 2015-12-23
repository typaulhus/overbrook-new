<?php
/*
Template Name: Front page
*/

get_header(); ?>

<div class="pageHeadBreak"></div>

<section class="featured">
	<h1>Your science is our business</h1>
	<p>Overbrook, an independent horizontally-integrated professional services firm, provides business improvement services for a diverse range of laboratories throughout North America and the world. Founded in 2001, the firm is known for its knowledge, breadth of experience and high level of customer service.</p>
	<p>Clients include laboratories in biotech, clinical, environmental, life sciences, pharmaceuticals, material testing, chemicals, as well as emerging growth and mature global firms, and government agencies.</p>
	<a href="<?php echo get_permalink(47); ?>" class="btn_action">Learn more</a>
</section>

<div class="summaries">

	<section class="groupSummary group_scientific">
		<a class="osilogo" href="<?php echo get_permalink(233); ?>">Overbrook Scientific</a>
		<p>The Overbrook Scientific (OSI) operating group provides sales and product marketing services to drive sales performance,  develop demand and build brand. Our people work with the manufacturer, executive and program staff, identify and implement best practices across the lifecycle of highly technical “disruptive technologies” suitable for laboratories.</p>
		<?php wp_nav_menu( array('menu' => 'Scientific_WWD' )); ?>
		<a href="<?php echo get_permalink(233); ?>"><strong>See More</strong></a>
	</section>

	<section class="groupSummary group_advisory">
		<a class="oaslogo"  href="<?php echo get_permalink(240); ?>">Overbrook Advisory</a>
		<p>Overbrook Advisory Services (OAS) operating group provides comprehensive analytical instrumentation advice and decision making services.  OAS provides actionable information and solutions to custom problems that otherwise stymie or prevent well-informed decision making. Evidence shows that client-companies seek specific information and analysis when not available off the shelf or through standard approaches.  In order to save time and lower risk, knowledgeable, efficient and credentialed specialty expertise is utilized.</p>
		<?php wp_nav_menu( array('menu' => 'Advisory_WWD')); ?>
		<a href="<?php echo get_permalink(240); ?>"><strong>See More</strong></a>
	</section>

	<section class="groupSummary group_support">
		<a class="osslogo"  href="<?php echo get_permalink(238); ?>">Overbrook Support</a>
		<p>Overbrook Support Services (OSS) is a single point of contact for comprehensive analytical instrumentation services.  Overbrook service engineers deliver excellent service based on proven processes - maintenance, qualifications, onsite and/or bench repair, relocations/moves and other services.  Labs benefit from improved equipment uptime, reduced costs and harmonized regulatory qualification that improves a laboratory’s inspection readiness.</p>
		<?php wp_nav_menu( array('menu' => 'Support_WWD')); ?>
		<a href="<?php echo get_permalink(238); ?>"><strong>See More</strong></a>
	</section>

</div>


<?php get_template_part( 'footer' ); ?>
