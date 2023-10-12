<?php

require('clase2.php');

use sena as s;

$persona1=new s\persona('camilo','camilo@gmail.com','buenos dias');
echo 'impriminedo datos de clase persona en el espacio de nombres sena'.'</br>';
echo 'nombres'. $persona1->nombre;'</br>';
echo 'correo'. $persona1->correo.'</br>';
echo 'saludo'. s\persona::$saludo;'</br>';

