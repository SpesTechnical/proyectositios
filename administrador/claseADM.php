<?php

namespace claseADM;

session_start();

use PDO;
use PDOException;
use PDOStatement;

class claseADM
{
    private $user = 'sa';
    private $pass = '123';
    private $conn;

    function __construct()
    {
        $this->conn = new PDO('sqlsrv:server=127.0.0.1;database=ProyectoSitios', $this->user, $this->pass);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }

    function getConexion()
    {
        return $this->conn;
    }

    public function loginUsuarios()
    {
        $param = func_get_args();

        $query = "SELECT * FROM Usuarios where usuario='$param[0]' and contrasena='$param[1]'";

        $stmt = $this->conn->query($query);
        $datos = $stmt->fetchAll();

        if (!empty($datos)) {
            return $datos;
        } else {
            return false;
        }
    }
}

$ObjADM = new claseADM();
$ObjADM->loginUsuarios('test','tests');
