<?php 
/*
	Template Name: Gallery
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
                <div class="col-md-12 col-sm-12">
						

						<?php if( have_rows('gallery') ): ?>

							<ul class="list-inline clearfix">
						 	<?php while ( have_rows('gallery') ) : the_row(); ?>
						 		<li class="col-md-3 col-sm-3 col-xs-6">
						        	<p class="center-cropped"><a rel="gallery" href="<?php the_sub_field('gallery_image'); ?>" class="fancybox">
						        		<img class="img-responsive img-thumbnail" src="<?php the_sub_field('gallery_image'); ?>" alt="<?php the_sub_field('gallery_name'); ?>" />
						        	</a></p>
						    	</li>
						    <?php endwhile; ?>
							</ul>
						<?php else : ?>

						    <li>No Image Uploaded</li>

						<?php endif; ?>


				</div>
				
				
			</div>
		</div>
	</div>

<?php get_footer(); ?>

