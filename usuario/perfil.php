<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Perfil
    </title>
    <?php include_once('./links.php'); ?>
</head>

<body class="user-profile">
    <div class="wrapper ">
        <?php
        $_SESSION['nav'] = basename(__FILE__, ".php");
        include_once('./nav.php');
        require('modals.php');
        ?>

        <div class="main-panel" id="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-regular fa-user" style="font-size:16px;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="perfil.php">Perfil</a>
                                    <a class="dropdown-item" href="salir.php">Cerrar Sesión</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <div class="panel-header panel-header-sm">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#78A0FF" fill-opacity="1" d="M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,256C672,245,768,235,864,213.3C960,192,1056,160,1152,160C1248,160,1344,192,1392,208L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
                </svg>
            </div>

            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="title">Datos del Perfil <i class="fa-solid fa-venus-mars" style="color:#ff7bac;"></i></h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <input type="text" class="form-control inputsM" list="orienta" placeholder="Mi orientación sexual es">
                                                <datalist id="orienta">
                                                    <option>Heterosexual</option>
                                                    <option>Asexual</option>
                                                    <option>Bisexual</option>
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <input type="text" class="form-control inputsM" list="profe" placeholder="Profesión"></input>
                                                <datalist id="profe">
                                                    <option>Ingeniero en Sistemas</option>
                                                    <option>Chofer</option>
                                                    <option>Profesor</option>
                                                </datalist>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 ">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control inputsM" list="gene" placeholder="Mi género"></input>
                                                <datalist id="gene">
                                                    <option>Hombre</option>
                                                    <option>Mujer</option>
                                                    <option>No Binario</option>
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control inputsM" list="si" placeholder="Mostrar en Perfil"></input>
                                                <datalist id="si">
                                                    <option>SI</option>
                                                    <option>NO</option>
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="title">Datos Personales</h5>
                                                <button type="button" class="btncuadrados" data-toggle="modal" data-target="#cambiarContra"><i class='fas fa-key' style='font-size:14px'></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4 ">
                                            <div class="form-group">
                                                <input type="text" class="form-control inputsM" placeholder="Nombre"></input>
                                            </div>
                                        </div>

                                        <div class="col-md-4 ">
                                            <div class="form-group">
                                                <input type="text" class="form-control inputsM" placeholder="Apellidos"></input>
                                            </div>
                                        </div>

                                        <div class="col-md-4 ">
                                            <div class="form-group">
                                                <input type="text" class="form-control inputsM" placeholder="Teléfono"></input>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <input type="date" class="form-control inputsM" placeholder="Fecha de Nacimiento"></input>
                                            </div>
                                        </div>

                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <input type="text" class="form-control inputsM" placeholder="E-mail @"></input>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <center>
                                                <button type="button" class="btnmodificadoRegistro">Guardar <i class="fa-solid fa-floppy-disk"></i></button>
                                            </center>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="title">Datos Adicionales</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <center>
                                                <button type="button" class="btnmodificadoRegistro"><i class="fa-solid fa-pen-to-square"></i> Mis Intereses</button>
                                            </center>
                                        </div>
                                        <div class="col-md-6">
                                            <center>
                                                <button type="button" class="btnmodificadoRegistro" data-toggle="modal" data-target="#editarPrefrencias"><i class="fa-solid fa-pen-to-square"></i> Mis Preferencias</button>
                                            </center>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="../assets/img/hero.png">
                            </div>
                            <div class="card-body">
                                <div class="author">
                                    <img class="avatar border-gray" src="../assets/img/avatar.png">
                                    <h5 class="title">Nombre</h5>
                                    <p class="description">
                                        Usuario
                                    </p>
                                        <button type="button" class="btncuadrados" data-toggle="modal" data-target="#ACTPHOTO"><i class='fas fa-camera' style='font-size:14px'></i></button>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               


            </div>
        </div>

        <!--   Core JS Files   -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <script src="assets/js/plugins/chartjs.min.js"></script>
        <script src="assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
        <script src="assets/demo/demo.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


</body>

</html>