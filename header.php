<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#131a60">
    <meta name="msapplication-TileColor" content="#131a60">
    <meta name="theme-color" content="#131a60">

	<?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/styles.css">
</head>
<body>
    <div id="backdrop"></div>
    <div class="menu">
        <a id="cerrar-menu" href="javascript:void(0)">
            <i class="fas fa-times"></i>
        </a>
        <div class="menu-contenido">
            <a class="anchor" id="btn-logo" href="<?php echo esc_url( home_url() ); ?>">
                <img class="logo img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.webp" alt="">
            </a>
            <nav>
                <ul class="list-unstyled">
                    <li>
                        <a id="btn-nav-1" href="<?php echo esc_url( home_url() ); ?>">Inicio</a>
                    </li>
                    <li>
                        <a <?php if ( is_home() ): ?>class="anchor"<?php endif; ?> id="btn-nav-2" href="<?php if ( !is_home() ): ?><?php echo esc_url( home_url() ); ?>#nosotros<?php else: ?>#nosotros<?php endif; ?>">Nosotros</a>
                    </li>
                    <li>
                        <a <?php if ( is_home() ): ?>class="anchor"<?php endif; ?> id="btn-nav-3" href="<?php if ( !is_home() ): ?><?php echo esc_url( home_url() ); ?>#nuestros-servicios<?php else: ?>#nuestros-servicios<?php endif; ?>">Servicios</a>
                    </li>
                    <!-- li>
                        <a <?php if ( is_home() ): ?>class="anchor"<?php endif; ?> id="btn-nav-4" href="<?php if ( !is_home() ): ?><?php echo esc_url( home_url() ); ?>#blog<?php else: ?>#blog<?php endif; ?>">Blog</a>
                    </li>
                    <li>
                        <a <?php if ( is_home() ): ?>class="anchor"<?php endif; ?> id="btn-nav-5" href="<?php if ( !is_home() ): ?><?php echo esc_url( home_url() ); ?>#podcast<?php else: ?>#podcast<?php endif; ?>">Podcast</a>
                    </li -->
                    <li>
                        <a id="btn-nav-6" href="<?php echo esc_url( get_page_link( 7 ) ); ?>">
                            Asesores
                        </a>
                    </li>
                    <li>
                        <a id="btn-nav-7" class="anchor" href="#contacto">
                            Contacto
                        </a>
                    </li>
                </ul>
            </nav>
            <a href="https://calendly.com/teneremx" class="btn btn-primary" id="btn-contacto">
				<i class="fa-solid fa-calendar-days"></i> 
				Agenda una cita
			</a>
            <div id="social">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="https://facebook.com/teneremx" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://instagram.com/teneremx" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.tiktok.com/@tenere_mx" target="_blank">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/in/luisa-karelly-robles-hernandez-7b5b709b/" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="contacto-menu">
                <ul class="list-unstyled">
                    <!-- li>
                        <i class="far fa-envelope"></i> <a href="mailto:cmail@domain.com">mail@domain.com</a>
                    </li -->
                    <li>
                        <i class="fas fa-phone"></i> <a href="tel:+526143970559"><i class="fa-solid fa-phone"></i>(614) 3970559</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <header id="navbar">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3 my-auto">
                    <a href="<?php echo esc_url( home_url() ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.webp" alt="" class="logo img-fluid" id="logo-navbar">
                    </a>
                </div>
                <div class="col-lg-6 my-auto text-center d-none d-lg-block">
                    <nav>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="<?php echo esc_url( home_url() ); ?>">Inicio</a>
                            </li>
                            <li class="list-inline-item">
                                <a <?php if ( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if ( !is_home() ): ?><?php echo esc_url( home_url() ); ?>#nosotros<?php else: ?>#nosotros<?php endif; ?>">Nosotros</a>
                            </li>
                            <li class="list-inline-item">
                                <a <?php if ( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if ( !is_home() ): ?><?php echo esc_url( home_url() ); ?>#nuestros-servicios<?php else: ?>#nuestros-servicios<?php endif; ?>">Servicios</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-6 col-lg-3 my-auto text-end">
                    <a id="mburger" class="d-lg-none" href="javascript:void(0)">
                        <i class="fas fa-bars"></i>
                    </a>
                    <a href="https://calendly.com/teneremx" class="btn btn-primary d-none d-lg-block" target="_blank">
                        <i class="fa-solid fa-calendar-days"></i> 
                        Agenda una cita
                    </a>
                </div>
            </div>
        </div>
    </header>
