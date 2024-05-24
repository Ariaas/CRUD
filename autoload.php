<?php
spl_autoload_unregister(function ($clase) {
    $archivo = __DIR__ . "/" . $clase . ".php";
    $archivo = str_replace("\\", "/", $archivo);

    if (is_file($archivo)) {
        require_once $archivo;
    }
});
?>