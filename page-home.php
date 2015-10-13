<?php get_header(); ?>

	

	<div id="booking-section" class="hmsection">

		<div class="container">

			<div class="row">

				<div class="col-md-8 col-sm-8 col-md-offset-2">

					<div class="row">

						<div class="col-md-4 col-sm-4">

							<span>Arrival</span><br>

							<input data-provide="datepicker" type="text" class="form-control" placeholder="mm/dd/yyyy">

						</div>

						<div class="col-md-4 col-sm-4">

							<span>Departure</span><br>

							<input data-provide="datepicker" type="text" class="form-control" placeholder="mm/dd/yyyy">
						</div>

						<div class="col-md-4 col-sm-4">

							<span>&nbsp</span><br>

							<a input type="submit" <a class="btn btn-warning" target="_blank" href="">Check Availability</a>

                                                        <br><br>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>



	<div id="main-section" class="hmsection">

		<div class="container">

			<div class="row">

				<div class="col-md-7 col-sm-7">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					 	<h1><?php the_field('page_sub_title'); ?></h1>

					 	<?php the_content(); ?>

					 <?php endwhile; ?>

					 <?php endif; ?>

				</div>

				<div class="col-md-5 col-sm-5">

					<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive img-thumbnail' ) ); ?>

				</div>

			</div>

		</div>

	</div>

	<div id="follow-like" class="hmsection">
		<div class="container">
			<div class="col-md-4 col-sm-4 col-sm-offset-2">
				<h3><a href="#"><i class="fa fa-facebook-square"></i> &nbsp;Like Us on <strong>Facebook</strong></a></h3>
			</div>
			<div class="col-md-6 col-sm-6">
				<h3><a href="#"><i class="fa fa-instagram"></i> &nbsp;Follow us on <strong>Instagram</strong></a></h3>
			</div>
		</div>
	</div>

	<div id="special-offer-section">

		<div class="container-fluid">

			<div class="row">

				<div class="col-md-4 col-sm-6" style="height:550px;background:url('<?php the_field('special_offer_image_1'); ?>') no-repeat; background-size:cover">

					<div class="row" style="background:rgba(255,255,255,0.75); height:550px; padding-top:60px; ">

						<div class="col-md-9 col-sm-10 col-md-offset-3 col-sm-offset-2">

							<?php the_field('special_offer_content'); ?>

						</div>

					</div>

				</div>

				<div class="col-md-8 col-sm-6" style="height:550px;background:url('<?php the_field('special_offer_image_2'); ?>') no-repeat; background-size:cover">

				</div>

			</div>

		</div>

	</div>



	<div id="fwsection" class="hmsection">

		<div class="container">

			<div class="row">

				<div class="col-md-6 col-sm-6">

					<ul class="list-inline row atthome">

					<?php if( have_rows('fwsection') ) : ?>

						<?php  while ( have_rows('fwsection') ) : the_row(); ?>

							<li class="col-md-4 col-sm-4">
								<div class="img-container">
									<img class="img-responsive" src="<?php the_sub_field('gallery_image'); ?>">
									<div class="img-caption">
										<h4><?php the_sub_field('fw_caption'); ?></h4>
									</div>
								</div>
							</li>	

						<?php  endwhile; ?>	

					<?php endif; ?>

					</ul>

				</div>

				<div class="col-md-6 col-sm-6">

					<div class="row">

						<div class="col-md-11 col-sm-11 col-sm-offset-1">

							<?php the_field('fw_content'); ?>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>



        <div id="testimonial" style="min-height:200px; padding: 0; background:url('http://ultimate.securepagelink.com/wp-content/uploads/2015/08/spblack2.jpg') no-repeat bottom; background-size:cover"  class="hmsection">
		<div style="background:rgba(255,255,255,0.75); padding: 40px 0 20px ">
		<div class="container">

			<h1 class="text-center">Guest Reviews</h1>

                         <br>

			 <div id="myCarousel">

				 <div id="productSlider" class="carousel slide carousel-fade" data-ride="carousel">

					      <div class="carousel-inner" role="listbox">

					      <?php 

					      	$row = 1;

						      if(get_field('testimonials')):

						      	while (has_sub_field('testimonials')):

					      ?>

					      

					        <div class="item <?php if($row == 1) { echo 'active'; } ?>">

					               <div class="text-center">

										<em><?php the_sub_field('testimony');  ?></em><br>         

										<h4><?php the_sub_field('testimony_name');  ?></h4><br><br><br>

									</div>

					        </div>

					         <?php $row++; endwhile;  ?>

					         <?php endif; ?>

						  </div>

						  <!-- carousel-inner -->

				  </div>

		 	  </div>

		 	  <!-- myCarousel -->	

		</div>
		</div>
	</div>
	
	
	



<?php get_footer(); ?>