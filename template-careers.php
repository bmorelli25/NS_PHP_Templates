<?php
/*
Template Name: Careers
*/
?>
<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>

<div class="container fix">
		
	<div id="page-title">
		<h1><?php echo wpb_page_title(); ?></h1>
	</div><!--/page-title-->
	
	<div id="content">
		<article id="entry-<?php the_ID(); ?>" <?php post_class('entry fix'); ?>>
			<div class="pad">
				<div class="text">
					<h4 class="alt"><span class="color">We are always looking for talented people.</span></h4>
					<div class="hr"></div>
					<div class="grid three-fourth">
						<h3>We hope you’ll consider working with us.</h3>
						<p>Norris &amp; Stevens offers the market knowledge and experience to assist any company or individual faced with a real estate challenge; from property management to sales and leasing opportunities, corporate relocations, investments, and development.</p>

                        <!-- Begin Repeater Code -->
                        
						<?php if( have_rows('careers') ):
						      while ( have_rows('careers') ) : the_row(); ?>
                        
				            <h2 class="careers-title"><?php the_sub_field('title'); ?></h2>

                            <div class="careers-description"><?php the_sub_field('description'); ?></div>

                            <a href="mailto:<?php the_sub_field('email_destination'); ?>?Subject=<?php the_sub_field('title'); ?>" class="button large">Apply</a>

                            <div class="hr"></div>
						
                        <?php endwhile; ?>
						<?php else : ?>
						<?php endif; ?>
                        
                         <!-- End Repeater Code -->
								
						<div class="careers-legal">
							<p>Norris & Stevens is an Equal Opportunity Employer. All qualified candidates will receive consideration for employment without regard to race, color, creed, religion, age, gender, national origin, disability, sexual orientation, US Veteran status, or any other factor protected by law.</p>

							<p>*Please note that all job offers are contingent upon successfully passing a credit/criminal background check and pre-employment drug screening.</p>
						</div>
					</div>

					<div class="grid one-fourth last">&nbsp;</div>
					<div class="clear"></div>
				</div>
			</div>
		</article>
	</div>
		
</div><!--/container-->

<?php endwhile;?>
<?php get_footer(); ?>