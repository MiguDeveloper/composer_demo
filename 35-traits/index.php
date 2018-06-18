<?php

require_once "libsTraits/Producto.php";
require_once "libsTraits/traits/CalculoVenta.php";

$obj = new \LibsTrait\Producto("Polera","Adidas",2000,1000);
echo $obj->margen();