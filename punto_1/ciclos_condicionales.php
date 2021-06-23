<?php

//CICLO FOR
 
for($i=0;$i<=10;$i++){
    echo $i;
}

//CICLO WHILE
$edad = 0;
while($edad <=10){
    echo $edad++;
}


//CONDICIONAL IF - ELSE IF - ELSE

$edad = 10;
if($edad = 10){
    echo 'muy bien';
}else if($edad = 9){ 
    echo 'regular';
}else{
    echo 'mal';
}

//SWITCH
$semanadias = 'lunes';

switch ($semanadias){
    case 'lunes';
    echo 'llueve';
    break;
   
    case 'martes';
    echo 'sol';
    break;
 default: 'sol y lluvia';
}


//TERNARIA
$x = 10;
$y = 20;
$resultado = $x > $y ? true:false;
echo($resultado);

$frutas ="";

$frutas = 'limon: ' . ($jugo==''?'muy acido':$jugo);
echo $frutas;