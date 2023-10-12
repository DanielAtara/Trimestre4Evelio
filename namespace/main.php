<?php

require ('clase1.php');
require ('clase2.php');

$persona1=new abc\persona('camilo andres','camilo@gamil.com','buenos dias');


echo 'imprimiendo datos de la clase persona en el espacio de nombres abc'.'</br>';
echo 'nombres'. $persona1->nombre.'</br>';
echo 'correo'. $persona1->correo.'</br>';
echo 'saludo'.abc\persona::$saludo.'</br>';

$persona1= new Sena\persona('camilo andres','camilo@gamil.com','buenos dias');
echo 'imprimiendo datos de la clase persona en el espacio de nombres sena'.'</br>';
echo 'nombres'. $persona1->nombre. '</br>';
echo 'correo'. $persona1->correo.'</br>';
echo 'saludo'.sena\persona::$saludo.'</br>';

