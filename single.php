<?php get_header(); ?>
	
	<div id="main-section" class="pageinner">
		<div class="container">
			<div class="row">
                <div class="col-md-8 col-sm-8">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
								
									
								
								<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
					
								<div class="entry">
									
									<?php the_content(); ?>
					
									<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
									
									<?php the_tags( 'Tags: ', ', ', ''); ?>
					
								</div>
								
								<?php edit_post_link('Edit this entry','','.'); ?>
								
							</div>
					
						<?php comments_template(); ?>
					
						<?php endwhile; endif; ?>
				</div>
				
				<div class="col-md-4 col-sm-4">
                     <?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>

