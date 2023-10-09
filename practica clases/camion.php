    <?php
    require_once('Automotor.php');

    class camion extends Automotor{
        
        //Atributos de la subclase camion
        private int $num_ejes;
        private int $capacidad_peso;
        
        //Creando constructor completo incluyendo los atributos propios y los de la Superclase Automotor
        public function __construct(string $marca, string $modelo, int $precio, int $num_ejes, int $capacidad_peso) {
            
            //Invocando el contructor de la Superclase para acceder a sus datos
            parent::__construct($marca, $modelo, $precio);
            
            //Declarando el destino de los atributos de la subclase Automovil
            $this->num_ejes = $num_ejes;
            $this->capacidad_peso = $capacidad_peso;
        }
        public function get_num_ejes(){
            return  $this->num_ejes;
        }
        public function get_capacidad_peso(){
            return  $this->capacidad_peso;
        }
        public function set_capacidad_peso($capacidad_peso){
            $this->capacidad_peso=$capacidad_peso;
        }
        public function set_num_ejes($num_ejes){
            $this->num_ejes=$num_ejes;
        }

    }