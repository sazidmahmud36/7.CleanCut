<?php get_header(); ?>
	<?php while (have_posts()) : the_post(); ?>
		<section class="title-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="col-md-6">
						<div class="sub-nav">
							<!-- sub navigation start -->
							<ul>
								<?php 
									$args =	 array(
										'child_of' => get_top_parent(),
										'title_li' => ''
									);
								 ?>
								 <?php wp_list_pages($args); ?>
							</ul>
							<!-- sub navigation end -->	
						</div>
					</div>

				</div>
			</div>
		</section>
		<section class="page">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="post-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div><br>
				<br>
					<?php the_content(); ?>
			</div>
			<div class="col-md-4">
				<?php if (is_active_sidebar('sidebar')): ?>
					<?php dynamic_sidebar('sidebar'); ?>
				<?php endif ?>
			</div>
		</div>
	</div>
</section>

	<?php endwhile; ?>
<?php get_footer(); ?>
