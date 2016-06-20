<?php
/**
 * Date: 04/05/2015
 * Time: 11:22 AM
 * PROCESO PARA CALCULAR LA EDAD DE UNA PERSONA A TRAVES DE SU RFC
 */

// se le asigna el valor al string con el rfc
$rfc = "jitg910822bt9";

// se toma la posision 4 y se obtienen 6 caracteres
$rfc = substr($rfc,4,6); //910822

// se divide en pares de 2 y lo convierte a un array con la funcion str_split()
// $rfc [0] es igual a 91
// $rfc [1] es igual a 08
// $rfc [2] es igual a 22
$rfc = str_split($rfc,2);

//crear fecha con formato correcto 22-08-1991
$fecha_nac =  $rfc[2].'-'.$rfc[1].'-19'.$rfc[0];

// calcular la edad a paritr de su fecha de nacimiento
function getAge($birthday) {
    $birth = strtotime($birthday);
    $now = strtotime('now');
    $age = ($now - $birth) / 31536000; //el numero son la cantidad de segunds que trae un año
    return floor($age);
}
echo "Actualmente tengo ". getAge($fecha_nac) ." años";
