
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<title><?php bloginfo('name');?> | <?php is_front_page() ? bloginfo('description') : wp_title();?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/bootstrap.css">

	<?php if (get_theme_mod('animation' , 1)): ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/animate.css">
	<?php endif ?>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">


	<style type="text/css">
		.showcase{
			height:<?php echo get_theme_mod('showcase_height',700); ?>px;
			background: url(<?php echo get_theme_mod('showcase_image',get_bloginfo('template_url').'/img/showcase.jpg'); ?>); 
			background-size: cover;
			background-position: center center;
			/*background-attachment: fixed;*/
		}
		.banner{
				
			background: url(<?php echo get_theme_mod('banner_image',get_bloginfo('template_url').'/img/banner.jpg'); ?>); 
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;
		}
	</style>
</head>
<body>		
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	<div class="container">
	  <a class="navbar-brand" href="<?php bloginfo('url');?> "><?php bloginfo('name');?> </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbarNavDropdown">
	    <?php 
		    wp_nav_menu(array(
		    	'theme_location' => 'primary',
		    	'depth' => 2,
		    	'container' => 'false',
		    	'menu_class' => 'nav navbar-nav ml-auto',
		    	'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
		    	'walker' => new wp_bootstrap_navwalker()
		    	)
		    );
	    ?>
	  </div>
	</div>
</nav>