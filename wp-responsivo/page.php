<?php get_header(); ?>

<div class="header-internas">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="col-md-6 col-lg-6">
				<?php wp_custom_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>