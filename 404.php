<?php get_header(); ?>

<section class="interna" data-aos="fade-up" data-aos-duration="1000">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1><?php esc_html_e( 'Error 404', 'html5blank' ); ?></h1>
				<p>No se encontró a página solicitada. <a href="<?php echo esc_url( home_url() ); ?>">Volver al inicio</a>.</p>
				<?php edit_post_link(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>