<?php
namespace Controllers;
require_once "models/Profesion.php";

use Core\Database;
use Models\Profesion;

class ProfesionController{
    private $profesion;

    /**
     * ProfesionController constructor.
     */
    public function __construct()
    {
        $this->profesion = new Profesion();
    }

    public function index(){
        $tituloPage = "Sis::Profesion";

        $model = $this->profesion->listar();
        //var_dump($model);
        //exit;
        require_once _VIEW_PATH_ . "header.php";
        require_once _VIEW_PATH_ . "profesion/index.php";
        require_once _VIEW_PATH_ . "footer.php";
    }

}