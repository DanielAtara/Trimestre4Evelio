<?php
require('estaticas.php');

//Creando la instancia de Empleado
$empleado1 = new Empleado('Juan', '25-3-2000');
$empleado2 = new Empleado('Juana', '25-4-1996');
$empleado3 = new Empleado('Maritza', '20-7-1996');


//Objeto empleado invocando un método no estático clásico
$empleado1->metodoNoEstatico();

//Clase Empleado invocando a un método estático con el operador PHP ::
Empleado::metodoEstatico();

//Clase Empleado invocando y modificando su atributo estático 
Empleado::$nacionalidad = 'colombiana';
echo "Tengo nacionalidad " . Empleado::$nacionalidad.'<br>';
$empleado1->contar();
$empleado1->contar();
$empleado1->contar();