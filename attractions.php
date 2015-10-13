<?php 
/*
	Template Name: Attractions
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



	<div id="main-section" style="padding:60px 0 30px">

		<div class="container">

			<div class="row">

               <div class="col-md-12 col-sm-12">
               
               
               <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					 	

					 	<?php the_content(); ?>

					 <?php endwhile; ?>

					 <?php endif; ?>
               
               
               <p>&nbsp;</p>
               
               <?php if( have_rows('attraction_loop')) : ?>
               
               <ul class="attractions-list list-unstyled">
               		<?php  while ( have_rows('attraction_loop') ) : the_row(); ?>
               		
               		<li class="clearfix">
               			<div class="col-md-4 attleft">
	               			<img src="<?php the_sub_field('attractions_image'); ?>" alt="<?php the_sub_field('attractions_title'); ?>" class="img-responsive">
               			</div>
               			<div class="col-md-8 attright">
	               			<h2><?php the_sub_field('attractions_title'); ?></h2>
	               			<?php the_sub_field('attractions_desc'); ?>
	               			<hr>
	               			<ul class="row list-unstyled">
		               			<li class="col-md-4 col-sm-4">
			               			<h4><a target="_blank" href="<?php the_sub_field('attractions_link'); ?>"><i class="fa fa-desktop"></i></i> &nbsp;Visit Website</a></h4>		
		               			</li>
		               			<?php if( get_sub_field('attractions_phone') ): ?>
		               			<li class="col-md-4 col-sm-4">
			               			<h4><a href="tel:<?php the_sub_field('attractions_phone'); ?>"><i class="fa fa-phone"></i></i> &nbsp;<?php the_sub_field('attractions_phone'); ?></a></h4>		
		               			</li>
		               			<?php endif; ?>
		               			<?php if( get_sub_field('attractions_email') ): ?>
		               			<li class="col-md-4 col-sm-4">
			               			<h4><a href="mailto:<?php the_sub_field('attractions_email'); ?>"><i class="fa fa-envelope"></i></i> &nbsp;Send an Email</a></h4>		
		               			</li>
		               			<?php endif; ?>
	               			</ul>
               			</div>
               		</li>
               		<?php endwhile; ?>
               </ul>
               	
               <?php endif; ?>
               
               
                            

				

				</div>

			</div>

		</div>

	</div>



<?php get_footer(); ?>




