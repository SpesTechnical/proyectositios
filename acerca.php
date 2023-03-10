<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Date's Lab-Información</title>
    <?php
        require('assets/custom/links.php');
    ?>
</head>

<body>

    <?php
        $_SESSION['nav'] = basename(__FILE__, ".php");
        include_once('./assets/custom/nav.php');
        require('assets/custom/modals.php');
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
                <use xlink:href="#wave-path" x="50" y="9" fill="#f5f5ff">
            </g>
        </svg>

    </section>
    <!------------------------------FIN HERO-->



    <main id="main">

        <!------------------------------SOBRE NOSOTROS-->
        <section class="contact section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Información</h2>
                    <p>Sobre nosotros</p>
                </div>


                <div class="row content justify-content-center text-md-center">
                    <div class="col-6-sm">
                        <img src="assets/img/Sobre.svg" class="img-fluid" alt="">
                        <center>
                            <h3>Date's Lab es un sitio de citas totalmente gratuito, aquí no te sorprenderá que no tengas que gastar un solo centavo para conocer y chatear con solteros, el uso del chat y todas las características del sitio son gratuitas.</h3>
                        </center>
                    </div>
                </div>
            </div>
        </section>
        <!------------------------------FIN SOBRE NOSOTROS-->


        <!------------------------------MISION VISION-->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <center>
                                <img src="assets/img/Mision.svg" class="img-fluid" alt="" width="200px">
                            </center>
                            <h3>Misión</h3>
                            <p>Nuestra misión es conectar a personas solteras alrededor del mundo en busca de una relación seria, una realación corta o una amistad.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <center>
                                <img src="assets/img/Vision.svg" class="img-fluid" alt="" width="200px">
                            </center>
                            <h3>Visión</h3>
                            <p>Ser la plataforma de citas más usada por las personas en busca de relaciones o amistad, con altos estándares de seguridad para la comodidad del usuario.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!------------------------------FIN MISION VISION-->


        <!------------------------------VALORES-->
        <section class="contact section-bg">
            <div class="container features" data-aos="fade-up">
                <header class="text-center">
                    <h2>Valores que dan impulso a nuestra empresa</h2>
                </header>


                <div class="row">
                    <div class="col-sm-6">
                        <img src="assets/img/Valores.svg" class="img-fluid" alt="">

                    </div>
                    <div class="col-sm-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Diferencia</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Honestidad</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Libertad</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Solidaridad</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Escucha</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Respeto</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

        </section>
        <!------------------------------VALORES-->

    </main>

    <?php
      require('assets/custom/footer.php')
    ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <?php
        require('assets/custom/js.php')
    ?>
</body>

</html>