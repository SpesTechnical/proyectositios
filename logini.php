<?php
require('./administrador/claseADM.php');

if ($_POST['accion'] == 'loginUser') {
    $usuario = $_POST['user'];
    $pass = md5($_POST['pass']);

    if (!preg_match("/^[a-zA-Z0-9_@.]*$/", $usuario)) {
    ?>
        <hr>
        <div class="toast show">
            <div class="card-header alert-secondary" style="text-align: center;">
                <strong class="me-auto">Date´s Lab Sistema informa <i class="fa-duotone fa-circle-info"></i></strong>
            </div>
            <div class="toast-body alert-danger">
                <center>
                    <h6>El usuario no puede contener caracteres especiales <i class="fa-duotone fa-triangle-exclamation"></i></h6>
                </center>
            </div>
        </div>
        <?php
    } else {
        $loginU = $ObjADM->loginUsuarios($usuario, $pass);

        if ($loginU) {
            foreach ($loginU as $datos => $row) {
                $_SESSION['id'] = $row->IdUsuario;
                // $_SESSION['nombre'] = $row['nombre'];
                // $_SESSION['empresa'] = $row['empresa'];
                // $_SESSION['correo'] = $row['correo'];
                // $_SESSION['telefono'] = $row['telefono'];
            }

        ?>
            <script>
                window.location.href = "./test.php";
            </script>
        <?php
        } else {
        ?>
            <hr>
            <div class="toast show">
                <div class="card-header alert-secondary" style="text-align: center;">
                    <strong class="me-auto">Date´s Lab Sistema informa <i class="fa-duotone fa-circle-info"></i></strong>
                </div>
                <div class="toast-body alert-danger">
                    <center>
                        <h6>El usuario o la contraseña no coinciden <i class="fa-duotone fa-triangle-exclamation"></i></h6>
                    </center>
                </div>
            </div>
        <?php
        }
    }
}

?>