<?php

require_once "funcValidaciones/funciones.php";

if (!empty($_POST)) {
    //echo "Esta con contenido";
    $validaciones = [];

    if (empty($_POST["txtNombre"])) {
        $validaciones["nombre"] = "El campo nombre es requerido";
    } else if (strlen($_POST["txtNombre"]) < 3) {
        $validaciones["nombre"] = "el campo nombre requiere minimo 3 caracteres";
    }

    if (empty($_POST["txtCorreo"])){
        $validaciones["correo"] = "El campo correo es requerido";
    }else if (!filter_input(INPUT_POST, "txtCorreo",FILTER_VALIDATE_EMAIL)){
        $validaciones["correo"] = "Se requiere un email valido";
    }

    // Formato 'dd/mm/yyyy'
    if (!empty($_POST["txtFechaNacimiento"])){
        if (!\FuncValidaciones\is_date($_POST["txtFechaNacimiento"])){
            $validaciones["fecha"] = "Se requiere una fecha valida dd/mm/YYYY";
        }
    }

    if (!empty($_POST["txtWeb"])){
        if (!filter_input(INPUT_POST, "txtWeb",FILTER_VALIDATE_URL)){
            $validaciones["web"] = "Se requiere una direccion web valida";
        }
    }

    if (empty($_POST["chckCondiciones"])){
        $validaciones["condiciones"] = "Debe aceptar las condiciones";
    }

    echo json_encode([
        "response" => count($validaciones) === 0,
        "errors" => $validaciones
    ]);

    // var_dump($validaciones);
}