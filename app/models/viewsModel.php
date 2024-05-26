<?php

namespace app\models;

// Se crea la clase con el mismo nombre del archivo de modelo
class viewsModel
{
    // recibe el valor desde el controlador que va a ser el nombre de la vista pasada por el url
    protected function obtenerVistasModelo($vista)
    {
        // array con todas las palabras que puedan ir en la vista
        $listaBlanca = ["dashboard"]; 
        // si existe en el array busca en el directorio
        if (in_array($vista, $listaBlanca)) {
            if (is_file("./app/views/content/" . $vista . "-view.php")) {
                $contenido = "./app/views/content/" . $vista . "-view.php";
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "login" || $vista == "index") {
            $contenido = "login";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}
