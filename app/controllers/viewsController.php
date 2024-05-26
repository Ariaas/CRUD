<?php

namespace app\controllers;
//debe heredar de la clase de modelo
use app\models\viewsModel;

class viewsController extends viewsModel
{
    // Recibe el parametro y si no viene definido va a login y usa el metodo heredado del modelo
    public function obtenerVistasControlador($vista)
    {
        if ($vista != "") {
            $respuesta = $this->obtenerVistasModelo($vista);
        } else {
            $respuesta = "login";
        }
        return $respuesta;
    }
}
