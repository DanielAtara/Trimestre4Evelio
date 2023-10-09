<?php
date_default_timezone_set('America/bogota');
class motor {
    private string $tipo_motor;
    private string $tipo_energia;
    private string $tipo_uso;
public function __construct($tipo_motor, $tipo_energia, $tipo_uso) {
    $this->tipo_motor= $tipo_motor;
    $this->tipo_energia= $tipo_energia;
    $this->tipo_uso= $tipo_uso;
}
public function getTipo_motor() {
    return $this->tipo_motor;
}
public function getTipo_energia() {
    return $this->tipo_energia;
}
public function getTipo_uso() {
    return $this->tipo_uso;
}
public function setTipo_motor($tipo_motor) {
    $this->tipo_motor=$tipo_motor;
}
public function setTipo_energia($tipo_energia){
    $this->tipo_energia=$tipo_energia;
}
public function setTipo_uso($tipo_uso){
    $this->tipo_uso=$tipo_uso;
    
}
public function getfecha(){
    return date('y-m-d H:i:s');
}
}
$motores_termicos=new motor('motor termico','energia calorica','trenes');
$motores_combustion=new motor('motor cobustion','energia quimica','vehiculos');
$motores_electricos=new motor('motor electrico','energia electrica','vehiculos automaticos');

echo $motores_termicos->getTipo_motor();
echo '</br>';
echo $motores_termicos->getTipo_energia();
echo '</br>';
echo $motores_termicos->getTipo_uso();
echo '</br>';
echo $motores_combustion->getTipo_motor();
echo '</br>';
echo $motores_combustion->getTipo_energia();
echo '</br>';
echo $motores_combustion->getTipo_uso();
echo '</br>';
echo $motores_electricos->getTipo_motor();
echo '</br>';
echo $motores_electricos->getTipo_energia();
echo '</br>';
echo $motores_electricos->getTipo_uso();
echo '</br>';
echo $motores_electricos->getfecha();