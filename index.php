<?php get_header(); ?>

	<section id="jumbotron">
        <div id="carrusel-home" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item carousel-item-1 active">
                    <div class="container-fluid">
                        <div class="row g-0">
                            <div class="col-12">
                                <div class="contenedor-foto foto-1">
                                    <div class="overlay"></div>
                                    <div class="row">
                                        <div class="col-lg-6 offset-lg-6 my-auto">
                                            <h1 class="display-1">¡Bienvenidos a Tenere!</h1>
                                            <h2 class="display-2">¡Bienvenidos a Tenere!</h2>
                                            <p>Mi nombre es Karelly Robles y me encantaría ser tu asesora de seguros.</p>
                                            <p>Este proyecto nació con el propósito de ayudarte a lograr tus metas, gestionar tus riesgos y proteger tu patrimonio.</p>
                                            <p>Te acompañaremos durante todas las etapas de tu vida impulsando tu crecimiento y priorizando tus necesidades.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item carousel-item-2">
                    <!-- div class="logo-sencillo"></div -->
                    <h1 class="aliados-tenere">Aliados Tenere</h1>
                    <div class="container-fluid">
                        <div class="row g-0">
                            <div class="col-12">
                                <div class="contenedor-foto foto-2">
                                    <div class="overlay"></div>
                                    <div>
                                        <figure>
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-sencillo.png" alt="" class="logo img-fluid">
                                        </figure>
                                        <h1 class="display-1">¡Crezcamos juntos!</h1>
                                        <a href="#" class="btn btn-lg btn-primary">
                                            ¡Quiero ser aliado!
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item carousel-item-3">
                    <div class="logo-sencillo"></div>
                    <div class="container-fluid">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="contenedor-foto foto-3">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contenedor-info">
                                    <div>
                                        <h1 class="display-1">Nosotros cuidamos de ti y tu <span id="familia">familia</span>.</h1>
                                        <div class="text-center">
                                            <a href="https://calendly.com/teneremx" class="btn btn-lg btn-primary mt-5 mb-4">
                                                ¡Agenda una cita hoy!
                                            </a>
                                            <p>
                                                ¡Estaremos muy felices de darte la<br>
                                                bienvenida a la familia <strong>TENERE</strong>!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carrusel-home" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carrusel-home" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carrusel-home" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carrusel-home" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrusel-home" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section id="nosotros">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto" data-aos="fade-up" data-aos-duration="1000">
                    <h6 class="text-uppercase">Quiénes Somos</h6>
                    <h1 class="text-uppercase">Acerca de Tenere</h1>
                    <p>Ayudamos a las personas a proteger lo que más atesoran por medio de estrategias de aseguranza confiables e inteligentes, además, atraemos y desarrollamos talento para que más personas puedan hacer lo que hacemos en Tenere con tanta pasión.</p>
                </div>
                <div class="col-lg-6 my-auto">
                    <figure>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/foto-nosotros.png" alt="" class="img-fluid" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section id="nuestros-servicios">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 my-auto">
                    <figure>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/foto-servicios.png" alt="" class="img-fluid mb-5 mb-lg-0" data-aos="fade-up" data-aos-duration="1000">
                    </figure>
                </div>
                <div class="col-lg-6 offset-lg-1 my-auto">
                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <h6 class="text-uppercase">Cómo te ayudamos</h6>
                        <h1 class="text-uppercase">Nuestros servicios</h1>
                        <p class="text-small">Conoce nuestras áreas de especialidad en cada rama.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                            <h2 id="titulo-personas" class="titulo text-uppercase">Personas</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, laboriosam laborum facere provident nobis at asperiores veniam dignissimos reiciendis, repudiandae molestiae officia repellat recusandae est? Debitis ex hic ratione natus.</p>
                            <a href="#" class="ver-mas">
                                Ver más <i class="fa-solid fa-caret-right"></i>
                            </a>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1200">
                            <h2 id="titulo-empresas" class="titulo text-uppercase">Empresas</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, laboriosam laborum facere provident nobis at asperiores veniam dignissimos reiciendis, repudiandae molestiae officia repellat recusandae est? Debitis ex hic ratione natus.</p>
                            <a href="#" class="ver-mas">
                                Ver más <i class="fa-solid fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="descanso">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 my-auto text-center text-lg-start">
                    <h1 class="text-uppercase" data-aos="fade-up" data-aos-duration="1000">
                        Somos tu llamada de <span>emergencia</span>
                    </h1>
                </div>
                <div class="col-lg-4 my-auto text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <a href="#" class="btn btn-info btn-lg text-uppercase display-1">¡Contáctanos!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="podcast" class="blog">
        <div class="container">
            <div class="row mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                <div class="col">
                    <h6 class="text-uppercase">Nuestros canales</h6>
                    <h1 class="text-uppercase">Escucha nuestro podcast</h1>
                </div>
            </div>
            <div class="row mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1500">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="row post">
                        <div class="col-5 my-auto">
                            <a href="#">
                                <figure>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-podcast.png" alt="" class="img-fluid">
                                </figure>
                            </a>
                        </div>
                        <div class="col-7 my-auto">
                            <a href="#">
                                <h1>Título</h1>
                            </a>
                            <p class="text-small text-uppercase">
                                10/02/2023
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <span class="icon">
                                        <i class="fa-solid fa-microphone"></i>
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-secondary rounded-pill">
                                        Escuchar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="row post">
                        <div class="col-5 my-auto">
                            <a href="#">
                                <figure>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-podcast.png" alt="" class="img-fluid">
                                </figure>
                            </a>
                        </div>
                        <div class="col-7 my-auto">
                            <a href="#">
                                <h1>Título</h1>
                            </a>
                            <p class="text-small text-uppercase">
                                10/02/2023
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <span class="icon">
                                        <i class="fa-solid fa-microphone"></i>
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-secondary rounded-pill">
                                        Escuchar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="row post">
                        <div class="col-5 my-auto">
                            <a href="#">
                                <figure>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-podcast.png" alt="" class="img-fluid">
                                </figure>
                            </a>
                        </div>
                        <div class="col-7 my-auto">
                            <a href="#">
                                <h1>Título</h1>
                            </a>
                            <p class="text-small text-uppercase">
                                10/02/2023
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <span class="icon">
                                        <i class="fa-solid fa-microphone"></i>
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-secondary rounded-pill">
                                        Escuchar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="2000">
                <div class="col text-center">
                    <a href="#" class="ver-mas">
                        Ver más <i class="fa-solid fa-caret-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="descanso-alt">
        <div class="container">
            <div class="row">
                <div class="col-12 my-auto text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="text-uppercase">¡Quiero ser asesor!</h1>
                    <h2 class="display-2">¡Quiero ser asesor!</h2>
                    <p class="text-uppercase">
                        Únete a la familia Tenere.
                    </p>
                    <a href="#" class="btn btn-info btn-lg text-uppercase display-1">
                        ¡Contáctanos!
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="blog">
        <div class="container">
            <div class="row mb-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="col">
                    <h6 class="text-uppercase">Nuestros canales</h6>
                    <h1 class="text-uppercase">Sigue nuestro blog</h1>
                </div>
            </div>
            <div class="row mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="row post">
                        <div class="col-5 my-auto">
                            <a href="#">
                                <figure>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-blog.png" alt="" class="img-fluid">
                                </figure>
                            </a>
                        </div>
                        <div class="col-7 my-auto">
                            <a href="#">
                                <h1>Título</h1>
                            </a>
                            <p class="text-small text-uppercase">
                                10/02/2023
                            </p>
                            <p class="text-small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <span class="icon">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-secondary rounded-pill">
                                        Leer más
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="row post">
                        <div class="col-5 my-auto">
                            <a href="#">
                                <figure>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-blog.png" alt="" class="img-fluid">
                                </figure>
                            </a>
                        </div>
                        <div class="col-7 my-auto">
                            <a href="#">
                                <h1>Título</h1>
                            </a>
                            <p class="text-small text-uppercase">
                                10/02/2023
                            </p>
                            <p class="text-small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <span class="icon">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-secondary rounded-pill">
                                        Leer más
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="row post">
                        <div class="col-5 my-auto">
                            <a href="#">
                                <figure>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-blog.png" alt="" class="img-fluid">
                                </figure>
                            </a>
                        </div>
                        <div class="col-7 my-auto">
                            <a href="#">
                                <h1>Título</h1>
                            </a>
                            <p class="text-small text-uppercase">
                                10/02/2023
                            </p>
                            <p class="text-small">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <span class="icon">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-secondary rounded-pill">
                                        Leer más
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                <div class="col text-center">
                    <a href="#" class="ver-mas">
                        Ver más <i class="fa-solid fa-caret-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="descanso-alt-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 my-auto text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h1>Síguenos en redes</h1>
                </div>
                <div class="col-lg-4 my-auto text-center text-lg-start" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <ul class="list-inline social mb-0">
                        <li class="list-inline-item">
                            <a href="https://instagram.com/teneremx" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://facebook.com/teneremx" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <h2 class="text-lowercase">TenereMX</h2>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="testimoniales" class="generic">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h6 class="text-uppercase">Testimonio</h6>
                    <h1 class="text-uppercase">Nuestros clientes</h1>
                </div>
            </div>
            <div class="row">
                <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <div id="carrusel-testimoniales" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Slide 1 -->
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-4 mb-4 mb-lg-0 text-center">
                                        <figure class="mb-3">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimoniales/thumb-testimonial-1.png" alt="" class="img-fluid">
                                        </figure>
                                        <h2>Georgina Hernández</h2>
                                        <p>
                                            Hace algunos meses vivi momentos de angustia al recibir un diagnóstico de tumor en el hígado, cómo es de esperarse no tenía ni idea de como era la manera correcta de enfrentarlo y mucho menos de cómo iniciar el proceso de trámites, no solo es la incertidumbre del padecimiento si no también la parte económica.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0 text-center">
                                        <figure class="mb-3">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimoniales/thumb-testimonial-2.png" alt="" class="img-fluid">
                                        </figure>
                                        <h2>Timna Durán</h2>
                                        <p>
                                            Karelly escucha cada una de mis peticiones y me ofrece  atención personalizada a mis necesidades, evidenciando que conoce cada uno de los productos que vende ya que siempre me proporciona información completa y detallada de las pólizas y posibles formas de pago. Siempre tiene excelente atención y  la puedo contactar cuando la necesito.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0 text-center">
                                        <figure class="mb-3">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimoniales/thumb-testimonial-3.png" alt="" class="img-fluid">
                                        </figure>
                                        <h2>Selene Vega</h2>
                                        <p>
                                            Sin duda alguna la mejor asesora que pude encontrar. Hace 2 años al contratar el mejor seguro de gastos médicos mayores, siempre al pendiente de sus clientes, siempre resuelve mis dudas y me ayuda en todo lo que necesito, un servicio de 5 estrellas en todo sentido, gracias por tanto.
                                        </p>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Slide 2 -->
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-4 mb-4 mb-lg-0 text-center">
                                        <figure class="mb-3">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimoniales/thumb-testimonial-1.png" alt="" class="img-fluid">
                                        </figure>
                                        <h2>Georgina Hernández</h2>
                                        <p>
                                            Hace algunos meses vivi momentos de angustia al recibir un diagnóstico de tumor en el hígado, cómo es de esperarse no tenía ni idea de como era la manera correcta de enfrentarlo y mucho menos de cómo iniciar el proceso de trámites, no solo es la incertidumbre del padecimiento si no también la parte económica.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0 text-center">
                                        <figure class="mb-3">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimoniales/thumb-testimonial-2.png" alt="" class="img-fluid">
                                        </figure>
                                        <h2>Timna Durán</h2>
                                        <p>
                                            Karelly escucha cada una de mis peticiones y me ofrece  atención personalizada a mis necesidades, evidenciando que conoce cada uno de los productos que vende ya que siempre me proporciona información completa y detallada de las pólizas y posibles formas de pago. Siempre tiene excelente atención y  la puedo contactar cuando la necesito.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0 text-center">
                                        <figure class="mb-3">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimoniales/thumb-testimonial-3.png" alt="" class="img-fluid">
                                        </figure>
                                        <h2>Selene Vega</h2>
                                        <p>
                                            Sin duda alguna la mejor asesora que pude encontrar. Hace 2 años al contratar el mejor seguro de gastos médicos mayores, siempre al pendiente de sus clientes, siempre resuelve mis dudas y me ayuda en todo lo que necesito, un servicio de 5 estrellas en todo sentido, gracias por tanto.
                                        </p>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Slide 3 -->
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-4 mb-4 mb-lg-0 text-center">
                                        <figure class="mb-3">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimoniales/thumb-testimonial-1.png" alt="" class="img-fluid">
                                        </figure>
                                        <h2>Georgina Hernández</h2>
                                        <p>
                                            Hace algunos meses vivi momentos de angustia al recibir un diagnóstico de tumor en el hígado, cómo es de esperarse no tenía ni idea de como era la manera correcta de enfrentarlo y mucho menos de cómo iniciar el proceso de trámites, no solo es la incertidumbre del padecimiento si no también la parte económica.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0 text-center">
                                        <figure class="mb-3">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimoniales/thumb-testimonial-2.png" alt="" class="img-fluid">
                                        </figure>
                                        <h2>Timna Durán</h2>
                                        <p>
                                            Karelly escucha cada una de mis peticiones y me ofrece  atención personalizada a mis necesidades, evidenciando que conoce cada uno de los productos que vende ya que siempre me proporciona información completa y detallada de las pólizas y posibles formas de pago. Siempre tiene excelente atención y  la puedo contactar cuando la necesito.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 mb-4 mb-lg-0 text-center">
                                        <figure class="mb-3">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimoniales/thumb-testimonial-3.png" alt="" class="img-fluid">
                                        </figure>
                                        <h2>Selene Vega</h2>
                                        <p>
                                            Sin duda alguna la mejor asesora que pude encontrar. Hace 2 años al contratar el mejor seguro de gastos médicos mayores, siempre al pendiente de sus clientes, siempre resuelve mis dudas y me ayuda en todo lo que necesito, un servicio de 5 estrellas en todo sentido, gracias por tanto.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carrusel-testimoniales" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carrusel-testimoniales" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
