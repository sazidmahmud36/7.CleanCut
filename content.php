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
