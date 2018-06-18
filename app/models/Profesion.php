<?php

namespace Models;

class Profesion
{
    private $pdo;

    /**
     * Profesion constructor.
     */
    public function __construct()
    {
        $this->pdo = \Core\Database::getConexion();
    }

    public function listar(): array
    {
        $resul = [];
        try{
            $stm = $this->pdo->prepare("SELECT * FROM profesion");
            $stm->execute();
            $resul = $stm->fetchAll();
        }catch (Exception $ex){

        }
        return $resul;
    }

}