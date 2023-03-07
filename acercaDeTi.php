<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca De Ti</title>
    <?php
        require('assets/custom/links.php');
    ?>
</head>
<body>

    <section>
        <div class="container mt-3">
            <h2>CUÉNTANOS ACERCA DE TI <i style="color:#ff7bac" class="fa-solid fa-venus-mars"></i></h2>
            <div class="card" id="cartapasos">
                <div class="form-group mb-3">
                    <div class="card-body">                        
                        <div class="row">
                            <div class="col-lg-6" data-aos="fade-up" style="margin-top: 55px;">
                                <div class="form-group mb-3">
                                    <label class="form-control inputsM" for="orientacion">Mi orientación sexual: 
                                        <select name="orientacion" id="orientacion">
                                            <option value="heterosexual">Heterosexual</option>
                                            <option value="homosexual">Homosexual</option>
                                            <option value="bisexual">Bisexual</option>
                                            <option value="pansexual">Pansexual</option>
                                            <option value="asexual">Asexual</option>
                                        </select>
                                    </label>                          
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control inputsM" for="profesion">Profesión: 
                                        <select name="profesion" id="profesion">
                                            <option value="profesion1">Ingeniero en Sistemas</option>
                                            <option value="profesion2">Doctor</option>
                                            <option value="profesion3">Profesor</option>
                                            <option value="profesion4">Arquitecto</option>
                                            <option value="profesion5">Veterinario</option>
                                        </select>
                                    </label>                          
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-control inputsM" for="genero">Mi género: 
                                        <select name="orientación" id="orientación">
                                            <option value="masculino">Másculino</option>
                                            <option value="femenino">Femenino</option>
                                            <option value="nobinario">No binario</option>
                                        </select>
                                    </label>                          
                                </div>
                                <p style="color: #78A0FF;">Mostrar en mi perfil <i style="color:#ff7bac; font-size:25px"class="fa-solid fa-toggle-off"></i></p> 
                                <hr>
                                <h4>ESTOY EN BUSCA DE <i style="background-color:#ff7bac; color:#fff; padding:5px; border-radius:5px"class="fa-solid fa-magnifying-glass"></i></h4>                            
                                <div class="form-group mb-3">
                                    <button type="button" class="form-control inputsM" for="relacion">Relación a largo plazo <i style="color:#ff7bac; font-size:20px"class="fa-solid fa-shield-heart"></i></button>
                                </div>
                                <div class="form-group mb-3">
                                    <button type="button" class="form-control inputsM" for="relacion">Relación a corto plazo <i style="color:#ff7bac; font-size:20px"class="fa-solid fa-shield-heart"></i></button>
                                </div>
                                <div class="form-group mb-3">
                                    <button type="button" class="form-control inputsM" for="relacion">Solo amigos <i style="color:#ff7bac; font-size:20px"class="fa-solid fa-people-group"></i></button>
                                </div>
                                <div class="form-group mb-3">
                                    <button type="button" class="form-control inputsM" for="relacion">Una sola noche <i style="color:#ff7bac; font-size:20px"class="fa-solid fa-house-night"></i></button>
                                </div>
                                <div class="form-group mb-3">
                                    <button type="button" class="form-control inputsM" for="relacion">Solo una cita <i style="padding:5px; border-radius:3px; color:#fff; background-color:#ff7bac; font-size:15px"class="fa-solid fa-utensils"></i></button>
                                </div>
                                <div class="form-group mb-3">
                                    <button type="button" class="form-control inputsM" for="relacion">Decidiré después <i style="color:#ff7bac; font-size:20px"class="fa-solid fa-clock"></i></button>
                                </div>
                                <div class="form-group mb-3">
                                    <h5>RANGO DE EDAD</h5> <label for="vol">(entre 18 años & 50 años):</label>
                                    <input type="range" style="background-color:#6390f8" min="18 años" max="65 años">
                                </div>
                                <div class="form-group mb-3">
                                    <a href="intereses.php"><button style="font-family: 'Luckiest Guy'" type="button" id="btnSiguiente" class="form-control btnmodificadoRegistro"><i style="font-size:25px; margin:10px" class="fa-regular fa-arrow-right"></i>Siguiente</button></a>                 
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
           require('assets/custom/js.php');
    ?>

</body>
</html>