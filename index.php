<?php
require_once "./config/app.php";
require_once "autoload.php";
require_once "./app/views/inc/sesion_start.php";

if (isset($_GET['views'])) {
    $url = explode("/", $_GET["views"]);
} else {
    $url = ["login"];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "./app/views/inc/head.php"; ?>
</head>

<body>
    <?php

    use app\controllers\viewsController;

    $viewsController = new viewsController();
    $vista = $viewsController->$this->obtenerVistaControlador($url[0]);
    if ($vista == "login" || $vista == "index") {
        require_once "./app/views/content/" . $vista . "-view.php";
    } else {
        require_once $vista;
    }

    require_once  "./app/views/inc/script.php";

    ?>
</body>

</html>

<!-- Vídeo número 9 -->