<?php get_header(); ?>

<section class="interna">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12 text-center">
				<h1><?php esc_html_e( '', 'html5blank' ); single_cat_title(); ?></h1>
			</div>
		</div>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="row mb-4">
			<div class="col-4 my-auto">
				<figure>
					<?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
				</figure>
			</div>
			<div class="col-6 my-auto">
				<h2><?php the_title(); ?></h2>
				<?php html5wp_excerpt( 'html5wp_index' ); ?>
				<?php edit_post_link(); ?>
			</div>
		</div>
	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>

		<?php get_template_part( 'pagination' ); ?>	
	</div>
</section>

<?php get_footer(); ?>
