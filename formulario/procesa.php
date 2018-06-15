<?php
// La variable $_GET es un array y hace referencia tipo de envio de los datos
// var_dump($_POST);

// imprimimos un arreglo en formato json
echo json_encode([
    "response" => "Todo correcto",
    "data" => $_POST
]);

