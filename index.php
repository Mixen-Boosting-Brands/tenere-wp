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
                                            <p>Somos un equipo de profesionales en estrategias de vida y nos encantaría ser tus asesores.</p>
                                            <p>Este proyecto nació con el propósito de ayudarte a lograr tus metas, gestionar tus riesgos y proteger tu patrimonio.</p>
                                            <p>Te acompañaremos durante todas las etapas de tu vida impulsando tu crecimiento y priorizando tus necesidades. Sabemos que puedes tener algunas dudas o te parezca complicado. Sin embargo, estamos aquí para hacerlo más sencillo para ti.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <!-- div class="carousel-item carousel-item-2">
                    <div class="logo-sencillo"></div>
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
                </div -->

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
                                            <a href="https://wa.me/526143970559?text=Hola%20Tenere,%20necesito%20informaci%C3%B3n." class="btn btn-lg btn-primary mt-5 mb-4">
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
                <!-- button type="button" data-bs-target="#carrusel-home" data-bs-slide-to="2" aria-label="Slide 3"></button -->
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
                    <p>Tenere es un proyecto fundado por Karelly Robles, con la única misión de ayudar a personas y empresas a proteger lo que más atesoran por medio de estrategias de aseguranza confiables e inteligentes. Tenemos la firme convicción de que una de las decisiones más sabias que puedes tomar es asegurar aquello que tanto esfuerzo te ha costado. Estamos aquí para ayudarte a lograrlo.</p>
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
                            <!-- p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, laboriosam laborum facere provident nobis at asperiores veniam dignissimos reiciendis, repudiandae molestiae officia repellat recusandae est? Debitis ex hic ratione natus.</p -->
                            <div class="w-100 d-block text-center">
                                <a href="<?php echo get_page_link( 28 ); ?>" class="ver-mas">
                                    Ver más <i class="fa-solid fa-caret-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1200">
                            <h2 id="titulo-empresas" class="titulo text-uppercase">Empresas</h2>
                            <!-- p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, laboriosam laborum facere provident nobis at asperiores veniam dignissimos reiciendis, repudiandae molestiae officia repellat recusandae est? Debitis ex hic ratione natus.</p -->
                            <div class="w-100 d-block text-center">
                                <a href="<?php echo get_page_link( 30 ); ?>" class="ver-mas">
                                    Ver más <i class="fa-solid fa-caret-right"></i>
                                </a>
                            </div>
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
                    <a href="https://wa.me/526143970559?text=Hola%20Tenere,%20necesito%20informaci%C3%B3n." class="btn btn-info btn-lg text-uppercase display-1">
						¡Contáctanos!
					</a>
                </div>
            </div>
        </div>
    </section>

    <!-- section id="cobertura-automoviles">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 my-auto">
                    <h2 class="text-uppercase" data-aos="fade-up" data-aos-duration="1000">
                        <span>Cobertura para automóviles:</span> Cobertura confiable para tu vehículo
                    </h2>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">Cuando se trata de proteger tu vehículo y asegurar tu tranquilidad, contar con una póliza de seguro de autos confiable es fundamental. Con la amplia gama de opciones disponibles en el mercado, es importante comprender los diferentes tipos de coberturas y encontrar aquella que se ajuste perfectamente a tus necesidades.</p>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">Las pólizas de seguro para autos son una parte esencial de la vida de cualquier conductor. No solo te brindan protección financiera en caso de un accidente, sino que también te dan la tranquilidad de saber que estás cubierto en caso de cualquier eventualidad. Aunque puede ser tentador buscar la póliza más barata disponible, es importante recordar que no todas las pólizas son iguales, y que puede haber diferencias significativas en la calidad y la cantidad de cobertura que ofrecen.</p>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1500">En Tenere, lo entendemos y nos enorgullece ofrecerte las mejores soluciones en seguros de autos a los precios más competitivos.</p>
                </div>
                <div class="col-lg-6 offset-lg-6 text-center">
                    <a href="https://wa.me/526143970559?text=Hola%20Tenere,%20necesito%20informaci%C3%B3n." target="_blank" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="2000">
                        <h4>Contáctanos hoy mismo para recibir asesoría</h4>
                    </a>
                </div>
            </div>
        </div>
    </section -->
    
    <!-- section id="cobertura-flotillas">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="text-uppercase" data-aos="fade-up" data-aos-duration="1000">
                        <span>Cobertura para flotillas:</span> Protege tu inversión y tu negocio
                    </h2>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">Las flotillas de autos son un activo fundamental para muchas empresas, ya que desempeñan un papel crucial en el funcionamiento diario de las operaciones comerciales. Estos vehículos no solo transportan empleados y productos, sino que también representan una inversión significativa. Es por eso que asegurar adecuadamente una flotilla de autos es esencial para proteger tanto los activos de la empresa como los intereses financieros. Las pólizas de seguro para flotillas de autos están diseñadas específicamente para cubrir las necesidades de las empresas, ofreciendo una protección integral en caso de accidentes, daños o robos.</p>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">En nuestro compromiso de brindarte el mejor servicio, contamos con un equipo de agentes de seguros especializados en seguros para flotillas de autos ligeros y de carga. Ellos estarán encantados de trabajar contigo, evaluar tus necesidades específicas y ofrecerte una póliza personalizada que se ajuste a tu presupuesto y requerimiento.</p>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1500">Contáctanos hoy mismo para recibir asesoría.</p>
                </div>
            </div>
        </div>
    </section -->

    <!-- section id="podcast" class="blog">
        <div class="container">
            <div class="row mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                <div class="col">
                    <h6 class="text-uppercase">Nuestros canales</h6>
                    <h1 class="text-uppercase">Escucha nuestro podcast</h1>
                </div>
            </div>
            <div class="row mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1500">
            <?php
                $query = new WP_Query( 
                    array( 
                        'cat' => 3,
                        'posts_per_page' => 3
                    ) 
                );

                if ($query->have_posts()): while ($query->have_posts()) :$query-> the_post();
            ?>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="row post">
                        <div class="col-5 my-auto">
                            <a href="<?php the_permalink(); ?>">
                                <figure>
                                    <?php the_post_thumbnail('custom-thumb', array('class' => 'img-fluid')); ?>
                                </figure>
                            </a>
                        </div>
                        <div class="col-7 my-auto">
                            <a href="<?php the_permalink(); ?>">
                                <h1><?php the_title(); ?></h1>
                            </a>
                            <p class="text-small text-uppercase">
                                <?php echo get_the_date('j F, Y'); ?>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <span class="icon">
                                        <i class="fa-solid fa-microphone"></i>
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-secondary rounded-pill">
                                        Escuchar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="2000">
                <div class="col text-center">
                    <a href="<?php echo get_category_link( 3 ); ?>" class="ver-mas">
                        Ver más <i class="fa-solid fa-caret-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </section -->

    <section class="descanso-alt">
        <div class="container">
            <div class="row">
                <div class="col-12 my-auto text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="text-uppercase">¡Quiero ser asesor!</h1>
                    <h2 class="display-2">¡Quiero ser asesor!</h2>
                    <p class="text-uppercase">
                        Únete a la familia Tenere.
                    </p>
                    <a 
                        href="https://wa.me/526143970559?text=Hola%20Tenere,%20necesito%20informaci%C3%B3n."
                        class="btn btn-info btn-lg text-uppercase display-1"
                        target="_blank"
                    >
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
            <?php
                $query = new WP_Query( 
                    array( 
                        'cat' => 2,
                        'posts_per_page' => 3
                    ) 
                );

                if ($query->have_posts()): while ($query->have_posts()) :$query-> the_post();
            ?>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="row post">
                        <div class="col-5 my-auto">
                            <a href="<?php the_permalink(); ?>">
                                <figure>
                                    <?php the_post_thumbnail('custom-thumb', array('class' => 'img-fluid')); ?>
                                </figure>
                            </a>
                        </div>
                        <div class="col-7 my-auto">
                            <a href="<?php the_permalink(); ?>">
                                <h1><?php the_title(); ?></h1>
                            </a>
                            <p class="text-small text-uppercase">
                                <?php echo get_the_date('j F, Y'); ?>
                            </p>
                            <p class="text-small">
                                <?php html5wp_excerpt('html5wp_blog'); ?>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <span class="icon">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-secondary rounded-pill">
                                        Leer más
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                <div class="col text-center">
                    <a href="<?php echo get_category_link( 2 ); ?>" class="ver-mas">
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
                    <h1>Sigue nuestras redes sociales</h1>
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
                            <a href="https://www.tiktok.com/@tenere_mx" target="_blank">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/in/luisa-karelly-robles-hernandez-7b5b709b/" target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>
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
