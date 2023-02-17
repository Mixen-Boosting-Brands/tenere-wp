	<footer id="contacto">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-4 order-lg-3 mb-4 mb-lg-0">
                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-lg-6 col-xl-4 offset-xl-2">
                            <h1>Menú</h1>
                        </div>
                        <div class="col-lg-6">
                            <nav>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="<?php echo esc_url( home_url() ); ?>">
                                            Inicio
                                        </a>
                                    </li>
                                    <li>
                                        <a <?php if ( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if ( !is_home() ): ?><?php echo esc_url( home_url() ); ?>#nosotros<?php else: ?>#nosotros<?php endif; ?>">
                                            Nosotros
                                        </a>
                                    </li>
                                    <li>
                                        <a <?php if ( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if ( !is_home() ): ?><?php echo esc_url( home_url() ); ?>#nuestros-servicios<?php else: ?>#nuestros-servicios<?php endif; ?>">
                                            Servicios
                                        </a>
                                    </li>
                                    <li>
                                        <a <?php if ( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if ( !is_home() ): ?><?php echo esc_url( home_url() ); ?>#blog<?php else: ?>#blog<?php endif; ?>">
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a <?php if ( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if ( !is_home() ): ?><?php echo esc_url( home_url() ); ?>#podcast<?php else: ?>#podcast<?php endif; ?>">
                                            Podcast
                                        </a>
                                    </li>
                                    <li>
                                        <a class="anchor" href="#contacto">
                                            Contacto
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo esc_url( get_page_link( 3 ) ); ?>">
                                            Política
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-2 mb-4 mb-lg-0">
                    <!-- Aquí se inyecta feedback a usuario vía Ajax -->
                    <div id="form-messages"></div>
                    <!-- /Aquí se inyecta feedback a usuario vía Ajax -->
                    <form data-aos="fade-up" data-aos-duration="1000" action="<?php echo esc_url( get_template_directory_uri() ); ?>/mailer.php" method="POST" class="row g-3 needs-validation contact-form mb-4 mb-lg-0" id="ajax-contact" novalidate>
                        <div class="row">
                            <div class="col-md-6 form-floating">
                                <input type="text" class="form-control shadow-none" id="nombre" name="nombre" placeholder="Nombre*"
                                    pattern=".{5,50}" required>
                                <label for="nombre" class="form-label">Nombre*</label>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor introduce tu nombre completo.
                                </div>
                            </div>
                            <div class="col-md-6 form-floating">
                                <input type="email" class="form-control shadow-none" id="correo" name="correo" placeholder="Email*"
                                    required>
                                <label for="correo" class="form-label">Email*</label>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor introduce un correo electrónico válido.
                                </div>
                            </div>
                            <div class="col-md-12 form-floating">
                                <input type="tel" class="form-control shadow-none" id="telefono" name="telefono" placeholder="Teléfono*"
                                    required>
                                <label for="telefono" class="form-label">Teléfono*</label>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor introduce un número de teléfono válido (p. ej: 6141234567).
                                </div>
                            </div>
                            <div class="col-md-12 form-floating mb-4">
                                <textarea class="form-control shadow-none" id="mensaje" name="mensaje" placeholder="Mensaje*" style="height: 100px;" required></textarea>
                                <label for="mensaje">Mensaje*</label>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor introduce tu mensaje.
                                </div>
                            </div>
                            <div class="col-md-6 my-auto">
                                <button type="submit" class="btn btn-primary btn-block"><i class="fa-solid fa-paper-plane"></i> Enviar</button>
                                <div id="hold-on-a-sec">
                                    <i id="contact-spinner" class="fas fa-spinner fa-spin"></i> Espera un momento por favor...
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 order-lg-1">
                    <div class="row mb-4" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col">
                            <h1>Chihuahua</h1>
                            <ul class="list-unstyled info">
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-location-pin"></i>
                                    </a>
                                    <address>
                                        Av. de la Empresa<br>
                                        Vistas del Sol, Chihuahua, Chih.
                                    </address>
                                </li>
                                <li>
                                    <a href="tel:+526143970559">
                                        <i class="fa-solid fa-phone"></i>
                                    </a>
                                    <span>(614) 397 0559</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col">
                            <h1>Síguenos</h1>
                            <h6 class="text-uppercase">teneremx</h6>
                            <p></p>
                            <ul class="list-inline social">
                                <li class="list-inline-item">
                                    <a href="https://facebook.com/teneremx" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://instagram.com/teneremx" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://tiktok.com/teneremx" target="_blank">
                                        <i class="fa-brands fa-tiktok"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://linkedin.com/teneremx" target="_blank">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="500">
                    <a href="#">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.webp" alt="" class="logo img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/52614?text=Hola%20FOO%20BAR,%20necesito%20información." class="whatsapp" target="_blank">
        <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a>

	<?php wp_footer(); ?>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/app.bundle.js"></script>
</body>
</html>