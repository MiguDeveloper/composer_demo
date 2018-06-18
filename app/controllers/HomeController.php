<?php

namespace Controllers;
require_once "models/Empleado.php";

use Core\Database;
use Models\Empleado;

class HomeController{
    private $empleado;

    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->empleado = new \Models\Empleado();
    }

    public function index(){
        $tituloPage = "Titulo de la pagina";
        $newRecord = new Empleado;
        $newRecord->id = 4;
        $newRecord->nombres = "Miguel Angel";
        $newRecord->apellidos  = "Chinchay H";
        $newRecord->fechaNacimiento = "1988-09-24";
        $newRecord->profesion_id = 2;

        $model = $this->empleado->guardar($newRecord);
        var_dump($model);
        exit;
        require_once _VIEW_PATH_ . "header.php";
        require_once _VIEW_PATH_ . "home/index.php";
        require_once _VIEW_PATH_ . "footer.php";
    }

    public function test(){
        require_once _VIEW_PATH_ . "header.php";
        require_once _VIEW_PATH_ . "home/test.php";
        require_once _VIEW_PATH_ . "footer.php";
    }

    public function hello(){
        echo "Hola";
    }
}