<?php 

/*
	Template Name: Page with Slider
	
*/

get_header(); ?>
	
	<div id="main-title-heading">
      	<div class="container">
      		<div class="clearfix">
      			<div class="col-md-12">
	      				<?php if( get_field('sub_title') ): ?>
							<h1 id="heading-<?php the_ID(); ?>"><?php the_field('sub_title'); ?></h1>
						<?php else: ?>
							<h1 id="heading-<?php the_ID(); ?>"><?php the_title(); ?></h1>
						<?php endif; ?>
      			</div>
      		</div>
      	</div>
  	</div>


	<div id="main-section" class="pageinner">
		<div class="container">
			<div class="row">
                <div class="col-md-8 col-sm-8">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					 	<?php the_content(); ?>
					 <?php endwhile; ?>
					 <?php endif; ?>
				</div>
				
				<div class="col-md-4 col-sm-4">
                     <?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>


	<?php  if(is_page(46)) { ?>
		<div id="gmap">
		
		<?php load_template(TEMPLATEPATH . '/googlemap.php'); ?>
		
		
						<?php 
 
						$location = get_field('map');
						 
						if( !empty($location) ):
						?>
						<div class="acf-map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
						</div>
						<?php endif; ?>
		</div>
	<?php } ?>

<?php get_footer(); ?>
