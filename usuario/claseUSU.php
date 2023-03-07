<?php

namespace claseUSU;

require('../administrador/claseADM.php');

use claseADM\claseADM;
use PDO;

class claseUSU extends claseADM
{
    public function registroUsuarios()
    {
        $param = func_get_args();
        $estado = 1;

        $query = "INSERT INTO Usuarios(Nombre, Apellido, Usuario, Correo, Telefono, Contrasena, Estado) VALUES (?,?,?,?,?,?,?)";

        $stmt = $this->getConexion()->prepare($query);
        $stmt->bindParam(1, $param[0], PDO::PARAM_STR);
        $stmt->bindParam(2, $param[1], PDO::PARAM_STR);
        $stmt->bindParam(3, $param[2], PDO::PARAM_STR);
        $stmt->bindParam(4, $param[3], PDO::PARAM_STR);
        $stmt->bindParam(5, $param[4], PDO::PARAM_INT);
        $stmt->bindParam(6, $param[5], PDO::PARAM_STR);
        $stmt->bindParam(7, $estado, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo json_encode(array('response' => true));
        } else {
            echo json_encode(array('response' => true));
        }
    }
}

$ObjUSU = new claseUSU();

if (isset($_POST["accion"])) {
    if ($_POST["accion"] == 'registroUsuario') {
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $usuario = $_POST['Usuario'];
        $pass = $_POST['Contrasena'];
        $telefono = $_POST['Telefono'];
        $correo = $_POST['Correo'];

        $ObjUSU->registroUsuarios($nombre, $apellido, $usuario, $correo, $telefono, $pass);
    }
}
