<?php
require_once "includes/class_panaderia.php";

$producto_form = new producto();
$producto = $producto_form->consulta_productos();
// print_r("<pre>");

// print_r("<pre>");
// print_r($productos);exit;
//recuerden que esto va ligado a la clase usuario definida en la carpeta includes
//deben de recorrer esa informacion usando for(recomendado) o foreach 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios existentes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

    <body>
        
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo producto</th>
                 
                
                </tr>
            </thead>
            <tbody>

                <?php

                //FORMA 1
                for ($record = 0; $record < sizeof($producto); $record++) {
                ?>
                    <tr>
                        <td><?php echo $producto[$record]['nombre_producto'] ?></td>
                        <td><?php echo $producto[$record]['tipos_producto'] ?></td>
                        
                        <td>
                            <a href="editar_producto.php?gato_user=<?php echo $producto[$record]['id_productos'] ?>">
                                <button class="btn btn-warning">Editar</button>
                            </a>
                        </td>
                        <td>
                        <td>
                            <a href="eliminar_producto.php?michi_user=<?php echo $producto[$record]['id_productos'] ?>">
                                <button class="btn btn-warning">Eliminar</button>
                            </a>
                        </td>
                        </td>
                    </tr>
                <?php
                }
                ?>


            </tbody>
        </table>
    </body>
</body>

</html>