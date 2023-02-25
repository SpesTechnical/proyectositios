<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-4"></div>

            <div class="col-sm-4">
                <h2 class="text-center">Iniciar Sesión</h2>

                <form id="loginAdmin">
                    <div class="mb-3 mt-3">
                        <label for="usuario">Usuario:</label>
                        <input type="text" class="form-control" id="usuario" placeholder="Usuario" name="usuario">
                    </div>

                    <div class="mb-3">
                        <label for="pass">Contraseña:</label>
                        <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="pass">
                    </div>
                    <a href="./home.php">
                    <button type="button" class="btn w3-panel w3-border w3-round-xxlarge" style="background: #FF7BAC; width:100%;">Iniciar Sesión</button>
                    </a>
                </form>
            </div>

            <div class="col-sm-4"></div>
        </div>
    </div>
</body>

</html>