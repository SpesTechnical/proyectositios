  <!------------------------------HEADER-->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <h1><a href="index.php"><span>Date's Lab</span></a></h1>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?=($_SESSION['nav']=="index") ? "active" : "";?>" href="index.php">Inicio</a></li>
          <li><a class="nav-link scrollto <?=($_SESSION['nav']=="acerca") ? "active" : "";?>" href="acerca.php">Sobre Nosotros</a></li>
          <li><a class="nav-link scrollto <?=($_SESSION['nav']=="contacto") ? "active" : "";?>" href="contacto.php">Contacto</a></li>
          <li><a class="nav-link scrollto <?=($_SESSION['nav']=="login") ? "active" : "";?>" href="login.php">Iniciar Sesión</a></li>
          <li><a class="nav-link scrollto" data-bs-toggle="modal" data-bs-target="#registroNuevo"><button class="btnmodificado">Registrarse</button></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <!------------------------------FIN HEADER-->