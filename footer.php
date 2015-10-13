	<div id="email-subscribe" class="hmsection">
		<div class="container">
			<div class="col-md-8 col-sm-8 col-sm-offset-2">
				<center><h3><i class="fa fa-newspaper-o"></i> &nbsp; Subscribe to our <strong><a href="/subscribe/">Newsletter</a></strong> &raquo;</h3></center>

			</div>
		</div>
	</div>

<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3">
				 <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets One')) : else : ?>
        			<p>Please add sidebar widget on Wp Dashboard</p>
    			 <?php endif; ?>
			</div>
			<div class="col-md-3 col-sm-3">
				 <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets Two')) : else : ?>
       	 			<p>Please add sidebar widget on Wp Dashboard</p>
    			<?php endif; ?>
			</div>
			<div class="col-md-3 col-sm-3">
                                 <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets Three')) : else : ?>
       	 			<p>Please add sidebar widget on Wp Dashboard</p>
    			<?php endif; ?>
			</div>
            <div class="col-md-3 col-sm-3">
				 <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets Four')) : else : ?>
       	 			<p>Please add sidebar widget on Wp Dashboard</p>
    			<?php endif; ?>
			</div>
		</div>
		<!-- row -->
	</div>
</div>

<div id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-7">
				<p>
					Copyright &copy; <?php echo date('Y'); ?> - All Rights Reserved | <a style="color: #fff" href="">Property Name</a> | <a style="color: #fff" href="">Sitemap</a> | <a style="color: #fff" href="">Terms</a>
				</p>
			</div>
			<div class="col-md-5 col-sm-5 text-right">
				 <a style="color: #fff" href="http://www.onlinetourism.com.au">Accommodation Website Design</a> By <a style="color: #fff" href="http://www.onlinetourism.com.au">Online Tourism</a>
			</div>
		</div>
		<!-- row -->
	</div>
</div>

<a id="back-to-top" href="#" class="btn btn-warning btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>


 
  <?php wp_footer(); ?>
 

 <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/js/bootstrap-datepicker.min.js"></script>
 <script type="text/javascript">
 	$('.datepicker').datepicker()
 </script>
 

 
  
 
  </body>
</html>