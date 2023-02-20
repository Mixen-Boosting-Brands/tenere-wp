<?php get_header(); ?>

<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

	<section class="interna" data-aos="fade-up" data-aos-duration="1000">
		<h1><?php the_title(); ?></h1>

		<?php the_content(); ?>

		<?php edit_post_link(); ?>
	</section>

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

<?php get_footer(); ?>
