<?php

require_once "tienda/ProductoBase.php";
require_once "tienda/productos/Bajo.php";
require_once "tienda/productos/Bateria.php";
require_once "tienda/productos/Guitarra.php";

$instrumento = new \Tienda\Productos\Bajo(1);
var_dump($instrumento->mostrarPrecioFinal());