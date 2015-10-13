<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name') ?></title>
    <!-- Bootstrap -->
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	 <script type="text/javascript">
		 $(document).ready(function(){
	     $(window).scroll(function () {
	            if ($(this).scrollTop() > 50) {
	                $('#back-to-top').fadeIn();
	            } else {
	                $('#back-to-top').fadeOut();
	            }
	        });
	        // scroll body to 0px on click
	        $('#back-to-top').click(function () {
	            $('#back-to-top').tooltip('hide');
	            $('body,html').animate({
	                scrollTop: 0
	            }, 800);
	            return false;
	        });
	        
	        $('#back-to-top').tooltip('show');
	
			});
	 </script>
    
    <?php wp_head(); ?>
    
    
    
  </head>
  <body id="top" <?php body_class(); ?>> 

    <div id="header">
      <div class="container">
          <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-4">
                  <a href="<?php bloginfo('url'); ?>">
                    <img class="img-responsive center-block" src="<?php bloginfo('stylesheet_directory') ?>/images/logo.png" alt="<?php bloginfo('name') ?>" />
                  </a>
                </div>
                <div class="col-md-10 col-sm-10 col-xs-8">
                  <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                        <?php
                          wp_nav_menu( array(
                            'theme_location'    => 'main_nav',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                             'menu_class'        => 'nav navbar-nav',
                             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                             'walker'            => new wp_bootstrap_navwalker()
                            ));
                        ?>
                  </nav>
                </div>
          </div>
          <!-- row -->
      </div>
    </div>
    <!-- #header -->

 
 <?php if(is_front_page()) { ?>
    <div id="slider">
      <?php putRevSlider("home") ?>
    </div>
    <?php } elseif(is_404()) { ?>
    <div id="page-top-img">
		 <img src="/wp-content/uploads/2015/08/slider3b.jpg" alt="404-image" />
	</div>
	<?php } elseif(is_archive()) { ?>
    <div id="page-top-img">
		 <img src="/wp-content/uploads/2015/08/slider3b.jpg" alt="404-image" />
	</div>
	<?php } elseif(is_single()) { ?>
    <div id="page-top-img">
		 <img src="/wp-content/uploads/2015/08/slider3b.jpg" alt="404-image" />
	</div>
	
    <?php } else {  ?>
	 
	 <?php
		$slider = get_field('rev_slider_shortcode');
		
	 if(get_field('rev_slider_shortcode')) { ?>
	
	<div id="slider">
     	<?php putRevSlider($slider) ?>
    </div>
    
    <?php } else { ?>
    
    <div id="slider">
      <?php putRevSlider("home") ?>
    </div>

    
    <?php } ?>  
	   
	   
	   
  <?php } ?>

 
   
  
  
 
  
  