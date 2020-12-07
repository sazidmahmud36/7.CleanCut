<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2><?php echo get_theme_mod('banner_heading','Follow Us On Social Media : '); ?></h2>
			</div>
			<div class="col-md-6">
				<ul class="list-inline banner-social-buttons">
					<?php if(get_theme_mod('facebook_url','https://www.facebook.com/') != ''):?>
						<li class="banner-social-button"><a href="<?php echo get_theme_mod('facebook_url','https://www.facebook.com/');?>" class="btn btn-light btn-lg" target="_blank"><i class="fa fa-facebook pr-3"></i>Facebook</a></li>
					<?php endif;?>

					<?php if(get_theme_mod('twiteer_url','https://www.twiteer.com/') != ''):?>
						<li class="banner-social-button"><a href="<?php echo get_theme_mod('twiteer_url','https://www.twiteer.com/');?>" class="btn btn-light btn-lg" target="_blank"><i class="fa fa-twitter pr-3"></i>Twitter</a></li>
					<?php endif;?>

					<?php if(get_theme_mod('linkedin_url','https://www.linkedin.com/') != ''):?>
						<li class="banner-social-button"><a href="<?php echo get_theme_mod('linkedin_url','https://www.linkedin.com/');?>" class="btn btn-light btn-lg" target="_blank"><i class="fa fa-linkedin pr-3"></i>Linkedin</a></li>
					<?php endif;?>
				</ul>
			</div>
		</div>
	</div>
</section>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="list-group list-group-horizontal">
					<li class="list-group-item"><a href="#">Home</a></li>
					<li class="list-group-item"><a href="#">About</a></li>
					<li class="list-group-item"><a href="#">Services</a></li>
					<li class="list-group-item"><a href="#">Contact</a></li>
				</ul>
				<p class="copyright text-muted small">Copyright &copy; CleanCut Theme 2020. All Rights Reserved</p>
			</div>
		</div>
	</div>

</footer>




  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-3.5.1.min.js"></script>

  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>


</body>
</html>