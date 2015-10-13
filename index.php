<?php get_header(); ?>

	<div id="main-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<?php get_sidebar(); ?>
				</div>
				<div class="col-md-4 col-sm-4">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					 	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					 	<?php the_content(); ?>
					 <?php endwhile; ?>
					 <?php endif; ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>