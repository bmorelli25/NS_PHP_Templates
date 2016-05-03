<?php
/*
Template Name: Recent Transactions
*/
?>
<?php get_header(); ?>

<div class="container fix">
		
	<div id="page-title">
		<h1><?php echo wpb_page_title(); ?></h1>
	</div><!--/page-title-->
	
	<div id="content" class="transactions">
		<article id="entry-<?php the_ID(); ?>" <?php post_class('entry fix'); ?>>
			<?php get_template_part('_page-image'); ?>
			<div class="pad">
				<div class="text">


<div class="listing2 clear">
			<h2>Commercial Real Estate - Norris & Stevens Recent transactions</h2>
			<p>Below is a list of recent transactions in the Portland Commercial Real Estate market. 
				For active Portland commercial real estate, view our <a href="http://www.norris-stevens.com/sales-leasing/properties-for-sale/">properties for sale </a>
				or our <a href="http://www.norris-stevens.com/sales-leasing/properties-for-lease/">properties for lease.</a> 
			</p>
		</div>
					<div class="map">
					<?php $map = new Mappress_Map(array(
					'width' => 964,
					'height' => 350,
					'query' => array(
					    'post_type' => 'transactions',
					    )
					));
					echo $map->display();
					?>
					</div>

					<?php $args = array( 'post_type' => 'transactions', 'posts_per_page' => 100 );
					$loop = new WP_Query( $args );
	?>
					<div class="one-half">
						<p>Sort by: &nbsp; 
						<a href="<?php bloginfo('url'); ?>/press/recent-transactions-new/"><strong>All</strong></a> |
						<a href="<?php bloginfo('url'); ?>/press/recent-transactions-new/recent-office-transactions/">Office</a> | 
						<a href="<?php bloginfo('url'); ?>/press/recent-transactions-new/recent-industrial-transactions/">Industrial</a> | 
						<a href="<?php bloginfo('url'); ?>/press/recent-transactions-new/recent-retail-transactions/">Retail</a> | 
						<a href="<?php bloginfo('url'); ?>/press/recent-transactions-new/recent-land-transactions/">Land</a> | 
						<a href="<?php bloginfo('url'); ?>/press/recent-transactions-new/recent-multifamily-transactions/">Multifamily</a>
						</p>
						</div>

					<div class="clear"></div>

					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="transaction-header clear">
						
						
						<div style="width: 10%; float: left;">
							<?php if(get_field('type') == "leased"): ?>
								<strong>LEASED</strong>
							<?php else: ?>
								<strong>SOLD</strong>
							<?php endif; ?>
						</div>
						
							<div style="width: 20%; float: left;">
							<?php if(get_field('type') == "leased"): ?>
							<!--	<?php the_field('term'); ?> Months  -->
							<?php else: ?>
								<?php $price = get_field('price');
								if ( $price ): ?>
								$<?php echo number_format("$price",0,".",","); ?>
								<?php else: ?>
								<?php endif; ?>
							<?php endif; ?>
						</div>
											
						
						<div style="width: 40%; float: left;">
							<a href=""></a>
						</div>

						<div style="width: 30%; float: right;">
							<?php the_field('date'); ?>
						</div>


<!--
						<div style="width: 70%; float: left;">
							
						</div>




						<div style="width: 12%; float: left;">
							<?php if(get_field('type') == "leased"): ?>
								<strong>Term</strong>
							<?php else: ?>
								<strong>Price</strong>
							<?php endif; ?>
						</div>
						
						
		-->				
					</div>

					<div class="listing2 clear">
						
						
						<div style="width: 10%; float: left;">
							<?php if(get_field('type') == "leased"): ?>
								<strong>Lessor:</strong>
							<?php else: ?>
								<strong>Seller:</strong>
							<?php endif; ?>
						</div>



						<div style="width: 60%; float: left;">
							<?php if(get_field('type') == "leased"): ?>
								<?php the_field('lessor'); ?>
							<?php else: ?>
								<?php the_field('seller'); ?>
							<?php endif; ?>
						</div>

						

					
						<div style="width: 30%; float: right;">
							<?php the_field('street_address'); ?>
						</div>



						

						
					</div>
					

				<div class="listing2 clear">
	
						<div style="width: 10%; float: left;">
							<?php if(get_field('type') == "leased"): ?>
								<strong>Lessee:</strong>
							<?php else: ?>
								<strong>Buyer:</strong>
							<?php endif; ?>
						</div>


						<div style="width: 60%; float: left;">
							<?php if(get_field('type') == "leased"): ?>
								<?php the_field('lessee'); ?>
							<?php else: ?>
								<?php the_field('buyer'); ?>
							<?php endif; ?>
						</div>
						
						<div style="width: 30%; float: right;">
							<?php the_field('city'); ?>, <?php the_field('state'); ?> <?php the_field('zip_code'); ?>
						</div>
						
						
				</div>
		
			
				<div class="listing2 clear">
	
						<div style="width: 10%; float: left;">
							<?php if(get_field('type') == "leased"): ?>
								<strong>Property:</strong>
							<?php else: ?>
								<strong>Property:</strong>
							<?php endif; ?>
						</div>
						
						<div style="width: 90%; float: left;">
							
								<?php if(get_field('property_sf') == ""): ?>
								<?php the_field('property_type'); ?>
							<?php else: ?>
								<?php the_field('property_sf'); ?> - <?php the_field('property_type'); ?>
							<?php endif; ?>
						</div>

				</div>
			
				<div class="listing clear">
	
						<div style="width: 10%; float: left;">
							<?php if(get_field('type') == "leased"): ?>
								<strong>Broker:</strong>
							<?php else: ?>
								<strong>Broker:</strong>
							<?php endif; ?>
						</div>
						
						
						<div style="width: 90%; float: left;">
							<?php if(get_field('type') == "leased"): ?>
								
								<?php the_field('broker'); ?> of Norris & Stevens
								<?php if(get_field('seller_representation') && get_field('buyer_representation') ): ?>
								 represented both the Lesee and Lessor
								<?php elseif(get_field('seller_representation')): ?>
								 represented the Lessor
								<?php elseif(get_field('buyer_representation')): ?>
								 represented the Lessee
								<?php else: ?>
								<?php endif; ?> 
								
							<?php else: ?>
								<?php the_field('broker'); ?> of Norris & Stevens
								<?php if(get_field('seller_representation') && get_field('buyer_representation') ): ?>
								 	represented both the Buyer and Seller
								<?php elseif(get_field('seller_representation')): ?>
								 	represented the Seller
								<?php elseif(get_field('buyer_representation')): ?>
								 	represented the Buyer
								<?php else: ?>
								<?php endif; ?> 
								
								
							<?php endif; ?>		
						
						</div>
						
						
						
				</div>
					
					
					

					<?php endwhile; ?>
				</div>
			</div>
		</article>
	</div>		
</div><!--/container-->

<?php get_footer(); ?>