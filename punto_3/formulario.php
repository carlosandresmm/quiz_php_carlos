<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Quiz 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <!--
    Crea un formulario donde se pida la siguiente información
    - Nombres
    - Apellidos
    - Fecha de nacimiento
    - Tipo de documento
    - Numero de documento
    - Asunto
    - Mensaje
    Al momento de enviar la informacion debe ser mostrada por medio de los metodos GET y POST
    -->
    
    <div class="container">
    <h1 class="text-primary" >Formulario 1 metodo $_GET</h1>
    <hr>
        <div class="row">
            <div class="col-6">
                <form action="vista_get.php" method="GET">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido" class="form-control" id="apellido">
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="fecha">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fecha" name="fecha">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="tipo_d">tipo documento</label>
                            <select id="tipo_d" name="tipo_d" class="form-control">
                                <option disable selected value="">Seleccione uno...</option>
                                <option value="1">CC</option>
                                <option value="2">CE</option>
                                <option value="3">TI</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <label for="numero">Numero de documento</label>
                        <input type="number" class="form-control" name="numero" id="numero">
                    </div>
                    <div class="form-group">
                        <label for="asunto">Asunto</label>
                        <input type="tet" class="form-control" name="asunto" id="asunto">
                    </div>
                    
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensaje</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="mensaje" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar datos</button>
                </form>
            </div>
        </div>
    </div>
<hr>

<div class="container">
    <h1 class="text-primary" >Formulario 2 metodo $_POS</h1>
    <hr>
        <div class="row">
            <div class="col-6">
                <form action="vista_post.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido" class="form-control" id="apellido">
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="fecha">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fecha" name="fecha">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="tipo_d">tipo documento</label>
                            <select id="tipo_d" name="tipo_d" class="form-control">
                                <option disable selected value="">Seleccione uno...</option>
                                <option value="1">CC</option>
                                <option value="2">CE</option>
                                <option value="3">TI</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <label for="numero">Numero de documento</label>
                        <input type="number" class="form-control" name="numero" id="numero">
                    </div>
                    <div class="form-group">
                        <label for="asunto">Asunto</label>
                        <input type="tet" class="form-control" name="asunto" id="asunto">
                    </div>
                    
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensaje</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="mensaje" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar datos</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>