<?php get_header(); ?>

<section class="interna">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1><?php esc_html_e( 'Category: ', 'html5blank' ); single_cat_title(); ?></h1>
				<?php get_template_part( 'loop' ); ?>
				<?php get_template_part( 'pagination' ); ?>	
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
