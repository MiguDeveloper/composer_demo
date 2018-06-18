<?php

namespace Models;

class Empleado
{
    private $pdo;

    /**
     * Empleado constructor.
     */
    public function __construct()
    {
        $this->pdo = \Core\Database::getConexion();
    }

    public function listar(): array
    {
        $result = [];
        try {
            $stm = $this->pdo->prepare("select * from empleado");
            $stm->execute();
            $result = $stm->fetchAll();
        } catch (Exceptione $ex) {
        }
        return $result;
    }

    public function guardar(Empleado $empleado): bool
    {
        $result = false;
        try {
            if (empty($empleado->id)) {
                $sql = "INSERT INTO 
                        empleado(nombres,apellidos,fechaNacimiento, profesion_id) 
                        VALUES (?,?,?,?)";
                $stm = $this->pdo->prepare($sql);
                $stm->execute([
                        $empleado->nombres,
                        $empleado->apellidos,
                        $empleado->fechaNacimiento,
                        $empleado->profesion_id
                    ]
                );
            } else {
                $sql = "UPDATE empleado 
                        SET nombres = ?,apellidos=?,fechaNacimiento = ? , profesion_id = ? 
                        WHERE id = ?";
                $stm = $this->pdo->prepare($sql);
                $stm->execute([
                        $empleado->nombres,
                        $empleado->apellidos,
                        $empleado->fechaNacimiento,
                        $empleado->profesion_id,
                        $empleado->id
                    ]
                );
            }

            $result = true;

        } catch (Exception $ex) {

        }

        return $result;
    }

    public function obtener(int $id): Empleado
    {
        $result = new Empleado;
        try {
            $stm = $this->pdo->prepare("SELECT * FROM empleado WHERE id = ?");
            $stm->execute([$id]);
            $fetch = $stm->fetch();

            $result->id = $fetch->id;
            $result->nombre = $fetch->nombres;
            $result->apellidos = $fetch->apellidos;
            $result->fechaNacimiento = $fetch->fechaNacimiento;
            $result->profesion_id = $fetch->profesion_id;
        } catch (Exception $ex) {

        }
        return $result;
    }

    public function eliminar(int $id): bool
    {
        $result = false;
        try {
            $stm = $this->pdo->prepare("DELETE FROM empleado WHERE id = ?");
            $stm->execute([$id]);
            $result = true;
        } catch (Exception $ex) {

        }

        return $result;
    }
}