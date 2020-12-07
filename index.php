<?php get_header(); ?>

<section class="title-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1><?php wp_title(); ?></h1>
			</div>
			<div class="col-md-6">
				<?php if (is_active_sidebar('subnavbar')): ?>
					<?php dynamic_sidebar('subnavbar'); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>


	<?php 
		$i = 0;
	 ?>
	 <?php while (have_posts()) : the_post(); ?>
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

		  <?php if (has_post_format($format, $post_id) && get_post_format($post_id) == 'aside'): ?>
			  <?php // Aside Content
			 		require get_template_directory() . '/content-aside.php';
			 	?>

		 <?php elseif (has_post_format($format, $post_id) && get_post_format($post_id) == 'gallery'): ?>
			 <?php // Gallery Content
			 		require get_template_directory() . '/content-gallery.php';
			 	?>
		 
		 <?php else: ?>
		 	<?php // Standard Content
		 		require get_template_directory() . '/content.php';
		 	?>
		 	
		 <?php endif ?>

	 <?php endwhile; ?>
<?php get_footer(); ?>