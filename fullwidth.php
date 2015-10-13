<?php



/*

	Template Name: Full width Page

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

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?><br>&nbsp;

					 	<?php if( get_field('sub_title') ): ?>
							<h2><?php the_field('sub_title'); ?></h2>
						<?php else: ?>
							<h2><?php the_title(); ?></h2>
						<?php endif; ?>

					 	<?php the_content(); ?>

					 <?php endwhile; ?>

					 <?php endif; ?>

				</div>

			</div>

		</div>

	</div>



<?php get_footer(); ?>



