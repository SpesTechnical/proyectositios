<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intereses</title>
    <?php
        require('assets/custom/links.php');
    ?>
</head>
<body>
<section>
        <div class="container mt-3">
            <h2>YA CASI TERMINAS!</h2>
            <label style="color:#ff7bac" for="intereses">Intereses <label style="color:black" for="cantidad">0/5</label><i style="#ff7bac; margin-left:6px; font-size:20px"class="fa-solid fa-location-pin"></i></label>
            <div class="card" id="cartapasos">
                <div class="form-group mb-3">
                    <div class="card-body">                        
                        <div class="row">
                            <div class="col-lg-6" data-aos="fade-up" style="margin-top: 55px;">
                                <div class="form-group mb-3">
                                    <button style="background-color:black; color:white;margin-bottom:20px"type="button" class="form-control inputsM" for="relacion">Caminatas</button>
                                    <button style="background-color:black; color:white;margin-bottom:20px"type="button" class="form-control inputsM" for="relacion">Gimnasio</button>
                                    <button style="background-color:black; color:white;margin-bottom:20px"type="button" class="form-control inputsM" for="relacion">Mascotas</button>
                                    <button style="background-color:black; color:white;margin-bottom:20px"type="button" class="form-control inputsM" for="relacion">Acohol</button>
                                    <button style="background-color:black; color:white;margin-bottom:20px"type="button" class="form-control inputsM" for="relacion">Vehículos</button>
                                    <button style="background-color:black; color:white;margin-bottom:20px"type="button" class="form-control inputsM" for="relacion">Horoscopo</button>
                                </div>
                                <hr>
                                <p style="color:black; text-align:center">Añade una breve descripcion sobre ti</p> 
                                <div class="form-group mb-3">
                                    <input style="padding:20px"type="text" class="form-control inputsM" placeholder="Me gusta mucho salir a conocer...." />
                                </div>
                                <div class="form-group mb-3">
                                    <a href="#"><button style="font-family: 'Luckiest Guy'" type="button" id="btnSiguiente" class="form-control btnmodificadoRegistro"><i style="font-size:25px; margin:10px"class="fa-regular fa-arrow-right"></i>Siguiente</button></a>                 
                                </div>
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