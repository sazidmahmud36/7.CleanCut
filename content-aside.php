<div class="<?php echo $section_class; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<hr class="section-heading-spacer">
				<div class="clearfix"></div>
				<h2 class="section-heading animate__animated animate__bounceInLeft text-center"><?php the_title(); ?></h2>
				<div class="animate__animated animate__bounceInRight text-center">
					<p class="lead"><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="btn btn-primary m-auto">Read More &raquo</a>
				</div>
			</div>
		</div>
	</div>
</div>