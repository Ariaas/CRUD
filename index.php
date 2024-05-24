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
    <?php require_once  "./app/views/inc/script.php"; ?>
    <div class="buttons">
        <button class="button is-primary is-dark">Primary</button>
        <button class="button is-link is-dark">Link</button>
    </div>

    <div class="buttons">
        <button class="button is-info is-dark">Info</button>
        <button class="button is-success is-dark">Success</button>
        <button class="button is-warning is-dark">Warning</button>
        <button class="button is-danger is-dark">Danger</button>
    </div>
</body>

</html>

<!-- Vídeo número 9 -->