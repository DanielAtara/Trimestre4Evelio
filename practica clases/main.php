<?php
require_once('automovil.php');
$mi_automovil=new Automovil('renault','logan',35000000,'sedan','rojo');

echo 'marca automovil',$mi_automovil->get_marca().'</br>';
echo 'modelo automovil',$mi_automovil->get_modelo().'</br>';
echo 'prcio automovil',$mi_automovil->get_precio().'</br>';

echo 'tipo',$mi_automovil->get_tipo().'</br>';
echo 'color',$mi_automovil->get_color().'</br>';


require_once('camion.php');
$mi_camion=new camion('renault trucks','2021',100000000,14,1);

echo 'marca camion',$mi_camion->get_marca().'</br>';
echo 'modelo camion',$mi_camion->get_modelo().'</br>';
echo 'precio camion',$mi_camion->get_precio().'</br>';