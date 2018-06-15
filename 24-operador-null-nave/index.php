<?php

// Operador null
// con este codigo evitamos que nos lleguen campos vacio o nulos
// $usuario_id = !empty($_GET["id"]) ? $_GET["id"] : 1;
// $nombre_usuario = isset($_GET['usuario']) ? $_GET['usuario'] : 'nadie';

// Nueva forma en php
$usuario_id = $_GET["id"] ?? 1;
//var_dump($usuario_id);

// Operador nave espacial
$i = 7;
switch ($i <=> 5){
    case -1:
        echo "El " . $i . " es menor que 5.";
        break;
    case 0:
        echo $i . " y 5 son iguales.";
        break;
    case 1:
        echo "El " . $i . " mayor a 5.";
        break;
}