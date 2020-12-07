<?php get_header(); ?>

<section class="title-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h1>
					<?php
		            if (is_category()) {
		              single_cat_title();
		            } elseif (is_author()) {
		              the_post();
		              echo 'Archives By Author: '.get_the_author();
		              rewind_posts();
		            } elseif (is_tag()) {
		              single_tag_title();
		            } elseif (is_day()) {
		              echo 'Archives By Day: '.get_the_date();
		            } elseif (is_month()) {
		              echo 'Archives By Month: '.get_the_date('F Y');
		            } elseif (is_year()) {
		              echo 'Archives By Year: '. get_the_date('Y');
		            }else {
		              echo 'Archives';
		            }
		          ?>
				</h1>
			</div>
			<div class="col-md-8">
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
		<div class="<?php echo $section_class; ?>">
			<div class="container">
				<div class="<?php echo $reverse_class; ?>">
					<div class="<?php echo $left_class; ?>">
						<hr class="section-heading-spacer">
						<h2 class="section-heading"><?php echo the_title(); ?></h2>
						<p class="meta">
				          Posted at
				          <?php the_time('F j, Y g:i '); ?>
				          by
				          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
				          <?php
				          $categories = get_the_category();
				          $separator = ", ";
				          $output = '';

				          if ($categories) {
				            foreach ($categories as $category) {
				              $output .= '<a href="'. get_category_link($category->term_id).'">'. $category->cat_name.'</a>'. $separator;
				            }
				          }
				          echo trim($output,$separator);
				          ?>

				        </p>
						<div class="excerpt"><?php the_excerpt(); ?></div>
						<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &raquo</a>
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
	 <?php endwhile; ?>
<?php get_footer(); ?>