<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Date's Lab-Inicio</title>
  <?php
      require('assets/custom/links.php');
  ?>
</head>

<body>

  <?php
    $_SESSION['nav'] = basename(__FILE__,".php");
    include_once('./assets/custom/nav.php');
    require('assets/custom/modals.php');
  ?>

  <!------------------------------HERO-->
  <section id="hero">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1><span>La mejor manera para encontrar a tu pareja</span></h1>
            <div class="text-center text-lg-start">
              <a data-bs-toggle="modal" data-bs-target="#registroNuevo" class="btn-get-started scrollto">Registrarse</a>

              <a href="#informacion" class="btn-get-started">¿Cómo funciona?</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/DateLab2.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

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

    <!------------------------------INFORMACIÓN EMPRESA-->
    <section id="informacion" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Presentámos una solución revolucionaria</h3>
            <p>Únete hoy a nuestra comunidad y experimenta los beneficios.</p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="fa-duotone fa-timer"></i></div>
              <h4 class="title"><a href="">Chats Volátiles</a></h4>
              <p class="description">Envía y recibe mensajes durante 30 minutos sin preocupación de que haya historial.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="fa-duotone fa-camera-web"></i></div>
              <h4 class="title"><a href="">Video LLamadas</a></h4>
              <p class="description">Anímate a dar un paso más e interactua con la persona que hablas.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="fa-duotone fa-eye-slash"></i></div>
              <h4 class="title"><a href="">Modo incógnito</a></h4>
              <p class="description">Da likes y suspiros a los demás sin que se enteren quién eres.</p>
            </div>

          </div>
        </div>
      </div>
      </div>
    </section>

    <!------------------------------INFORMACIÓN EMPRESA CONTADORES-->
    <section id="counts" class="counts">
      <div class="container">
        <div class="row" data-aos="fade-up">
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fa-solid fa-users"></i>
              <span data-purecounter-start="0" data-purecounter-end="4732" data-purecounter-duration="1" class="purecounter"></span>
              <p>Usuarios Registrados</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="fa-solid fa-heart"></i>
              <span data-purecounter-start="0" data-purecounter-end="11289" data-purecounter-duration="1" class="purecounter"></span>
              <p>Likes Dados</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fa-regular fa-calendar-heart"></i>
              <span data-purecounter-start="0" data-purecounter-end="5223" data-purecounter-duration="1" class="purecounter"></span>
              <p>Citas Concretadas</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fa-solid fa-fire-flame-curved"></i>
              <span data-purecounter-start="0" data-purecounter-end="9890" data-purecounter-duration="1" class="purecounter"></span>
              <p>Suspiros Dados</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!------------------------------INFORMACIÓN EMPRESA DETALLES-->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/Img01.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Relaciones de éxito que empiezan por internet</h3>
            <p>
              Las relaciones sólidas constuidas por intermedio de Match empiezan por las afinidades en comun que las parejas descubren mientras navegan por el sitio.
            </p>
            <p>
              Aquí es el comienzo de todo y por eso, surgen más de 6 mil relatos por año de relaciones exitosas.
            </p>

            <a href="login.php">
              <button class="btnmodificadoInfo">Probrar Ahora</button>
            </a>
          </div>

        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/Img02.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Tecnología y interactividad reunen miles de solteros</h3>
            <p>
              Uno de los diferenciales de Match es la cantidad de personas y de oportunidades que ofrece. Son millones de personas cadastradas disponibles para un compromiso serio.
            </p>
            <p>
              Por eso, somos capaces de concilar tus necesidades con nuestras herramientas de búsqueda para que sea posible encontrar perfiles que sean compatibles con el tuyo.
            </p>
            <a href="login.php">
              <button class="btnmodificadoInfo">Probrar Ahora</button>
            </a>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/Matchs.gif" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>¡Match es líder en Citas!</h3>
            <p>
              Match existe para juntar las personas que están solteros y que desean una relacion seria. Nuestro servicio ayuda en la búsqueda por aquella persona que va a hacer parte de los momentos más importantes de tu vida.
            </p>
            <a href="login.php">
              <button class="btnmodificadoInfo">Probrar Ahora</button>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!------------------------------INFORMACIÓN EMPRESA PASOS-->
    <section class="section-bg">
      <div class="container mt-3">
        <div class="row">
          <div class="card" id="cartapasos">
            <div class="card-body">
              <div class="row">
                <div class="col-6-sm">
                  <div class="section-title" data-aos="fade-up">
                    <p>¿Cómo unirse a nuestra comunidad?</p>
                    <h5>Solo 3 sencillos pasos para encontrar a tu amor.</h5>
                    <a data-bs-toggle="modal" data-bs-target="#registroNuevo">
                      <button class="btnmodificadoRegistro">Registrarse Ahora</button>
                    </a>
                  </div>

                </div>
                <div class="col-6-sm">
                  <h2>Paso <i class="fa-solid fa-circle-1"></i></h2>
                  <p>Crear una cuenta dentro de la aplicación.</p>
                  <hr>
                  <h2>Paso <i class="fa-solid fa-circle-2"></i></h2>
                  <p>Completar los datos solicitados para agregar al perfil.</p>
                  <hr>
                  <h2>Paso <i class="fa-solid fa-circle-3"></i></h2>
                  <p>Listo! Comience la busqueda de personas.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!------------------------------INFORMACIÓN EMPRESA TESTIMONIOS-->
    <section id="testimonios" class="testimonials">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10 col-xl-8 text-center">
            <h1 style="color: white;">Testimonios</h1>
            <p class="mb-4 pb-2 mb-md-5 pb-md-0">
              A la gente le encanta lo que hacemos y queremos hacértelo saber.
            </p>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card">
              <div class="card-body py-4 mt-2">
                <div class="d-flex justify-content-center mb-4">
                  <img src="assets/img/testimonios/Img03.jpg" class="rounded-circle shadow-1-strong" width="100" height="100" />
                </div>
                <h5 class="font-weight-bold">Anna Lisa Meltrozo</h5>
                <h6 class="font-weight-bold my-3">Usuario</h6>
                <ul class="list-unstyled d-flex justify-content-center">
                  <li>
                    <i class="fa-solid fa-star" style="color: #ff7bac;"></i>
                  </li>
                  <li>
                    <i class="fa-solid fa-star" style="color: #ff7bac;"></i>
                  </li>
                  <li>
                    <i class="fa-solid fa-star" style="color: #ff7bac;"></i>
                  </li>
                  <li>
                    <i class="fa-solid fa-star" style="color: #ff7bac;"></i>
                  </li>
                  <li>
                    <i class="fa-regular fa-star-half-stroke" style="color: #ff7bac;"></i>
                  </li>
                </ul>
                <p class="mb-2">
                  <i class="fas fa-quote-left pe-2"></i>Gracias a la aplicación encontré a la persona indicada.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card">
              <div class="card-body py-4 mt-2">
                <div class="d-flex justify-content-center mb-4">
                  <img src="assets/img/testimonios/Img01.jpg" class="rounded-circle shadow-1-strong" width="100" height="100" />
                </div>
                <h5 class="font-weight-bold">Rafael Sánchez</h5>
                <h6 class="font-weight-bold my-3">Usuario</h6>
                <ul class="list-unstyled d-flex justify-content-center">
                  <li>
                    <i class="fa-solid fa-star" style="color: #ff7bac;"></i>
                  </li>
                  <li>
                    <i class="fa-solid fa-star" style="color: #ff7bac;"></i>
                  </li>
                  <li>
                    <i class="fa-solid fa-star" style="color: #ff7bac;"></i>
                  </li>
                  <li>
                    <i class="fa-solid fa-star" style="color: #ff7bac;"></i>
                  </li>
                  <li>
                    <i class="fa-solid fa-star" style="color: #ff7bac;"></i>
                  </li>
                </ul>
                <p class="mb-2">
                  <i class="fas fa-quote-left pe-2"></i>En la aplicación pude indicar lo que buscaba, gracias a eso hoy encontré a mi pareja.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-0">
            <div class="card">
              <div class="card-body py-4 mt-2">
                <div class="d-flex justify-content-center mb-4">
                  <img src="assets/img/testimonios/Img04.jpg" class="rounded-circle shadow-1-strong" width="100" height="100" />
                </div>
                <h5 class="font-weight-bold">Maykol Quiros</h5>
                <h6 class="font-weight-bold my-3">Usuario</h6>
                <ul class="list-unstyled d-flex justify-content-center">
                  <li>
                    <i class="fa-solid fa-star" style="color: #ff7bac;"></i>
                  </li>
                  <li>
                    <i class="fa-solid fa-star" style="color: #ff7bac;"></i>
                  </li>
                  <li>
                    <i class="fa-solid fa-star" style="color: #ff7bac;"></i>
                  </li>
                  <li>
                    <i class="fa-solid fa-star" style="color: #ff7bac;"></i>
                  </li>
                  <li>
                    <i class="fa-regular fa-star" style="color: #ff7bac;"></i>
                  </li>
                </ul>
                <p class="mb-2">
                  <i class="fas fa-quote-left pe-2"></i>Gracias a las pruebas de personalidad y los filtros de búsqueda encontré personas que encajan con mis pensamientos.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


  </main>
  <!------------------------------FIN INFORMACIÓN EMPRESA-->

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