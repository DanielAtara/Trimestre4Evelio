<?php
date_default_timezone_set('America/bogota');
class avion{
    private string $tipo_uso;
    private string $tipo_plantaMotriz;
    private string $tipo_trenAterrizaje;
public function __construct($tipo_uso, $tipo_plantaMotriz, $tipo_trenAterrizaje) {
    $this->tipo_uso =$tipo_uso ;
    $this ->tipo_plantaMotriz =$tipo_plantaMotriz ;
    $this ->tipo_trenAterrizaje =$tipo_trenAterrizaje;
}
public function gettipo_uso() {
    return $this->tipo_uso;
}
public function settipo_uso($tipo_uso) {
    $this->tipo_uso =$tipo_uso;
}
public function gettipo_plantaMotriz(){
    return $this->tipo_plantaMotriz;
}
public function settipo_plantaMotriz($tipo_plantaMotriz){
    $this->tipo_plantaMotriz=$tipo_plantaMotriz;
}
public function gettipo_trenAterrizaje(){
    return $this->tipo_trenAterrizaje;
}
public function settipo_trenAterrisaje($tipo_trenAterrizaje){
    $this->tipo_trenAterrizaje=$tipo_trenAterrizaje;
}
public function getfecha(){
    return date('y-m-d H:i:s');
}
}
$avion_carga=new avion('avion de carga','motor a piston','retractiles');
$avion_bombardero=new avion('avion bombardero','motor a piston','retractiles');
$avion_reconocimiento=new avion('avion de reconoccimiento','motor a reaccion','fijos');
$avion_transporte=new avion('avion de transporte','motor a piston','retractiles');
$avion_caza=new avion('avion de caza','motor a reaccion','fijos');

echo $avion_carga->gettipo_uso();
echo $avion_carga->gettipo_plantaMotriz();
echo $avion_carga->gettipo_trenAterrizaje();
echo '</br>';
echo $avion_bombardero->gettipo_uso();
echo $avion_bombardero->gettipo_plantaMotriz();
echo $avion_bombardero->gettipo_trenAterrizaje();
echo '</br>';
echo $avion_reconocimiento->gettipo_uso();
echo $avion_reconocimiento->gettipo_plantaMotriz();
echo $avion_reconocimiento->gettipo_trenAterrizaje();
echo '</br>';
echo $avion_transporte->gettipo_uso();
echo $avion_transporte->gettipo_plantaMotriz();
echo $avion_transporte->gettipo_trenAterrizaje();
echo '</br>';
echo $avion_caza->gettipo_uso();
echo $avion_caza->gettipo_plantaMotriz();
echo $avion_caza->gettipo_trenAterrizaje();
echo '</br>';
echo $avion_carga->getfecha();


