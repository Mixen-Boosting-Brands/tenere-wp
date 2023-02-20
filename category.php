<?php get_header(); ?>

<section class="interna">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1><?php esc_html_e( '', 'html5blank' ); single_cat_title(); ?></h1>
			</div>
		</div>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="row">
			<div class="col-4 my-auto">
				<figure>
					<?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
				</figure>
			</div>
			<div class="col-6 my-auto">
				<h1><?php the_title(); ?></h1>
				<ul class="list-inline">
					<li class="list-inline-item">
						<p><?php esc_html_e( 'Por ', 'html5blank' ); the_author(); ?></p>
					</li>
					<li class="list-inline-item">
						<p><?php the_date(); ?> <?php the_time(); ?></p>
					</li>
				</ul>
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
