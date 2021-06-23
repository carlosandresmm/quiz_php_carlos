<?php
require_once "includes/class_panaderia.php";



$producto_form = new Producto();
$producto = $producto_form->consulta_producto_x_id($_GET['gato_user']);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>



    <div class="container">
    <form action="crear_producto.php?update=1" method="POST">
        <div class="row">
            <div class="col-6">
            <input type="hidden" name="id" value="<?php echo $producto['id_productos'] ?>">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre producto</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $producto['nombre_producto'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tipo">Tipo producto</label>
                            <input type="text" name="tipo" class="form-control" id="tipo" value="<?php echo $producto['tipos_producto'] ?>">
                        </div>
                    </div>
                   
    
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>