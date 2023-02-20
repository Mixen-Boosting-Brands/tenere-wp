<?php get_header(); ?>

<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<section class="interna" data-aos="fade-up" data-aos-duration="1000">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1><?php the_title(); ?></h1>
				<ul class="list-inline">
					<li class="list-inline-item">
						<p><?php esc_html_e( 'Por ', 'html5blank' ); the_author(); ?></p>
					</li>
					<li class="list-inline-item">
						<p><?php the_date(); ?> <?php the_time(); ?></p>
					</li>
				</ul>
				<?php the_content(); ?>
				<?php edit_post_link(); ?>
			</div>
		</div>
	</div>
</section>

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

<?php get_footer(); ?>
