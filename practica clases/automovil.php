<?php
require_once('Automotor.php');

class Automovil extends Automotor{
    
    //Atributos de la subclase Automovil
    private string $tipo;
    private string $color;
    
    //Creando constructor completo incluyendo los atributos propios y los de la Superclase Automotor
    public function __construct(string $marca, string $modelo, int $precio, string $tipo, string $color) {
        
        //Invocando el contructor de la Superclase para acceder a sus datos
        parent::__construct($marca, $modelo, $precio);
        
        //Declarando el destino de los atributos de la subclase Automovil
        $this->tipo = $tipo;
        $this->color = $color;
    }
    //Los métodos SET se usan para asignar valores a los atributos
    public function set_tipo($tipo){
        $this->tipo=$tipo;
    }
    public function set_color($color){
        $this->color=$color;
    }
    //Con el método GET se devuelven o recuperan los datos de los aributos
    public function get_tipo(){
        return $this->tipo;
    }
    public function get_color(){
        return $this->color;
    }
}  
$volvo=new automovil('volvo','2022',20000000,'todo terreno','negro');


echo $volvo->get_tipo();
echo $volvo->get_color();