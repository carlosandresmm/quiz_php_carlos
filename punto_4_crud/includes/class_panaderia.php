<?php

require_once "class_conexion.php";

class Producto extends Conexion
{
    private $nombre_user;
    private $tipo_producto;
    private $conexion_bd;


  
    function __construct()
    {
        $this->conexion_bd = new Conexion();
        $this->conexion_bd = $this->conexion_bd->conexion_base_dato();
    }

        function crear_producto($nombre,$tipo)
        {
            $this->nombre_user = $nombre;
            $this->tipo_producto = $tipo;
           

            $query = "INSERT INTO tb_productos (nombre_producto, tipos_producto) VALUES (?,?)";
            $insert = $this->conexion_bd->prepare($query);
            $array_data_user = array(
                $this->nombre_user,
                $this->tipo_producto, 
                
            );
            $insert->execute($array_data_user);
            $id_user_last = $this->conexion_bd->lastInsertId();
            return $id_user_last;
        }


function consulta_productos()
{
    $query_consulta = "SELECT * FROM tb_productos";
    $consulta = $this->conexion_bd->query($query_consulta);
    $respuesta = $consulta->fetchall(PDO::FETCH_ASSOC);
    return $respuesta;
}


function consulta_producto_x_id($id)
{
    $query_x_id = "SELECT * FROM tb_productos WHERE id_productos = ?";
    $consulta = $this->conexion_bd->prepare($query_x_id);
    $array_where = array($id);
    $consulta->execute($array_where);
    $respuesta = $consulta->fetch(PDO::FETCH_ASSOC);
    return $respuesta;
}

  
function actualiza_producto($id, $nombre, $tipo_producto)
{
    $this->nombre_user = $nombre;
    $this->tipo_postre_user = $tipo_producto;
   

    $query_update = "UPDATE tb_productos SET nombre_producto = ?, tipo_producto = ?,  WHERE id_productos = $id";
    $update = $this->conexion_bd->prepare($query_update);
    $array_update = array(
        $this->nombre_user,
        $this->tipo_producto,
    );
$respuesta = $update->execute($array_update);
    return $respuesta;
}


    function eliminar_producto($id )
    {
        $query_x_id = "DELETE  FROM tb_productos WHERE id_productos = ?";
        $consulta = $this->conexion_bd->prepare($query_x_id);
        $array_where = array($id);
        $consulta->execute($array_where);
        return "producto eliminado";
    }

}



