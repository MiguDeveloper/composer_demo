<?php

function exception_error_handler($severidad, $mensaje, $fichero, $línea)
{
    if (!(error_reporting() & $severidad)) {
        // Este código de error no está incluido en error_reporting
        return;
    }
    throw new ErrorException($mensaje, 0, $severidad, $fichero, $línea);
}

set_error_handler("exception_error_handler");

require_once "libstry/matematica/Aritmetica.php";

try {
    /*
     * Si lo hacemos de esta manera el try lo chapa en primera nomas
     * $a = 10;
     * $b = 0;
     * if($b == 0 ){
     * throw new Exception("No se puede dividir entre cero");
     * }
     */
    \Libstry\Matematica\Aritmetica::division(2, 0);
    //strpos();
} catch (Exception $ex) {
    echo $ex->getMessage();
}

