<?php
// con esta linea de codigo vemos que es lo que me esta mandando el formulario en el campo
// adjuntar archivo, puedo ver la estructura de su array
//var_dump($_FILES);

// Para este ejemplo verificaremos que el archivo no sea null
/*
if (isset($_FILES["archivo"])) {
    move_uploaded_file( $_FILES["archivo"]["tmp_name"], "uploads/" . $_FILES["archivo"]["name"]);
}
*/

if (isset($_FILES["archivo"])) {
    foreach ($_FILES["archivo"]["name"] as $k => $archivo) {
        //var_dump($archivo);
        // Validamos que no sea vacio ni tampoco nulo
        if (!empty($archivo)) {
            move_uploaded_file($_FILES["archivo"]["tmp_name"][$k], "uploads/" . $archivo);
        }
    }
}
