<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Date's Lab-Login</title>
    <?php
    require('assets/custom/links.php');
    ?>
</head>

<body>

    <?php
    $_SESSION['nav'] = basename(__FILE__, ".php");
    include_once('./assets/custom/nav.php');
    include_once('./assets/custom/modals.php');
    ?>
    
    <!------------------------------HERO-->
    <section id="hero">
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>
    </section>
    <!------------------------------FIN HERO-->

    <main id="main">

        <section>
            <div class="container mt-3">
                <div class="section-title" data-aos="fade-up">
                    <h2>Plataforma</h2>
                    <p>Login</p>
                </div>

                <div class="card" id="cartapasos">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-6" data-aos="fade-up" style="text-align:center;">
                                <img src="assets/img/LogoFooter.svg" class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-6" data-aos="fade-up" style="margin-top: 55px;">
                                <h3 class="mb-2">Inicio Sesión</h3>
                                <p style="color: #78A0FF;">Hola de nuevo! Es un placer tenerte aquí.</p>

                                <form id="loginUsuarios">
                                    <div class="form-group mb-3">
                                        <h4>Usuario</h4>
                                        <input type="text" class="form-control inputsM" placeholder="Ingrese su Usuario" id="usuario" name="usuario"/>
                                    </div>

                                    <div class="form-group mb-3">
                                        <h4>Contraseña</h4>
                                        <input type="text" class="form-control inputsM" placeholder="Ingrese su Contraseña" id="contrasena" name="contrasena" />
                                    </div>

                                    <div class="form-group mb-3">
                                        <button type="submit" id="btnlogin" class="form-control btnmodificadoRegistro">Ingresar <i class="fa-solid fa-right-to-bracket"></i></button>
                                    </div>
                                    
                                    <div id="alertaLogin">

                                    </div>
                                    <hr>
                                </form>

                                <div class="d-flex justify-content-between">
                                    <a data-bs-toggle="modal" class="aper2" data-bs-target="#recuperaContra" style="text-align:left"> Olvidó su contraseña?</a>
                                    <a data-bs-toggle="modal" data-bs-target="#registroNuevo" class="aper">Registrese Aquí</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Date's Lab</h3>
                        <p>
                            Desarrollado por <a href="https://cuc.ac.cr.com/">TI-162 G7</a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Enlaces Útiles</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="acerca.php">Sobre Nosotros</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="login.php">Iniciar Sesión</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="contacto.php">Contacto</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nuestros Servicios</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a data-bs-toggle="modal" data-bs-target="#registroNuevo">Registrarse</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#informacion">Información</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#testimonios">Testimonios</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nuestras Redes Sociales</h4>
                        <p>Próximamente</p>
                        <div class="social-links mt-3">
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Date's Lab</span></strong>. Todos los derechos reservados
            </div>

        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <?php
        include_once('./assets/custom/js.php');
    ?>
</body>

</html>