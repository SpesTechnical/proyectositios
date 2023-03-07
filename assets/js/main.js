/**
 * Template Name: Bootslander - v4.10.0
 * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim();
    if (all) {
      return [...document.querySelectorAll(el)];
    } else {
      return document.querySelector(el);
    }
  };

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all);
    if (selectEl) {
      if (all) {
        selectEl.forEach((e) => e.addEventListener(type, listener));
      } else {
        selectEl.addEventListener(type, listener);
      }
    }
  };

  /**
   * Easy on scroll event listener
   */
  const onscroll = (el, listener) => {
    el.addEventListener("scroll", listener);
  };

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select("#navbar .scrollto", true);
  const navbarlinksActive = () => {
    let position = window.scrollY + 200;
    navbarlinks.forEach((navbarlink) => {
      if (!navbarlink.hash) return;
      let section = select(navbarlink.hash);
      if (!section) return;
      if (
        position >= section.offsetTop &&
        position <= section.offsetTop + section.offsetHeight
      ) {
        navbarlink.classList.add("active");
      } else {
        navbarlink.classList.remove("active");
      }
    });
  };
  window.addEventListener("load", navbarlinksActive);
  onscroll(document, navbarlinksActive);

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select("#header");
    let offset = header.offsetHeight;

    if (!header.classList.contains("header-scrolled")) {
      offset -= 20;
    }

    let elementPos = select(el).offsetTop;
    window.scrollTo({
      top: elementPos - offset,
      behavior: "smooth",
    });
  };

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select("#header");
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add("header-scrolled");
      } else {
        selectHeader.classList.remove("header-scrolled");
      }
    };
    window.addEventListener("load", headerScrolled);
    onscroll(document, headerScrolled);
  }

  /**
   * Back to top button
   */
  let backtotop = select(".back-to-top");
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add("active");
      } else {
        backtotop.classList.remove("active");
      }
    };
    window.addEventListener("load", toggleBacktotop);
    onscroll(document, toggleBacktotop);
  }

  /**
   * Mobile nav toggle
   */
  on("click", ".mobile-nav-toggle", function (e) {
    select("#navbar").classList.toggle("navbar-mobile");
    this.classList.toggle("bi-list");
    this.classList.toggle("bi-x");
  });

  /**
   * Mobile nav dropdowns activate
   */
  on(
    "click",
    ".navbar .dropdown > a",
    function (e) {
      if (select("#navbar").classList.contains("navbar-mobile")) {
        e.preventDefault();
        this.nextElementSibling.classList.toggle("dropdown-active");
      }
    },
    true
  );

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on(
    "click",
    ".scrollto",
    function (e) {
      if (select(this.hash)) {
        e.preventDefault();

        let navbar = select("#navbar");
        if (navbar.classList.contains("navbar-mobile")) {
          navbar.classList.remove("navbar-mobile");
          let navbarToggle = select(".mobile-nav-toggle");
          navbarToggle.classList.toggle("bi-list");
          navbarToggle.classList.toggle("bi-x");
        }
        scrollto(this.hash);
      }
    },
    true
  );

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener("load", () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash);
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select("#preloader");
  if (preloader) {
    window.addEventListener("load", () => {
      preloader.remove();
    });
  }

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: ".glightbox",
  });

  /**
   * Initiate gallery lightbox
   */
  const galleryLightbox = GLightbox({
    selector: ".gallery-lightbox",
  });

  /**
   * Animation on scroll
   */
  window.addEventListener("load", () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false,
    });
  });

  /**
  * Registro
  */
  $('#btnRegistroU').on('click', function (e) {
    e.preventDefault();

    let datos = $('#registroUsuarios').serializeArray();
    datos.push({ name: 'accion', value: 'registroUsuario' });

    let nombre = $('#Nombre').val();
    let apellido = $('#Apellido').val();
    let usuario = $('#Usuario').val();
    let pass = $('#Contrasena').val();
    let telefono = $('#Telefono').val();
    let correo = $('#Correo').val();
    let terminos = $('#Terminos');

    if (terminos.is(":checked")){
      if(nombre && apellido && usuario && pass && telefono && correo){
        $.ajax({
          type: "POST",
          url: "./usuario/claseUSU.php",
          data: datos,
          success: function (response) {
            let res = JSON.parse(response);

            if(res.response==true){
              Swal.fire("Exito!", "Se creo su usuario correctamente.", "success");
              setTimeout(function(){
                window.location.href = "index.php";
              },2000);
            }else if(res.response==false){
              Swal.fire("Error!", "Se presento un error.", "error");
            }
          }
        });
      }else{
        Swal.fire("Advertencia!", "Todos los campos son obligatorios.", "warning");
      }
    }else{
      Swal.fire("Advertencia!", "Se deben aceptar los Terminos de Servicio y la Politica de Privacidad.", "warning");
    }
  });


  /**
  * Login
  */
  $('#btnlogin').on('click', function (e) {
    e.preventDefault();

    let user = $("#usuario").val();
    let pass = $("#contrasena").val();
    let accion = "loginUser";

    $.ajax({
      url: "logini.php",
      type: "POST",
      data: {
        user,
        pass,
        accion
      },
      success: function (response) {
        $('#loginUsuarios').trigger("reset");
        $('#alertaLogin').html(response);
      }
    });
  });

  /**
   * Send Email
   */
  $("#btnEnviaCorreo").on("click", function (e) {
    e.preventDefault();
    let nombreC = $("#nombreC").val();
    let correoC = $("#correoC").val();
    let mensajeC = $("#mensajeC").val();
    let accion = "enviaSugerencia";
    let expReg = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    let valido = expReg.test(correoC);

    if (mensajeC != "" && correoC != "") {
      if (valido == true) {
        $.ajax({
          url: "general.php",
          type: "POST",
          data: {
            nombreC: nombreC,
            correoC: correoC,
            mensajeC: mensajeC,
            accion: accion,
          },
          success: function () {
            $("#formInfo").find("textarea").val("");
            $("#formInfo").find("input:text").val("");
            Swal.fire("Exito!", "Gracias por tu aporte, de ser necesario te contactarémos al correo brindado anteriormente.", "success");
          },
        });
      } else {
        Swal.fire("Advertencia!", "Ingrese una dirección de correo electrónico @ válida.", "warning");
      }
    } else {
      Swal.fire("Error!", "El formulario esta vacío, por favor complételo.", "error");
    }
  });

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

})();
