<?php

class intructor{
    private string $tipo_documento;
    private string $num_documento;

public function __construct($tipo_documento,$num_documento) {
    $this->tipo_documento=$tipo_documento;
    $this->num_documento=$num_documento;
}
public function gettipo_documento(){
    return $this->tipo_documento;

}
public function getnum_documento(){
    return $this->num_documento;

}
public function settipo_documento($tipo_documento){
    $this->tipo_documento=$tipo_documento;
}
public function setnum_documento($num_documento){
    $this->num_documento=$num_documento;
}

}

$intructor1=new intructor('CC','54673892');
$intructor2=new intructor('TI','35647890');
$intructor3=new intructor('CC','79865457');
$intructor4=new intructor('TI','97865489');
$intructor5=new intructor('cc','35738193');

echo $intructor1->gettipo_documento();
echo '</br>';
echo $intructor1->getnum_documento();
echo '</br>';
echo $intructor2->gettipo_documento();
echo '</br>';
echo $intructor2->getnum_documento();
echo '</br>';
echo $intructor3->gettipo_documento();
echo '</br>';
echo $intructor3->getnum_documento();
echo '</br>';
echo $intructor4->gettipo_documento();
echo '</br>';
echo $intructor4->getnum_documento();
echo '</br>';
echo $intructor5->gettipo_documento();
echo '</br>';
echo $intructor5->getnum_documento();
echo '</br>';