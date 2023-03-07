<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
    <?php
        require('assets/custom/links.php');
    ?>
</head>
<body>
    <section>
        <div class="container mt-3">
            <h2>Datos Personales <i style="color:#ff7bac" class="fa-solid fa-images-user"></i></h2>
            <div class="card" id="cartapasos">
                <div class="form-group mb-3">
                    <div class="card-body">                        
                        <div class="row">
                            <div class="col-lg-6" data-aos="fade-up" style="margin-top: 55px;">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control inputsM" placeholder="E-Mail @" />
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control inputsM" placeholder="Telefono" />
                                </div>
                                <div class="form-group mb-3">                    
                                    <i style="color:#ff7bac" class="fa-solid fa-calendar"></i>            
                                    <input type="text" class="form-control inputsM" placeholder="Fecha de Nacimiento "/>
                                </div>
                                <div>
                                <h4><i class="fa-solid fa-images" style="color:#ff7bac"></i> Foto principal del perfil<button style="margin-left:160px" class="btnmodificado">Cargar</button></h4>                                  
                                </div>
                                <div class="form-group mb-3">
                                    <input type="file" id="btnCargar" class="form-group mb-3"></button>
                                </div>
                                <div class="form-group mb-3">
                                    <a href="acercaDeTi.php"><button style="font-family: 'Luckiest Guy'" type="button" id="btnSiguiente" class="form-control btnmodificadoRegistro"><i style="font-size:25px; margin:10px" class="fa-regular fa-arrow-right"></i>Siguiente</button></a>                 
                                </div>
                                <hr>      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <?php
        require('assets/custom/js.php')
    ?>

</body>
</html>