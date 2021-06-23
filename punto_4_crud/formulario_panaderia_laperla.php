
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
        <div class="row">
            <div class="col-6">
                <form action="crear_producto.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre producto</label>
                            <input type="text" name="nombre" class="form-control" id="nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tipo">Tipo producto</label>
                            <input type="text" name="tipo" class="form-control" id="tipo">
                        </div>
                    </div>
                   
    
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
    
        <a href="listar_productos.php?gato_user=4">lista productos</a>
    </div>
</body>

</html>