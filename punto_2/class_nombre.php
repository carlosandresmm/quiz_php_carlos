<?php
//EN ESTE ARCHIVO VA TU CLASE


class cliente{
    public $nombre;
    public $apellido;
    public $cedula;
    public $datostotal;

    function __construct($dato_1, $dato_2, $dato_3)
    {
        $this->nombre = $dato_1;
        $this->apellido = $dato_2;
        $this->cedula = $dato_3;
    }

    function pedir_datos(){
        $this->datostotal = $this->nombre .'-'. $this->apellido .'-'.$this->cedula;
        return $this->datostotal;
    }
}