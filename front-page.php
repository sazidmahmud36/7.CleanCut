<?php get_header();?>

<section class="showcase animate__animated animate__fadeIn">
	<div class="container">
		<div class="col-md-12">
			<div class="showcase-content">
				<h1><?php echo get_theme_mod('showcase_heading','Cleancut Theme'); ?></h1>
				<p class="lead"><?php echo get_theme_mod('showcase_text','Custom Wordpress Theme by You'); ?></p>



				<?php if(get_theme_mod('facebook_url','https://www.facebook.com/') != ''):?>
					<a href="<?php echo get_theme_mod('facebook_url','https://www.facebook.com/');?>" class="btn btn-light btn-lg" target="_blank"><i class="fa fa-facebook pr-3"></i>Facebook</a>
				<?php endif;?>

				<?php if(get_theme_mod('twiteer_url','https://www.twiteer.com/') != ''):?>
					<a href="<?php echo get_theme_mod('twiteer_url','https://www.twiteer.com/');?>" class="btn btn-light btn-lg" target="_blank"><i class="fa fa-twitter pr-3"></i>Twitter</a>
				<?php endif;?>

				<?php if(get_theme_mod('linkedin_url','https://www.linkedin.com/') != ''):?>
					<a href="<?php echo get_theme_mod('linkedin_url','https://www.linkedin.com/');?>" class="btn btn-light btn-lg" target="_blank"><i class="fa fa-linkedin pr-3"></i>Linkedin</a>
				<?php endif;?>
				
			</div>
		</div>
	</div>
</section>

<?php $latest_blog_posts = new WP_Query(array(
	'posts_per_page' => 3,
	'tax_query' => array(array(
					'taxonomy' => 'post_format',
					'field'=> 'slug',
					'terms' => array('post-format-aside', 'post-format-gallery'),
					'operator' => 'NOT IN'

	))
)); ?>

<?php 
	$i = 0 //Counter
	//$section = 'section-a' //section class

 ?>

<?php if ($latest_blog_posts -> have_posts()): while($latest_blog_posts -> have_posts()): $latest_blog_posts -> the_post();?>
	
	<?php 
		$i++;
		if ($i % 2 != 0) {
			//Odd Post
			$section_class = 'section-a';
			$reverse_class = 'row';
			$left_class = 'col-md-7 animate__animated animate__bounceInLeft';
			$right_class = 'col-md-5 animate__animated animate__bounceInRight';

		}else{
			//Even Post
			$section_class = 'section-b';
			$reverse_class = 'row d-flex flex-row-reverse';
			$left_class = 'col-md-7 animate__animated animate__bounceInRight';
			$right_class = 'col-md-5 animate__animated animate__bounceInLeft';
		}
	 ?>

	<div class="<?php echo $section_class; ?>">
		<div class="container">
			<div class="<?php echo $reverse_class; ?>">
				<div class="<?php echo $left_class; ?>">
					<hr class="section-heading-spacer">
					<h2 class="section-heading"><?php echo the_title(); ?></h2>
					
					<div class="excerpt"><?php the_excerpt(); ?></div>
				</div>
				<div class="<?php echo $right_class; ?>">
					<?php the_post_thumbnail('full', array(
						'class' => 'img-responsive rounded-circle img-thumbnail', 
					)); ?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>



<?php get_footer();?>