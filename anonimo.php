<?php
$numero=5;
$operacion=function($multiplo){
    global $numero;
    if($multiplo%$numero==0){
        return  'el numero es multiplo';
    }
    else{
        return 'el numero no es multiplo';
    } 
};

echo $operacion(17);