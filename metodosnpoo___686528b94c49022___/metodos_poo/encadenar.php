<?php
//##############################################################################
namespace Sena;
//Estamos en el namespace Sena
class Viaje{
    public $fecha;
    public $origen;
    public $destino;
    
    public function planear(){
        print 'Funcion1.'.('Organizar maletas, ropa, trabajo y obligaciones');
        print 'Fecha de incicio de planeación' . $this->fecha = date('d-m-Y');
        return $this;
    }
    public function definirDestino(){
        echo 'Funcion2. Defino su destino';
        print 'Dedino el destino: '.$this->destino = 'San Andres';
        return $this;
    }
    public function definirOrigen(){
        print 'Funcion                                                                    3. Defino el origen: '. $this->origen = 'Bogota';
        print 'Espacio actual: '.(__NAMESPACE__);
        return $this;
    }
    public function miEspacio(){
        print 'Mi namespace o espacio actual:'.'<em>'.(__NAMESPACE__);
    }
}

//Fuera de la clase:
$viaje1 = new Viaje;

//Métodos encadenados. No importa el orden en que se declaren o invoquen, solo que tengan un retorno $this.
$viaje1->planear()->definirOrigen()->definirDestino();
//#####################################################################
namespace Cide;
//Estamos en el namespace Cide

class Viaje{
    //Por faciliad usamos encapsulamiento público, para no estart obligados a usar GET ni SET
    public $fecha;
    public $origen;
    public $destino;
    
    public function planear(){
        print 'Funcion1.'.('Organizar maletas, ropa, trabajo y obligaciones');
        print 'Fecha de incicio de planeación' . $this->fecha = date('d-m-Y');
        return $this;
    }
    public function definirDestino(){
        echo 'Funcion2. Defino su destino';
        print 'Dedino el destino: '.$this->destino = 'San Andres';
        return $this;
    }
    public function definirOrigen(){
        print 'Funcion3. Defino el origen: '. $this->origen = 'Bogota';
        print 'Mi namespace o espacio actual:'.'<em>'.(__NAMESPACE__);
        return $this;
    }
    public function miEspacio(){
        print 'Mi namespace o espacio actual:'.'<em>'.(__NAMESPACE__);
    }
    
}

use Sena;

$viaje1 = new Sena\Viaje();
    echo '<br>';
    $viaje1->miEspacio();




