<?php
session_start();
if (isset($_SESSION['datos'])) {
    //CREAMOS VARIABLES y LLAMAMOS LOS DATOS DEL USUARIO
    $nombre = $_SESSION['datos']['name_user'];
    $rol = $_SESSION['datos']['roles_user'];
} else {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANEL PRINCIPAL</title>
</head>

<body>
    <h1>BIENVENIDO: <?php echo $nombre ?></h1>
    <h1>Usted tiene el Rol de: <?php echo $rol ?></h1>
</body>

</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
