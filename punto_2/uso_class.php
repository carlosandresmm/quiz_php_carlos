<?php
require_once "class_nombre.php";
//EN ESTE ARCHIVO USAS TU CLASE

$data_cliente = new cliente('juan','perez',52961455);


$base = $data_cliente->pedir_datos();
echo $base;
echo "<br><hr>";