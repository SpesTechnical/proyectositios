<div class="modal" id="registroNuevo">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="Modal-title">Registrarse <i class="fa-solid fa-user-plus" style="color: #ff7bac;"></i></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
                <form id="registroUsuarios">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group mb-2">
                                <input type="text" class="form-control inputsM" placeholder="Su Nombre(s)" id="Nombre" name="Nombre" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group mb-2">
                                <input type="text" class="form-control inputsM" placeholder="Su Apellido(s)" id="Apellido" name="Apellido" />
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group mb-2">
                                <input type="text" class="form-control inputsM" placeholder="Nombre de Usuario*" id="Usuario" name="Usuario" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group mb-2">
                                <input type="password" class="form-control inputsM" placeholder="Contraseña*" id="Contrasena" name="Contrasena" />
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group mb-2">
                                <input type="number" class="form-control inputsM" placeholder="Número de Teléfono" id="Telefono" name="Telefono" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group mb-2">
                                <input type="mail" class="form-control inputsM" placeholder="Correo electrónico @" id="Correo" name="Correo" />
                            </div>
                        </div>

                        <center>
                            <br>
                            <input type="checkbox" id="Terminos" name="Terminos" class="form-check-input" style="background-color: #ff7bac;" /><strong style="color: #6390f8"> Acepto los Terminos de Servicios y Politica de Privacidad.</strong>
                        </center>
                    </div>

                    <hr>
                    <div class="form-group mb-3">
                        <center>
                            <button type="submit" id="btnRegistroU" name="btnRegistroU" class="btnmodificadoRegistro" style="padding: 7px 51px;">Registrar</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="recuperaContra">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="Modal-title">Recuperar Contraseña</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
                <div class="form-group mb-2">
                    <input type="text" class="form-control inputsM" placeholder="Correo electrónico @" />
                </div>
                <hr>
                <center>
                    <button class="btnmodificadoRegistro">Enviar Solicitud</button>
                </center>
                <br>
                <img src="assets/img/LogoFooter.svg" class="img-fluid" alt="" width="250px">


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>