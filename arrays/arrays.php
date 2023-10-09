<?php

$array1=array('uno','dos','tres');
$array2=array(
    1=>'a',
    2=>'b',
    3=>'c'
);

foreach($array1 as $value) {
    echo $value;
}
foreach($array2 as $key =>$value) {
    echo $value;
}    